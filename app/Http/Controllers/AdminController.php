<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Calendar;
use App\Models\Inquiry;
use App\Models\Blog;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function bookings()
    {
        $bookings = Booking::orderBy('id', 'desc')->get();
        return view('admin.bookings', compact('bookings'));
    }


    public function bookingsDetails($id)
    {
        $booking = Booking::findOrFail($id);
        return view('admin.bookings-details', compact('booking'));
    }


    // Code for Admin Calendar

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

    // Code for Blogs

    public function storeBlog(Request $request)
    {
        //dd($request->all());
        
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


    public function blogs()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blogs', ['blogs' => $blogs]);
    }


    public function editBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.edit-blog', compact('blog'));
    }

    public function updateBlog(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blogs,slug,' . $id,
            'meta_tags' => 'nullable|string|max:255',
            'content' => 'required',
            'logo_upload' => 'nullable|mimes:jpg,jpeg,png,webp,gif,bmp,tiff,pdf,doc,docx,xls,xlsx,ppt,pptx,heic|max:2048'
        ]);

        $blog->title = $request->input('title');
        $blog->heading = $request->input('heading');
        $blog->slug = $request->input('slug');
        $blog->meta_description = $request->input('meta_tags');
        $blog->content = $request->input('content');

        if ($request->hasFile('logo_upload')) {
            $image = $request->file('logo_upload');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images', $filename, 'public');
            $blog->image = $filename;
        }

        $blog->save();

        return redirect()->route('admin.blogs')->with('success', 'Blog updated successfully');
    }



    // Code for Inquiries
    public function storeInquiry(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Inquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Inquiry submitted successfully.');
    }

    public function inquiries()
    {
        $inquiries = Inquiry::orderBy('id', 'desc')->get();
        return view('admin.inquiries', compact('inquiries'));
    }


}
