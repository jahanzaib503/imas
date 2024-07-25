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
                        <div class="form-group">
                            <label for="location">Select Location</label>
                            <select id="location" class="form-control">
                                <option value="">Choose Location</option>
                                <option value="location1">Location 1</option>
                                <option value="location2">Location 2</option>
                                <option value="location3">Location 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="appointment_date">Select Date</label>
                            <input type="text" id="appointment_date" class="form-control" placeholder="Choose Date">
                        </div>
                        <div class="form-group">
                            <label for="appointment_time">Select Time</label>
                            <select id="appointment_time" class="form-control">
                                <option value="">Choose Time Slot</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection