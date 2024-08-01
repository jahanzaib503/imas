<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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
}
