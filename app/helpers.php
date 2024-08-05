<?php

if (!function_exists('getBookingUrl')) {
    function getBookingUrl($id, $name, $price)
    {
        return route('booking', ['id' => $id, 'name' => urlencode($name), 'price' => $price]);
    }
}

if (!function_exists('generateMedicalSelectBox')) {
    function generateMedicalSelectBox()
    {
        $options = [
            1 => ['label' => 'Seafarers Medical', 'price' => 50],
            2 => ['label' => 'Ambulance Driver Medical', 'price' => 45],
            3 => ['label' => 'Taxi Driver Medical', 'price' => 40],
            4 => ['label' => 'HGV Driver Medical', 'price' => 60],
            5 => ['label' => 'Crane Operators Medical', 'price' => 55],
            6 => ['label' => 'Forklift Operator Medical', 'price' => 50],
            7 => ['label' => 'Bus Driver Medical', 'price' => 45],
            8 => ['label' => 'Train Driver Medical', 'price' => 65],
            9 => ['label' => 'Motorhome Drivers Medical', 'price' => 70],
            10 => ['label' => 'Sports Medicals', 'price' => 55],
            11 => ['label' => 'Sickness Referrals', 'price' => 40],
            12 => ['label' => 'Health Surveillance', 'price' => 50],
            13 => ['label' => 'Pre-Employment Medicals', 'price' => 60],
            14 => ['label' => 'Safety Critical Medicals', 'price' => 65],
        ];

        $html = '<select id="assessment" name="assessment" class="form-select">';
        $html .= '<option value="">Select Assessment</option>';
        foreach ($options as $id => $details) {
            $label = htmlspecialchars($details['label']);
            $price = htmlspecialchars($details['price']);
            $html .= '<option value="' . $id . '" data-price="' . $price . '">' . $label . '</option>';
        }
        $html .= '</select>';
        return $html;
    }
}

if (!function_exists('getAvailableTimesForDate')) {

    function getAvailableTimesForDate($date)
    {
        
        $dayOfWeek = date('l', strtotime($date));

        $calendarTimes = DB::table('calendars')
            ->where('day', $dayOfWeek)
            ->pluck('time')
            ->toArray();

        $bookedTimes = DB::table('bookings')
            ->where('date', $date)
            ->pluck('time')
            ->toArray();

        $availableTimes = $calendarTimes;

        $availableTimes = array_diff($availableTimes, $bookedTimes);
        //dd($availableTimes);


        return $availableTimes;
    }
}





