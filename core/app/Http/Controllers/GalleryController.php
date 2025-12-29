<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Photo;
use App\Models\Section;
use App\Models\Topic;
use App\Models\TopicCategory;
use App\Models\WebmasterSection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class GalleryController extends Controller
{
    /**
     * Display the gallery page with all categories and photos
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $lang = Helper::currentLanguage()->code;
        
        // Get webmaster section where title_en is 'gallery'
        $webmasterSection = WebmasterSection::where('title_en', 'gallery')
            ->where('status', 1)
            ->first();

        if (empty($webmasterSection)) {
            abort(404, 'Gallery section not found');
        }

        $webmasterId = $webmasterSection->id;

        // Get all categories (sections) for this webmaster_id
        $categories = Section::where('webmaster_id', $webmasterId)
            ->where('status', 1)
            ->orderBy('row_no', 'asc')
            ->get();

        // Get topic IDs only (more efficient than loading full objects)
        $topicIds = Topic::where('webmaster_id', $webmasterId)
            ->where('status', 1)
            ->pluck('id')
            ->toArray();

        if (empty($topicIds)) {
            return $this->returnEmptyGallery($categories, $lang, $webmasterSection);
        }

        // Get all photos with their topic relationships in one query
        $photos = Photo::whereIn('topic_id', $topicIds)
            ->orderBy('row_no', 'asc')
            ->get();

        if ($photos->isEmpty()) {
            return $this->returnEmptyGallery($categories, $lang, $webmasterSection);
        }

        // Get all topic categories relationships (grouped by topic_id for fast lookup)
        $topicCategories = TopicCategory::whereIn('topic_id', $topicIds)
            ->get()
            ->groupBy('topic_id')
            ->map(function($items) {
                return $items->pluck('section_id')->toArray();
            });

        // Build category filter class cache (avoid repeated lookups)
        $categoryFilterCache = $this->buildCategoryFilterCache($categories, $lang);

        // Build gallery items with category mapping (optimized)
        $galleryItems = [];
        $processedPhotoIds = [];
        
        foreach ($photos as $photo) {
            // Skip duplicates (photos should be unique, but safety check)
            if (isset($processedPhotoIds[$photo->id])) {
                continue;
            }
            
            // Get categories for this photo's topic (fast lookup)
            $categoryIds = $topicCategories->get($photo->topic_id, []);
            
            // Determine filter class - use first category or 'all'
            $filterClass = 'all';
            if (!empty($categoryIds)) {
                $firstCategoryId = $categoryIds[0];
                $filterClass = $categoryFilterCache[$firstCategoryId] ?? 'all';
            }
            
            // Build file path - photos are stored in uploads/topics/
            if (!empty($photo->file)) {
                $imagePath = 'uploads/topics/' . $photo->file;
                
                $galleryItems[] = [
                    'image' => $imagePath,
                    'category' => $filterClass,
                    'filter_class' => $filterClass,
                    'link' => $imagePath,
                    'link_type' => 'image',
                    'alt' => $photo->title ?? basename($photo->file),
                ];
                
                $processedPhotoIds[$photo->id] = true;
            }
        }

        // Get category filter from request
        $categoryFilter = request()->get('category', 'all');
        
        // Filter items by category if not 'all'
        if ($categoryFilter !== 'all' && !empty($categoryFilter)) {
            $galleryItems = array_filter($galleryItems, function($item) use ($categoryFilter) {
                return $item['filter_class'] === $categoryFilter;
            });
            // Re-index array after filtering
            $galleryItems = array_values($galleryItems);
        }

        // Paginate gallery items (9 per page)
        $perPage = 9;
        $currentPage = request()->get('page', 1);
        $totalItems = count($galleryItems);
        $offset = ($currentPage - 1) * $perPage;
        $paginatedItems = array_slice($galleryItems, $offset, $perPage);
        $hasMore = ($offset + count($paginatedItems)) < $totalItems;
        
        // If AJAX request, return JSON
        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'items' => $paginatedItems,
                'hasMore' => $hasMore,
                'currentPage' => $currentPage,
                'totalItems' => $totalItems,
                'categoryFilter' => $categoryFilter,
            ]);
        }

        // Prepare categories for filter menu
        $filterCategories = $this->prepareFilterCategories($categories, $lang);

        return view('frontEnd.pages.gallery', [
            'galleryItems' => $paginatedItems,
            'categories' => $filterCategories,
            'webmasterSection' => $webmasterSection,
            'totalItems' => $totalItems,
            'currentPage' => $currentPage,
            'hasMore' => $hasMore,
            'perPage' => $perPage,
            'categoryFilter' => $categoryFilter,
        ]);
    }

    /**
     * Get gallery data for home page section (optimized - only 6 random photos)
     *
     * @return array
     */
    public function getHomeGalleryData()
    {
        // Get webmaster section where title_en is 'gallery'
        $webmasterSection = WebmasterSection::where('title_en', 'gallery')
            ->where('status', 1)
            ->first();

        if (empty($webmasterSection)) {
            return ['galleryItems' => []];
        }

        // Get topic IDs for this webmaster_id (only IDs, no eager loading needed)
        $topicIds = Topic::where('webmaster_id', $webmasterSection->id)
            ->where('status', 1)
            ->pluck('id');

        if ($topicIds->isEmpty()) {
            return ['galleryItems' => []];
        }

        // Get 6 random photos directly from database (database-level randomization)
        $randomPhotos = Photo::whereIn('topic_id', $topicIds)
            ->inRandomOrder()
            ->limit(6)
            ->get(['file', 'title']);

        // Build minimal gallery items array (no category mapping needed for home page)
        $galleryItems = [];
        foreach ($randomPhotos as $photo) {
            if (!empty($photo->file)) {
                $imagePath = 'uploads/topics/' . $photo->file;
                $galleryItems[] = [
                    'image' => $imagePath,
                    'category' => 'all',
                    'filter_class' => 'all',
                    'link' => $imagePath,
                    'link_type' => 'image',
                    'alt' => $photo->title ?? basename($photo->file),
                ];
            }
        }

        return ['galleryItems' => $galleryItems];
    }

    /**
     * Build category filter class cache to avoid repeated lookups
     *
     * @param \Illuminate\Support\Collection $categories
     * @param string $lang
     * @return array
     */
    private function buildCategoryFilterCache($categories, $lang)
    {
        $cache = [];
        $filterMap = [
            'awards' => 'awards',
            'award' => 'awards',
            'speakers' => 'speakers',
            'speaker' => 'speakers',
            'expo-zone' => 'expo-zone',
            'expozone' => 'expo-zone',
            'workshops' => 'workshops',
            'workshop' => 'workshops',
            'networking' => 'networking',
        ];

        foreach ($categories as $category) {
            $title = $category->{"title_{$lang}"} ?? $category->title_en ?? '';
            if (!empty($title)) {
                $filterClass = strtolower(str_replace(' ', '-', trim($title)));
                $cache[$category->id] = $filterMap[$filterClass] ?? $filterClass;
            } else {
                $cache[$category->id] = 'all';
            }
        }

        return $cache;
    }

    /**
     * Get filter class for category (with cache support)
     *
     * @param int|string $categoryId
     * @param \Illuminate\Support\Collection $categories
     * @return string
     */
    private function getFilterClass($categoryId, $categories)
    {
        if ($categoryId === 'all' || $categoryId === 0) {
            return 'all';
        }

        $category = $categories->firstWhere('id', $categoryId);
        if ($category) {
            $lang = Helper::currentLanguage()->code;
            $title = $category->{"title_{$lang}"} ?? $category->title_en ?? '';
            
            // Convert to filter class format (lowercase, replace spaces with hyphens)
            $filterClass = strtolower(str_replace(' ', '-', trim($title)));
            
            // Map common category names to filter classes
            $filterMap = [
                'awards' => 'awards',
                'award' => 'awards',
                'speakers' => 'speakers',
                'speaker' => 'speakers',
                'expo-zone' => 'expo-zone',
                'expozone' => 'expo-zone',
                'workshops' => 'workshops',
                'workshop' => 'workshops',
                'networking' => 'networking',
            ];

            return $filterMap[$filterClass] ?? $filterClass;
        }

        return 'all';
    }

    /**
     * Prepare categories for filter menu (optimized with cache)
     *
     * @param \Illuminate\Support\Collection $categories
     * @param string $lang
     * @return array
     */
    private function prepareFilterCategories($categories, $lang)
    {
        $filterCategories = [];
        
        // Add "All" category first
        $filterCategories[] = [
            'id' => 'all',
            'title' => __('All'),
            'filter_class' => 'all',
            'slug' => '*',
        ];

        if ($categories->isEmpty()) {
            return $filterCategories;
        }

        // Build filter class cache once (avoid repeated lookups)
        $filterCache = $this->buildCategoryFilterCache($categories, $lang);

        // Add other categories
        foreach ($categories as $category) {
            $title = $category->{"title_{$lang}"} ?? $category->title_en ?? '';
            if (!empty($title)) {
                $filterClass = $filterCache[$category->id] ?? 'all';
                $filterCategories[] = [
                    'id' => $category->id,
                    'title' => $title,
                    'filter_class' => $filterClass,
                    'slug' => '.' . $filterClass,
                ];
            }
        }

        return $filterCategories;
    }

    /**
     * Return empty gallery view (helper method to avoid code duplication)
     *
     * @param \Illuminate\Support\Collection $categories
     * @param string $lang
     * @param \App\Models\WebmasterSection $webmasterSection
     * @return \Illuminate\View\View
     */
    private function returnEmptyGallery($categories, $lang, $webmasterSection)
    {
        $filterCategories = $this->prepareFilterCategories($categories, $lang);
        
        return view('frontEnd.pages.gallery', [
            'galleryItems' => [],
            'categories' => $filterCategories,
            'webmasterSection' => $webmasterSection,
            'totalItems' => 0,
            'currentPage' => 1,
            'hasMore' => false,
            'perPage' => 9,
            'categoryFilter' => 'all',
        ]);
    }
}

