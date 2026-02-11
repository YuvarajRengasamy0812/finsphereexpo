<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\WebmasterSection;
use App\Models\User;
use Auth;
use File;
use Illuminate\Http\Request;
use Redirect;
use Helper;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Registered;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Response;

use App\Models\Booking;
use App\Models\Floorplan;
use Symfony\Component\HttpFoundation\StreamedResponse;

class FloorplanController extends Controller
{
    private $uploadPath = "uploads/settings/";
    protected $mailService;




    public function bookingList(Request $request)
    {

        $GeneralWebmasterSections = WebmasterSection::where('status', 1)
            ->orderby('row_no', 'asc')
            ->get();

        $exporttitle = 'All';
        $query = DB::table('bookings');

        // 🔍 Search filters
        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('game')) {
            $query->where('game', 'like', '%' . $request->game . '%');
        }

        // 📤 Export CSV
        if ($request->has('export') && $request->export === 'csv') {
            return $this->exportCsv($query);
        }

        // 📄 Pagination
        $bookings = $query
            ->orderBy('created_at', 'DESC')
            ->paginate(10)
            ->appends($request->query());

        // 📊 Stats
        $stats = (object) [
            'total' => DB::table('bookings')->count(),
        ];

        return view('dashboard.booking.listbooking', compact('GeneralWebmasterSections', 'bookings', 'stats'));
    }

    // 👁️ View Single Booking
    public function bookingView($id)
    {
        $GeneralWebmasterSections = WebmasterSection::where('status', 1)
            ->orderby('row_no', 'asc')
            ->get();

        $exporttitle = 'All';
        $booking = DB::table('bookings')->where('id', $id)->first();

        abort_if(!$booking, 404);

        return view('dashboard.booking.viewbooking', compact('GeneralWebmasterSections', 'booking'));
    }



    // membership

    public function floorplanList(Request $request)
    {

        $GeneralWebmasterSections = WebmasterSection::where('status', 1)
            ->orderby('row_no', 'asc')
            ->get();

        $exporttitle = 'All';
        $query = DB::table('floorplans');

        // 🔍 Search filters
        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('boothtitle')) {
            $query->where('boothtitle', 'like', '%' . $request->boothtitle . '%');
        }



        // 📄 Pagination
        $floorplans = $query
            ->orderBy('created_at', 'DESC')
            ->paginate(10)
            ->appends($request->query());

        // 📊 Stats
        $stats = (object) [
            'total' => DB::table('floorplans')->count(),
        ];

        return view('dashboard.floorplan.listfloorplan', compact('GeneralWebmasterSections', 'floorplans', 'stats'));
    }

    public function floorplansView($id)
    {
        $GeneralWebmasterSections = WebmasterSection::where('status', 1)
            ->orderby('row_no', 'asc')
            ->get();

        $exporttitle = 'All';
        $floorplan = DB::table('floorplans')->where('id', $id)->first();

        abort_if(!$floorplan, 404);

        return view('dashboard.floorplan.viewfloorplan', compact('GeneralWebmasterSections', 'floorplan'));
    }

    public function approve(Request $request, $id)
{
    // Validate input
    $request->validate([
        'message' => 'nullable|string|max:1000',
        'profile_name' => 'nullable|string|max:255',
        'company_logo' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        'company_url' => 'nullable|url|max:255',
        'status' => 'required|string|in:pending,approved,rejected',
    ]);

    // Find floorplan
    $floorplan = Floorplan::findOrFail($id);

    // Update status and save other info
    $floorplan->status = $request->status;
    $floorplan->approval_message = $request->message;
    $floorplan->approved_by = $request->profile_name ?? auth()->user()->name ?? 'Admin';
    $floorplan->company_url = $request->company_url;

    // Handle company logo upload
    if ($request->hasFile('company_logo')) {
        $file = $request->file('company_logo');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/company_logos', $filename);
        $floorplan->company_logo = 'company_logos/' . $filename;
    }

    $floorplan->save();

    // Set appropriate flash message
    if ($request->status === 'approved') {
        return redirect()->back()->with('success', 'Successfully verified payments');
    } elseif ($request->status === 'rejected') {
        return redirect()->back()->with('error', 'Rejected the Payment');
    } else {
        return redirect()->back()->with('info', 'Floorplan status updated');
    }
}

}



