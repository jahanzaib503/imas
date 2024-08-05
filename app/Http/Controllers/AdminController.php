<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Calendar;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function blogs()
    {
        return view('admin.blogs');
    }

    public function inquiries()
    {
        return view('admin.inquiries');
    }

    public function bookings()
    {
        return view('admin.bookings');
    }

    public function bookingsDetails()
    {
        return view('admin.bookings-details');
    }

    public function calendar()
    {
        return view('admin.calendar');
    }

    public function store(Request $request)
    {
        
        $request->all();
        $request->validate([
            'appointment_date' => 'required|date',
            'time' => 'required|array',
            'time.*' => 'required|string'
        ]);

        $date = new \DateTime($request->input('appointment_date'));
        $dayName = $date->format('l');
        Calendar::where('day', $dayName)->delete();
        foreach ($request->input('time') as $time) {
            Calendar::create([
                'day' => $dayName,
                'time' => $time,
            ]);
        }

        return redirect()->back()->with('success', 'Calendar have been saved successfully.');
    }

    public function getAvailableTimes(Request $request)
    {
        $day = $request->input('day');

        $availableTimes = Calendar::where('day', $day)
                                ->pluck('time')
                                ->toArray();

        return response()->json($availableTimes);
    }


}
