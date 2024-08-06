<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class MedicalController extends Controller
{
    public function seafarersMedical()
    {
        $medical_info = [
            'id' => 1,
            'name' => 'Seafarers Medical',
            'price' => 75,
        ];
        return view('seafarers-medical', compact('medical_info'));
    }

    public function ambulanceDriverMedical()
    {
        $medical_info = [
            'id' => 2,
            'name' => 'Ambulance Driver Medical',
            'price' => 45,
        ];
        return view('ambulance-driver-medical', compact('medical_info'));
    }

    public function taxiDriverMedical()
    {
        $medical_info = [
            'id' => 3,
            'name' => 'Taxi Driver Medical',
            'price' => 50,
        ];
        return view('taxi-driver-medical', compact('medical_info'));
    }

    public function hgvDriverMedical()
    {
        $medical_info = [
            'id' => 4,
            'name' => 'HGV Driver Medical',
            'price' => 45,
        ];
        return view('hgv-driver-medical', compact('medical_info'));
    }

    public function craneOperatorsMedical()
    {
        $medical_info = [
            'id' => 5,
            'name' => 'Crane Operators Medical',
            'price' => 50,
        ];
        return view('crane-operators-medical', compact('medical_info'));
    }

    public function forkliftOperatorMedical()
    {
        $medical_info = [
            'id' => 6,
            'name' => 'Forklift Operator Medical',
            'price' => 50,
        ];
        return view('forklift-operator-medical', compact('medical_info'));
    }

    public function busDriverMedical()
    {
        $medical_info = [
            'id' => 7,
            'name' => 'Bus Driver Medical',
            'price' => 45,
        ];
        return view('bus-driver-medical', compact('medical_info'));
    }

    public function trainDriverMedical()
    {
        $medical_info = [
            'id' => 8,
            'name' => 'Train Driver Medical',
            'price' => 45,
        ];
        return view('train-driver-medical', compact('medical_info'));
    }

    public function motorhomeDriversMedical()
    {
        $medical_info = [
            'id' => 9,
            'name' => 'Motorhome Drivers Medical',
            'price' => 45,
        ];
        return view('motorhome-drivers-medical', compact('medical_info'));
    }

    public function sportsMedicals()
    {
        $medical_info = [
            'id' => 10,
            'name' => 'Sports Medicals',
            'price' => 50,
        ];
        return view('sports-medicals', compact('medical_info'));
    }

    public function sicknessReferrals()
    {
        $medical_info = [
            'id' => 11,
            'name' => 'Sickness Referrals',
            'price' => 50,
        ];
        return view('sickness-referrals', compact('medical_info'));
    }

    public function healthSurveillance()
    {
        $medical_info = [
            'id' => 12,
            'name' => 'Health Surveillance',
            'price' => 50,
        ];
        return view('health-surveillance', compact('medical_info'));
    }

    public function preEmploymentMedicals()
    {
        $medical_info = [
            'id' => 13,
            'name' => 'Pre-Employment Medicals',
            'price' => 50,
        ];
        return view('pre-employment-medicals', compact('medical_info'));
    }

    public function safetyCriticalMedicals()
    {
        $medical_info = [
            'id' => 14,
            'name' => 'Safety Critical Medicals',
            'price' => 80,
        ];
        return view('safety-critical-medicals', compact('medical_info'));
    }





    public function booking(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $price = $request->get('price');
        return view('booking', compact('id', 'name', 'price'));
    }

    public function bookingForm(Request $request)
    {
        $assessment = $request->input('assessment');
        $location = $request->input('location');
        $date = $request->input('date');
        $time = $request->input('time');
        $price = $request->input('price');

        return view('booking-form', compact('assessment', 'location', 'date', 'time', 'price'));
    }

    public function bookingStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'dob' => 'required|date',
            'assessment' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|string',
            'time' => 'required|string|max:10',
            'price' => 'required|numeric',
        ]);

        $formattedDate = Carbon::parse($request->date)->format('Y-m-d');
        
        $booking = Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'authority_apply' => $request->authority_apply,
            'health_condition' => $request->health_condition,
            'taxi_medical' => $request->taxi_medical,
            'assessment' => $request->assessment,
            'location' => $request->location,
            'date' => $formattedDate,
            'time' => $request->time,
            'price' => $request->price,
        ]);

        Mail::to($booking->email)->send(new BookingConfirmationMail($booking));

        return redirect()->route('index')->with('success', 'Your booking has been successfully created.');
    }

        // In your Controller
    public function getBookingTimes(Request $request)
    {
        $date = $request->input('date');
        $availableTimes = getAvailableTimesForDate($date);
        return response()->json($availableTimes);
    }





    

}
