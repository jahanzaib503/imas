@extends('layouts.main')
@section('content')
<section class="inner_banner" style="background-image: url('{{ asset('assets/images/banner/seafarers_medical.jpg') }}')">
    <div class="container">
        <div class="inner_banner_content">
            <h1>
                Book Your Medical Assessment
            </h1>
            <ul class="pagination">
                <li>
                    <a class="first" href="{{ Route('index') }}">Home</a>
                </li>
                <li>Book Your Medical Assessment</li>
            </ul>
        </div>
    </div>
</section>

<section class="assessment_cards_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card assessment_card wow fadeInUp" data-wow-delay="100ms">
                    <div class="card-header">
                        <a href="{{ Route('booking') }}">
                            <img src="{{ asset('assets/images/inner-images/taxi_assessment.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="heading">
                            Taxi Driver Medical Assessment
                        </a>
                        <div class="book_price_flex">
                            <p class="price">
                                £50
                            </p>
    
                            <a href="{{ Route('booking') }}" class="btn card_btn">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card assessment_card wow fadeInUp" data-wow-delay="200ms">
                    <div class="card-header">
                        <a href="{{ Route('booking') }};">
                            <img src="{{ asset('assets/images/inner-images/hgv_assessment.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="heading">
                            HGV/LGV Driver Medical Assessment
                        </a>
                        <div class="book_price_flex">
                            <p class="price">
                                £45
                            </p>
    
                            <a href="{{ Route('booking') }}" class="btn card_btn">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card assessment_card wow fadeInUp" data-wow-delay="300ms">
                    <div class="card-header">
                        <a href="{{ Route('booking') }};">
                            <img src="{{ asset('assets/images/inner-images/seafarers2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="heading">
                            Seafarer Medical Assessment
                        </a>
                        <div class="book_price_flex">
                            <p class="price">
                                £75
                            </p>
    
                            <a href="{{ Route('booking') }}" class="btn card_btn">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card assessment_card wow fadeInUp" data-wow-delay="400ms">
                    <div class="card-header">
                        <a href="{{ Route('booking') }};">
                            <img src="{{ asset('assets/images/banner/bus-driver-medical.webp') }}" alt="">
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="heading">
                            Bus / Coach Drivers Medical Assessment
                        </a>
                        <div class="book_price_flex">
                            <p class="price">
                                £45
                            </p>
    
                            <a href="{{ Route('booking') }}" class="btn card_btn">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card assessment_card wow fadeInUp" data-wow-delay="500ms">
                    <div class="card-header">
                        <a href="{{ Route('booking') }};">
                            <img src="{{ asset('assets/images/inner-images/train1.webp') }}" alt="">
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="heading">
                            Train / Tram Drivers Medical Assessment
                        </a>
                        <div class="book_price_flex">
                            <p class="price">
                                £45
                            </p>
    
                            <a href="{{ Route('booking') }}" class="btn card_btn">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card assessment_card wow fadeInUp" data-wow-delay="600ms">
                    <div class="card-header">
                        <a href="{{ Route('booking') }};">
                            <img src="{{ asset('assets/images/inner-images/ambulance1.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="heading">
                            Ambulance Drivers Medical Assessment
                        </a>
                        <div class="book_price_flex">
                            <p class="price">
                                £45
                            </p>
    
                            <a href="{{ Route('booking') }}" class="btn card_btn">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card assessment_card wow fadeInUp" data-wow-delay="700ms">
                    <div class="card-header">
                        <a href="{{ Route('booking') }};">
                            <img src="{{ asset('assets/images/inner-images/motorhome1.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="heading">
                            Motorhome Drivers Medical Assessment
                        </a>
                        <div class="book_price_flex">
                            <p class="price">
                                £45
                            </p>
    
                            <a href="{{ Route('booking') }}" class="btn card_btn">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card assessment_card wow fadeInUp" data-wow-delay="800ms">
                    <div class="card-header">
                        <a href="{{ Route('booking') }};">
                            <img src="{{ asset('assets/images/inner-images/why_choose.webp') }}" alt="">
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="heading">
                            Safety Critical Medical
                        </a>
                        <div class="book_price_flex">
                            <p class="price">
                                £80
                            </p>
    
                            <a href="{{ Route('booking') }}" class="btn card_btn">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="cta-section bg-theme mb-30">
    <div class="pattern-layer lazy" style="background-image: url('{{ asset('assets/images/home/shape-2.png') }}');"></div>
    <div class="auto-container">
        <div class="clearfix">
            <div class="text">
                <h2 class="wow fadeInUp" data-wow-duration="2s">Schedule Your Appointment Online</h2>
                <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                    Enjoy the convenience of booking your medical assessment from the comfort of your home. Our online scheduling system allows you to choose a time that fits your busy schedule. With our team of qualified and experienced doctors, you can be confident that your assessment will be thorough and professional. Start your journey to better health with IMAS Medical today.
                </p>
            </div>

            <div class="btn-box pull-right wow fadeInUp" data-wow-duration="4s">
                <a href="{{ Route('book-medical') }}" class="th-btn style4">Book an Appointment</a>
            </div>

        </div>

    </div>

