@extends('layouts.main')
@section('content')
{{-- <section class="inner_banner" style="background-image: url('{{ asset('assets/images/banner/seafarers_medical.jpg') }}')">
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
</section> --}}

<section class="appointment_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="appointment_form client_details">
                    <h2>Client Details</h2>
                    <p>
                        Tell us a bit about yourself
                    </p>
                    <form>
                        
                        <div class="row">
                            <div class="col-md-8">
                                <form action="" id="contact_us">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Name" name="name" required>
                                                <label for="name">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="name@example.com" name="email" required>
                                                <label for="email">Email address</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="tel" class="form-control" id="phone"
                                                    placeholder="Phone" name="phone" required>
                                                <label for="phone">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="dob"
                                                    placeholder="dob" name="dob" required>
                                                <label for="dob">Date of Birth</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="aurhority_apply" class="form-label">Which Local Authority are you applying for? (Taxi ONLY)</label>
                                                <input type="text" class="form-control" id="aurhority_apply" name="aurhority_apply" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="health_condition" class="form-label">Do you have any health conditions? Please include conditions such as diabetes, heart attacks, strokes, etc.</label>
                                                <input type="text" class="form-control" name="health_condition" id="health_condition" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="taxi_medical" class="form-label">Taxi Medical Applicants MUST bring a Medical Summary or Medical Record (depending on the council) - please check and make sure you have the correct documents. Do you have your Medical Summary available? (Yes/No)</label>
                                                <input type="text" class="form-control" id="taxi_medical"
                                                    name="taxi_medical" required>
                                            </div>
                                        </div>

                                    </div>
                                    
            
                                </form>
                            </div>
                            <div class="col-md-4">
                                <div class="booking_details">
                                    <h5>Booking Details</h5>
                                    <p class="test_date">
                                        Taxi Driver Medical Assessment
                                    </p>
                                    <p class="test_date">
                                        Wednesday, July 31, 2024
                                    </p>
                                    <p>
                                        Warrington, WA5 7XQ
                                    </p>
                                    <p>
                                        Medical Doctor
                                    </p>
                                    <p>
                                        30 min
                                    </p>
                                    <p>
                                        £50
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group mb-4">
                            <label for="appointment_time">Select Time</label>
                            <select id="appointment_time" class="form-control">
                                <option value="">Choose Time Slot</option>
                            </select>
                        </div> --}}
                        <button type="submit" class="btn theme-btn">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection