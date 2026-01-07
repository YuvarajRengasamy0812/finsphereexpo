@extends('frontEnd.layouts.master')

@section('title', 'Gallery - FinSphere Expo Kuwait')

@section('content')

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
    <div class="container">
        <h1 class="title-line-left">Gallery</h1>
        <div class="breadcrumbs">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--==================== S-GALLERY ====================-->
<section class="s-gallery page-gallery">
    <div class="container">

        <!-- Category Filter Buttons -->
        <ul class="tab-nav gallery-tabs filter-menu1 mb-4 d-flex flex-wrap gap-2 justify-content-center">
            @if(isset($categories) && count($categories) > 0)
                @foreach($categories as $category)
                    <li class="item px-3 py-1 {{ $loop->first ? 'active' : '' }}" 
                        data-filter="{{ $category['slug'] }}">
                        {{ $category['title'] }}
                    </li>
                @endforeach
            @else
                <li class="item active px-3 py-1" data-filter="*">All</li>
            @endif
        </ul>

        <!-- Gallery Container -->
        <div id="gallery-items" 
             data-total-items="{{ $totalItems ?? 0 }}"
             data-current-page="{{ $currentPage ?? 1 }}"
             data-per-page="{{ $perPage ?? 10 }}"
             data-has-more="{{ $hasMore ?? false ? 'true' : 'false' }}"
             class="row gx-3 gy-4">

            @foreach($galleryItems as $item)
                <div class="col-lg-4 col-md-6 filter-item {{ $item['filter_class'] }}">
                    <div class="gallery-card position-relative overflow-hidden shadow-sm rounded-3">
                        <a href="{{ asset($item['link']) }}" class="glightbox" data-gallery="gallery-main">
                            <div class="gallery-thumb">
                                <img src="{{ asset($item['image']) }}" alt="{{ $item['alt'] }}" class="w-100 h-100 object-fit-cover transition-scale">
                            </div>
                            <div class="gallery-overlay d-flex flex-column justify-content-center align-items-center text-center">
                                <i class="fas fa-plus fa-2x text-white mb-2"></i>
                                <h5 style="color: #fff!important">{{ $item['alt'] }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Loading Indicator -->
        <div id="gallery-loading" class="row mt-50" style="display: none;">
            <div class="col-12 text-center">
                <div class="vs-btn-loading d-inline-block">
                    <i class="fas fa-spinner fa-spin fa-2x"></i>
                </div>
                <p class="mt-3">Loading more images...</p>
            </div>
        </div>

    </div>
</section>
<!--================== S-GALLERY END ==================-->

<style>
/* Modern gallery card styles */
.gallery-card {
    border-radius: 12px;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.gallery-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}
.gallery-thumb img {
    transition: transform 0.5s ease;
}
.gallery-card:hover .gallery-thumb img {
    transform: scale(1.1);
}
.gallery-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
}
.gallery-card:hover .gallery-overlay {
    opacity: 1;
}


.transition-scale {
    transition: transform 0.5s ease;
    border-radius: 12px;
}
</style>

