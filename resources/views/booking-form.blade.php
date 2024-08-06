@extends('layouts.main')
@section('content')
<section class="appointment_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="appointment_form client_details">
                    <h2>Client Details</h2>
                    <p>Tell us a bit about yourself</p>
                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}" required>
                                            <label for="name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required>
                                            <label for="email">Email address</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone" value="{{ old('phone') }}" required>
                                            <label for="phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="dob" placeholder="dob" name="dob" value="{{ old('dob') }}" required>
                                            <label for="dob">Date of Birth</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label for="aurhority_apply" class="form-label">Which Local Authority are you applying for? (Taxi ONLY)</label>
                                            <input type="text" class="form-control" id="authority_apply" name="authority_apply" value="{{ old('aurhority_apply') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label for="health_condition" class="form-label">Do you have any health conditions? Please include conditions such as diabetes, heart attacks, strokes, etc.</label>
                                            <input type="text" class="form-control" name="health_condition" id="health_condition" value="{{ old('health_condition') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label for="taxi_medical" class="form-label">Taxi Medical Applicants MUST bring a Medical Summary or Medical Record (depending on the council) - please check and make sure you have the correct documents. Do you have your Medical Summary available? (Yes/No)</label>
                                            <input type="text" class="form-control" id="taxi_medical" name="taxi_medical" value="{{ old('taxi_medical') }}" required>
                                        </div>
                                    </div>

                                    <!-- Hidden inputs to store booking details -->
                                    <input type="hidden" name="assessment" value="{{ $assessment }}">
                                    <input type="hidden" name="location" value="{{ $location }}">
                                    <input type="hidden" name="date" value="{{ $date }}">
                                    <input type="hidden" name="time" value="{{ $time }}">
                                    <input type="hidden" name="price" value="{{ $price }}">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="booking_details">
                                    <h5>Booking Details</h5>
                                    <p class="test_date">{{ $assessment }}</p>
                                    <p class="test_date">{{ $date }}</p>
                                    <p>{{ $location }}</p>
                                    <p>{{ $time }}</p>
                                    <p>30 min duration</p>
                                    <p>£{{ $price }}</p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn theme-btn">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