</section> --}}

<section class="space" data-bg-src="{{ asset('assets/images/home/process_bg_1.jpg') }}">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title wow fadeInUp" data-wow-duration="1s">
                <img src="{{ asset('assets/images/home/title_icon.svg') }}" alt="Icon"> Requirements
            </span>
            <h2 class="sec-title mb-30 wow fadeInUp" data-wow-duration="2s">
                What You Need to Bring to Your Medical Assessment
            </h2>
        </div>
        <div class="row three_cards">
            <div class="col-lg-4">
                <div class="process-card wow fadeInUp" data-wow-delay="200ms">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets/images/inner-images/ambulance3.webp') }}" alt="Photographic ID">
                        </div>
                        <p class="box-number">01</p>
                    </div>
                    <h3 class="box-title">Photographic ID</h3>
                    <p class="box-text">
                        Please bring one of the following:
                        <br>
                        - Current UK Driver’s License
                        <br>
                        - Current UK Passport
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="process-card wow fadeInUp" data-wow-delay="300ms">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets/images/inner-images/ambulance4.webp') }}" alt="Prescriptions/Glasses">
                        </div>
                        <p class="box-number">02</p>
                    </div>
                    <h3 class="box-title">Prescriptions/Glasses</h3>
                    <p class="box-text">
                        Ensure you have:
                        <br>
                        - Any relevant prescriptions
                        <br>
                        - Glasses (for reading and distance)
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="process-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets/images/home/attend_appointment.jpg') }}" alt="Medical Records">
                        </div>
                        <p class="box-number">03</p>
                    </div>
                    <h3 class="box-title">Medical Records and Current Medication</h3>
                    <p class="box-text">
                        Please bring:
                        <br>
                        - A full medical summary
                        <br>
                        - Details of current medications
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden cta-sec4">
    <div class="container z-index-common">
        <div class="row align-items-center justify-content-center text-center text-xl-start">
            <div class="col-xl-7 col-lg-9 space-extra wow fadeInLeft" data-wow-duration="1s">
                <div class="title-area mb-30">
                    <h2 class="sec-title">Certified Medical Provider</h2>
                    <p class="sec-text">
                        IMAS Medical is a trusted partner for numerous local authorities across the Northwest and holds several commercial contracts with councils. With over 10 locations, we are dedicated to providing outstanding service and have earned a solid reputation for quality and customer care. When you choose us for your taxi medical, you can be assured of working with a reputable and experienced provider.
                    </p>
                </div>
                <div class="flex_btn">
                    <a href="{{ Route('booking') }}" class="th-btn shadow-1">Schedule Your Appointment</a>
                    <a href="tel:+44 7968 999683" class="th-btn style2 shadow-1 text-dark">Request Free Consultation</a>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="img-box2 wow fadeInRight" data-wow-duration="2s">
                    <img src="{{ asset('assets/images/home/cta_1.png') }}" alt="Medical Services">
                </div>
            </div>
        </div>
    </div>
</section>




@endsection