<script>
(function() {
    'use strict';
    function initInfiniteScroll() {
        if (typeof jQuery === 'undefined') {
            setTimeout(initInfiniteScroll, 100);
            return;
        }
        var $ = jQuery;

        $(document).ready(function() {
            let isLoading = false;
            let $container = $('#gallery-items');
            let hasMore = $container.data('has-more') === true || $container.data('has-more') === 'true';
            let currentPage = parseInt($container.data('current-page')) || 1;
            let currentCategory = '{{ $categoryFilter ?? "all" }}';

            // Category filter click
            $('.filter-menu1 li[data-filter]').on('click', function() {
                $('.filter-menu1 li').removeClass('active');
                $(this).addClass('active');

                const filterValue = $(this).data('filter');
                currentCategory = (filterValue === '*' ? 'all' : filterValue.replace('.', ''));

                currentPage = 1;
                hasMore = true;
                $container.html('');
                loadMoreItems(true);
            });

            // Infinite scroll
            $(window).on('scroll', function() {
                if (isLoading || !hasMore) return;
                const scrollBottom = $(window).scrollTop() + $(window).height();
                const containerBottom = $container.offset().top + $container.outerHeight();
                if (containerBottom - scrollBottom < 300) loadMoreItems();
            });

            function loadMoreItems(resetPage = false) {
                if (isLoading || !hasMore) return;
                isLoading = true;
                if (!resetPage) currentPage++;

                $('#gallery-loading').show();

                $.ajax({
                    url: '{{ url("/gallery") }}',
                    method: 'GET',
                    data: { page: currentPage, category: currentCategory },
                    headers: { 'X-Requested-With': 'XMLHttpRequest' },
                    success: function(response) {
                        if (response.success && response.items.length > 0) {
                            let html = '';
                            response.items.forEach(function(item) {
                                html += `
                                <div class="col-lg-4 col-md-6 filter-item ${item.filter_class}">
                                    <div class="gallery-card position-relative overflow-hidden shadow-sm rounded-3">
                                        <a href="{{ asset('') }}${item.link}" class="glightbox" data-gallery="gallery-main">
                                            <div class="gallery-thumb">
                                                <img src="{{ asset('') }}${item.image}" alt="${item.alt}" class="w-100 h-100 object-fit-cover transition-scale">
                                            </div>
                                            <div class="gallery-overlay d-flex flex-column justify-content-center align-items-center text-center">
                                                <i class="fas fa-plus fa-2x text-white mb-2"></i>
                                                <h5 class="text-white">${item.alt}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                `;
                            });
                            if (resetPage) $container.html(html);
                            else $container.append(html);

                            hasMore = response.hasMore;
                            $container.data('has-more', hasMore);
                            $container.data('current-page', currentPage);

                            // Reinitialize GLightbox
                            if (typeof GLightbox !== 'undefined') {
                                GLightbox({ selector: '.glightbox' });
                            }
                        } else {
                            hasMore = false;
                        }
                        $('#gallery-loading').hide();
                        isLoading = false;
                    },
                    error: function() {
                        $('#gallery-loading').hide();
                        currentPage--;
                        isLoading = false;
                    }
                });
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initInfiniteScroll);
    } else {
        initInfiniteScroll();
    }
})();
</script>

@endsection


{{-- @extends('frontEnd.layouts.master')

@section('title', 'Gallery - FinSphere Expo Kuwait')

@section('content')

    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">Gallery</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <section class="s-gallery page-gallery">
        <div class="container">

            <!-- Category Filter -->
            <ul class="tab-nav gallery-tabs filter-menu1 mb-4 d-flex flex-wrap gap-2 justify-content-center">
                @foreach ($categories ?? [] as $category)
                    <li class="item px-3 py-1 {{ $loop->first ? 'active' : '' }}" data-filter="{{ $category['slug'] }}">
                        {{ $category['title'] }}
                    </li>
                @endforeach
            </ul>

            <!-- Gallery -->
            <div id="gallery-items" data-current-page="{{ $currentPage ?? 1 }}"
                data-has-more="{{ $hasMore ? 'true' : 'false' }}" class="row gx-3 gy-4">

                @foreach ($galleryItems as $item)
                    <div class="col-lg-4 col-md-6 filter-item {{ $item['filter_class'] }}">
                        <div class="gallery-card shadow-sm rounded-3">
                            <div class="gallery-thumb" data-src="{{ asset($item['link']) }}" data-alt="{{ $item['alt'] }}">
                                <img src="{{ asset($item['image']) }}" alt="{{ $item['alt'] }}"
                                    class="w-100 h-100 object-fit-cover">
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Loader -->
            <div id="gallery-loading" class="text-center mt-4" style="display:none;">
                <i class="fas fa-spinner fa-spin fa-2x"></i>
                <p class="mt-2">Loading more images…</p>
            </div>

        </div>
    </section>

    <!-- ================= LIGHTBOX ================= -->
    <div id="lightbox">
        <div class="lightbox-toolbar">
            <button data-action="zoom-in"><i data-lucide="zoom-in"></i></button>
            <button data-action="zoom-out"><i data-lucide="zoom-out"></i></button>
            <button data-action="download"><i data-lucide="download"></i></button>
            <button data-action="share"><i data-lucide="share-2"></i></button>
            <button data-action="close"><i data-lucide="x"></i></button>
        </div>

        <div class="lightbox-content">
            <img id="lightbox-img" src="" alt="">
        </div>
    </div>

    <!-- ================= STYLES ================= -->
    <style>
        .page-gallery .row {
            margin-left: -10px;
            margin-right: -10px;
        }

        .page-gallery .row>[class*="col-"] {
            padding-left: 10px;
            padding-right: 10px;
            margin-bottom: 20px;
        }


        .gallery-card {
            border-radius: 14px;
            overflow: hidden;
            transition: transform .25s ease;
        }

        .gallery-card:hover {
            transform: translateY(-3px);
        }

        .gallery-thumb {
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 3;
            /* keeps grid clean */
            overflow: hidden;
            cursor: zoom-in;
        }


        .gallery-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Lightbox */
        #lightbox {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .92);
            display: none;
            z-index: 9999;
        }

        #lightbox.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .lightbox-toolbar {
            position: absolute;
            top: 16px;
            right: 24px;
            display: flex;
            gap: 12px;
            z-index: 2;
        }


        .lightbox-toolbar button {
            background: rgba(255, 255, 255, .12);
            border: none;
            padding: 10px;
            border-radius: 10px;
            color: #fff;
        }

        .lightbox-content {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 100%;
            max-height: 100%;
        }

        #lightbox-img {
            max-width: 90vw;
            max-height: 85vh;
            object-fit: contain;
            transform-origin: center center;
        }
    </style>

    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        lucide.createIcons();

        let scale = 1;
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');

        /* OPEN (delegated – works for AJAX) */
        document.addEventListener('click', e => {
            const thumb = e.target.closest('.gallery-thumb');
            if (!thumb) return;

            scale = 1;
            img.src = thumb.dataset.src;
            img.alt = thumb.dataset.alt || '';
            img.style.transform = 'scale(1)';
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        /* TOOLBAR */
        document.querySelectorAll('.lightbox-toolbar button').forEach(btn => {
            btn.onclick = () => {
                const action = btn.dataset.action;

                if (action === 'zoom-in') scale += 0.2;
                if (action === 'zoom-out') scale = Math.max(0.6, scale - 0.2);
                if (action === 'download') {
                    const a = document.createElement('a');
                    a.href = img.src;
                    a.download = '';
                    a.click();
                }
                if (action === 'share') navigator.share?.({
                    url: img.src
                });
                if (action === 'close') closeLightbox();

                img.style.transform = `scale(${scale})`;
            };
        });

        /* CLOSE */
        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeLightbox();
        });

        lightbox.addEventListener('click', e => {
            if (e.target === lightbox) closeLightbox();
        });
    </script>

    <script>
        (function($) {
            let loading = false;
            let page = parseInt($('#gallery-items').data('current-page'));
            let hasMore = $('#gallery-items').data('has-more') === 'true';
            let category = 'all';

            $('.filter-menu1 li').on('click', function() {
                if (loading) return;

                $('.filter-menu1 li').removeClass('active');
                $(this).addClass('active');

                category = $(this).data('filter');
                page = 1;
                hasMore = true;

                $('#gallery-items').empty();
                loadMore(true);
            });


            $(window).on('scroll', function() {
                if (!hasMore || loading) return;
                if ($(window).scrollTop() + $(window).height() >
                    $('#gallery-items').offset().top + $('#gallery-items').outerHeight() - 200)

            });

            function loadMore(reset = false) {
                loading = true;
                if (!reset) page++;

                $('#gallery-loading').show();

                $.get('{{ url('/gallery') }}', {
                    page,
                    category
                }, function(res) {
                    if (!res.success || !res.items.length) {
                        hasMore = false;
                    } else {
                        let html = '';
                        res.items.forEach(item => {
                            html += `
                    <div class="col-lg-4 col-md-6 filter-item ${item.filter_class}">
                        <div class="gallery-card">
                            <div class="gallery-thumb"
                                 data-src="{{ asset('') }}${item.link}"
                                 data-alt="${item.alt}">
                                <img src="{{ asset('') }}${item.image}" alt="${item.alt}">
                            </div>
                        </div>
                    </div>`;
                        });
                        $('#gallery-items').append(html);
                    }
                    $('#gallery-loading').hide();
                    loading = false;
                });
            }
        })(jQuery);
    </script>

@endsection --}}

