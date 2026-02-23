<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Floorplan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FloorplanController extends Controller
{
    public function index()
    {
        return view('frontEnd.floorplan.index', [
            'reservedBooths' => $this->getReservedBoothMap(),
        ]);
    }

    public function FloorplanSubmit(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone'        => 'required|string|max:20',
            'company'      => 'nullable|string|max:255',
            'referal_code' => 'nullable|string|max:100',
            'boothno'      => 'nullable|string|max:50',
            'boothtitle'   => 'required|string|max:255',
            'boothsize'    => 'nullable|string|max:100',
            'boothammount' => 'required|numeric|min:0',
            'paymenttype'  => 'required|in:nowpayments,stripe,usdt,bank',
            'networktype'  => 'nullable|string|max:100',
            'file'         => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048|required_if:paymenttype,usdt,bank',
        ]);

        // File upload
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('payments', 'public');
            $validated['file'] = asset('storage/' . $path);
        }

        Floorplan::create($validated);

        return redirect()->back()->with('success', 'Booth booking submitted successfully!');
    }

     public function floorplanList(Request $request)
 {
        $query = DB::table('floorplans');

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('boothtitle')) {
            $query->where('boothtitle', 'like', '%' . $request->boothtitle . '%');
        }

        $floorplans = $query
            ->orderBy('created_at', 'DESC')
            ->paginate(10)
            ->appends($request->query());

        return response()->json([
            'msg' => 'All Floorplans fetched successfully',
            'details' => [
                'tickets' => $floorplans,
                'reserved_booths' => $this->getReservedBoothMap(),
            ],
        ], 200);
    }

    private function getReservedBoothMap(): array
    {
        return Floorplan::query()
            ->where('status', 'approved')
            ->whereNotNull('boothno')
            ->where('boothno', '!=', '')
            ->get()
            ->mapWithKeys(function (Floorplan $floorplan) {
                $boothNo = trim((string) $floorplan->boothno);
                $companyLogo = $this->resolveCompanyLogoUrl($floorplan->company_logo);

                return [
                    $boothNo => [
                        'reserved' => true,
                        'companyName' => $floorplan->company ?: $floorplan->name,
                        'companyLogo' => $companyLogo,
                        'companyUrl' => $floorplan->company_url ?: '#',
                    ],
                ];
            })
            ->toArray();
    }

    private function resolveCompanyLogoUrl(?string $companyLogo): ?string
    {
        if (empty($companyLogo)) {
            return null;
        }

        $companyLogo = trim($companyLogo);

        if (filter_var($companyLogo, FILTER_VALIDATE_URL)) {
            return $companyLogo;
        }

        if (str_starts_with($companyLogo, 'storage/')) {
            return asset($companyLogo);
        }

        if (str_starts_with($companyLogo, 'uploads/')) {
            return asset($companyLogo);
        }

        if (str_starts_with($companyLogo, 'public/')) {
            return $this->toPublicStorageAssetUrl(substr($companyLogo, 7));
        }

        if (str_starts_with($companyLogo, 'company_logos/')) {
            return $this->toPublicStorageAssetUrl($companyLogo);
        }

        if (Storage::disk('public')->exists($companyLogo)) {
            return $this->toPublicStorageAssetUrl($companyLogo);
        }

        if (Storage::disk('public')->exists('company_logos/' . ltrim($companyLogo, '/'))) {
            return $this->toPublicStorageAssetUrl('company_logos/' . ltrim($companyLogo, '/'));
        }

        return asset($companyLogo);
    }

    private function toPublicStorageAssetUrl(string $relativePath): string
    {
        $relativePath = ltrim($relativePath, '/');
        $rootStoragePath = base_path('../storage/' . $relativePath);
        $coreStoragePath = base_path('storage/app/public/' . $relativePath);

        if (is_file($rootStoragePath)) {
            return asset('storage/' . $relativePath);
        }

        if (is_file($coreStoragePath)) {
            return asset('core/storage/app/public/' . $relativePath);
        }

        return asset('storage/' . $relativePath);
    }
}
