<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorBooking;
use App\Models\SpeakerApplication;
use App\Models\ExhibitorRequest;

class VisitorBookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email',
            'company'     => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'country'     => 'required|string|max:255',
            'phone'       => 'required|string|max:50',
        ]);

        VisitorBooking::create($request->all());

        return redirect()->back()->with('success', 'visitor pass has been bookeding');
    }

    public function speakerstore(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email',
            'company'     => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'topic'       => 'required|string|max:255',
            'about'       => 'required|string'
        ]);

        SpeakerApplication::create($request->all());

        return redirect()->back()->with('success', 'Your application has been Booking');
    }
    public function exhibitorstore(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string|max:50',
            'company'     => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'description' => 'nullable|string'
        ]);

        ExhibitorRequest::create($request->all());

        return redirect()->back()->with('success', 'Booking submitted successfully!');
    }
}
