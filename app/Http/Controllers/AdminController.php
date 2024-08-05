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


    public function storeBlog(Request $request)
    {
        dd($request->all());
        
        $request->validate([
            'title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs|max:255',
            'meta_tags' => 'nullable|string|max:500',
            'content' => 'required',
            'logo_upload' => 'nullable|mimes:pdf,png,jpg,jpeg,webp,gif,bmp,tiff,doc,docx,xls,xlsx,ppt,pptx,heic',
        ]);

        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->heading = $request->input('heading');
        $blog->slug = $request->input('slug');
        $blog->meta_description = $request->input('meta_tags');
        $blog->content = $request->input('content');

        if ($request->hasFile('logo_upload')) {
            $file = $request->file('logo_upload');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $blog->image = $filename;
        }

        $blog->save();

        return redirect()->route('admin.blogs')->with('success', 'Blog created successfully');
    }


}
