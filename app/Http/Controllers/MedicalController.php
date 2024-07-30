<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function seafarersMedical()
    {
        $medical_info = [
            ['id' => 1, 'name' => 'Seafarers Medical'],
        ];
        return view('seafarers-medical', compact('medical_info'));
    }

    public function ambulanceDriverMedical()
    {
        $medical_info = [
            ['id' => 2, 'name' => 'Ambulance Driver Medical'],
        ];
        return view('ambulance-driver-medical', compact('medical_info'));
    }

    public function taxiDriverMedical()
    {
        $medical_info = [
            ['id' => 3, 'name' => 'Taxi Driver Medical'],
        ];
        return view('taxi-driver-medical', compact('medical_info'));
    }

    public function hgvDriverMedical()
    {
        $medical_info = [
            ['id' => 4, 'name' => 'HGV Driver Medical'],
        ];
        return view('hgv-driver-medical', compact('medical_info'));
    }

    public function craneOperatorsMedical()
    {
        $medical_info = [
            ['id' => 5, 'name' => 'Crane Operators Medical'],
        ];
        return view('crane-operators-medical', compact('medical_info'));
    }

    public function forkliftOperatorMedical()
    {
        $medical_info = [
            ['id' => 6, 'name' => 'Forklift Operator Medical'],
        ];
        return view('forklift-operator-medical', compact('medical_info'));
    }

    public function busDriverMedical()
    {
        $medical_info = [
            ['id' => 7, 'name' => 'Bus Driver Medical'],
        ];
        return view('bus-driver-medical', compact('medical_info'));
    }

    public function trainDriverMedical()
    {
        $medical_info = [
            ['id' => 8, 'name' => 'Train Driver Medical'],
        ];
        return view('train-driver-medical', compact('medical_info'));
    }

    public function motorhomeDriversMedical()
    {
        $medical_info = [
            ['id' => 9, 'name' => 'Motorhome Drivers Medical'],
        ];
        return view('motorhome-drivers-medical', compact('medical_info'));
    }

    public function sportsMedicals()
    {
        $medical_info = [
            ['id' => 10, 'name' => 'Sports Medicals'],
        ];
        return view('sports-medicals', compact('medical_info'));
    }

    public function sicknessReferrals()
    {
        $medical_info = [
            ['id' => 11, 'name' => 'Sickness Referrals'],
        ];
        return view('sickness-referrals', compact('medical_info'));
    }

    public function healthSurveillance()
    {
        $medical_info = [
            ['id' => 12, 'name' => 'Health Surveillance'],
        ];
        return view('health-surveillance', compact('medical_info'));
    }

    public function preEmploymentMedicals()
    {
        $medical_info = [
            ['id' => 13, 'name' => 'Pre-Employment Medicals'],
        ];
        return view('pre-employment-medicals', compact('medical_info'));
    }

    public function safetyCriticalMedicals()
    {
        $medical_info = [
            ['id' => 14, 'name' => 'Safety Critical Medicals'],
        ];
        return view('safety-critical-medicals', compact('medical_info'));
    }
}
