@extends('layouts.main')
@section('content')
<section class="inner_banner" style="background-image: url('{{ asset('assets/images/banner/seafarers_medical.jpg') }}')">
    <div class="container">
        <div class="inner_banner_content">
            <h1>
                Book Your Appointment
            </h1>
            <ul class="pagination">
                <li>
                    <a class="first" href="{{ Route('index') }}">Home</a>
                </li>
                <li>Book Your Appointment</li>
            </ul>
        </div>
    </div>
</section>

<section class="appointment_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="appointment_form">
                    <h2>Schedule Your Appointment</h2>
                    <form>
                        <div class="form-group mb-4">
                            <label for="assessment">Select Assessment</label>
                            <select id="assessment" class="form-control">
                                <option value="">Select Assessment</option>
                                <option value="Taxi Driver Medical Assessment">Taxi Driver Medical Assessment</option>
                                <option value="HGV/LGV Driver Medical Assessment">HGV/LGV Driver Medical Assessment</option>
                                <option value="Seafarer Medical Assessment">Seafarer Medical Assessment</option>
                                <option value="Bus/ Coach Drivers Medical Assessment">Bus/ Coach Drivers Medical Assessment</option>
                                <option value="Train / Tram Drivers Medical Assessment">Train / Tram Drivers Medical Assessment</option>
                                <option value="Ambulance Drivers Medical Assessment">Ambulance Drivers Medical Assessment</option>
                                <option value="Motorhome Drivers Medical Assessment">Motorhome Drivers Medical Assessment</option>
                                <option value="Safety Critical Medical">Safety Critical Medical</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="location">Select Location</label>
                            <select id="location" class="form-control">
                                <option value="">Choose Location</option>
                                <option value="Manchester">Manchester</option>
                                <option value="Queen Street, Oldham, OL1 1RD">Queen Street, Oldham, OL1 1RD</option>
                                <option value="Regent Street, Nelson, BB9 8LJ">Regent Street, Nelson, BB9 8LJ</option>
                                <option value="Wakefield WF5 9TJ">Wakefield WF5 9TJ</option>
                                <option value="Warrington, WA5 7XQ">Warrington, WA5 7XQ</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="appointment_date">Select Date</label>
                            <input type="text" id="appointment_date" class="form-control" placeholder="Choose Date">
                        </div>
                        <div class="form-group mb-4">
                            <label for="appointment_time">Select Time</label>
                            <select id="appointment_time" class="form-control">
                                <option value="">Choose Time Slot</option>
                            </select>
                        </div>
                        <button type="submit" class="btn theme-btn">Book Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection