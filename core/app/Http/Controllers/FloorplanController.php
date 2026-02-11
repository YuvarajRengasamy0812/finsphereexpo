<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Floorplan;
use Illuminate\Support\Facades\DB;

class FloorplanController extends Controller
{
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
       

        $exporttitle = 'All';
        $query = DB::table('floorplans');

       
        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('boothtitle')) {
            $query->where('boothtitle', 'like', '%' . $request->location . '%');
        }

        
        $floorplans = $query
            ->orderBy('created_at', 'DESC')
            ->paginate(10)
            ->appends($request->query());

        
        $stats = (object) [
            'total' => DB::table('floorplans')->count(),
        ];

        // return view('dashboard.floorplan.listfloorplan', compact('GeneralWebmasterSections', 'floorplans', 'stats'));

        return response()->json([
        'msg' => 'All Floorplans fetched successfully',
        'details' => [
            'tickets' => $floorplans,
           
           
        ]
    ], 200);
 }
}
