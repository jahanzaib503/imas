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
            <span class="sub-title wow fadeInUp" data-wow-duration="1s"><img src="{{ asset('assets/images/home/title_icon.svg') }}" alt="Icon">Process Steps</span>
            <h2 class="sec-title mb-30 wow fadeInUp" data-wow-duration="2s">Our 4 simple steps to completing your assessment</h2>
        </div>
        <div class="process-card-wrap">
            <div class="process-card wow fadeInUp" data-wow-delay="200ms">
                <div class="box-img">
                    <div class="img">
                        <img src="{{ asset('assets/images/home/appointment.jpg') }}" alt="icon">
                    </div>
                    <p class="box-number">01</p>
                </div>
                <h3 class="box-title">Book Your Appointment</h3>
                <p class="box-text">Book your appointment online with ease using our online booking form.</p>
            </div>
            <div class="process-card wow fadeInUp" data-wow-delay="300ms">
                <div class="box-img">
                    <div class="img">
                        <img src="{{ asset('assets/images/home/email_booking.jpg') }}" alt="icon">
                    </div>
                    <p class="box-number">02</p>
                </div>
                <h3 class="box-title">Check your email for your booking confirmation</h3>
                <p class="box-text">Check your email for your booking confirmation. Confirmation is sent immediately.</p>
            </div>
            <div class="process-card wow fadeInUp" data-wow-delay="400ms">
                <div class="box-img">
                    <div class="img">
                        <img src="{{ asset('assets/images/home/attend_appointment.jpg') }}" alt="icon">
                    </div>
                    <p class="box-number">03</p>
                </div>
                <h3 class="box-title">Attend appointment with designated doctor</h3>
                <p class="box-text">Attend your appointment with one of our experienced Doctors with your medical forms.</p>
            </div>
            <div class="process-card wow fadeInUp" data-wow-delay="500ms">
                <div class="box-img">
                    <div class="img">
                        <img src="{{ asset('assets/images/home/review_submit.jpg') }}" alt="icon">
                    </div>
                    <p class="box-number">04</p>
                </div>
                <h3 class="box-title">Review and submit your medical assesment</h3>
                <p class="box-text">Review your completed medical assessments and submit them with your drivers medical application.</p>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden cta-sec4 bg-theme">
    <div class="container z-index-common">
        <div class="row align-items-center justify-content-center text-center text-xl-start">
            <div class="col-xl-7 col-lg-9 space-extra wow fadeInLeft" data-wow-duration="1s">
                <div class="title-area mb-30">
                    <h2 class="sec-title text-white">Approved Medical Provider</h2>
                    <p class="sec-text text-white">As an approved provider to numerous local authorities across the Northwest and holding multiple commercial contracts with councils, IMAS Medical is committed to delivering a high-quality service. With locations in over 10 areas, we’ve established a strong reputation for excellence in both quality and customer service. When you book your taxi medical with us, you can rest assured that you’re working with an experienced and reputable provider.</p>
                </div>
                <div class="flex_btn">
                    <a href="{{ Route('booking') }}" class="th-btn shadow-1">Book Appointment</a>
                    <a href="tel:+44 7968 999683" class="th-btn style2 shadow-1 text-dark">Get Free Consulting</a>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="img-box2 wow fadeInRight" data-wow-duration="2s">
                    <img src="{{ asset('assets/images/home/cta_1.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog_section">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title wow fadeInUp" data-wow-duration="1s"><img src="{{ asset('assets/images/home/title_icon.svg') }}" alt="Icon">Insights and Updates from IMAS Medical</span>
            <h2 class="sec-title mb-30 wow fadeInUp" data-wow-duration="2s">Stay Informed with the Latest News, Tips, and Health Advice</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-blog-post wow fadeInUp" data-wow-delay="200ms">
                    <div class="post-image">
                        <a href="javscript:void(0);">
                            <img src="{{ asset('assets/images/home/blog_1.jpg') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>July 12, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <h3><a href="javscript:void(0);">Taxi Medicals in Manchester: Everything You Need to Know</a></h3>
                        <a href="javscript:void(0);" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-blog-post wow fadeInUp" data-wow-delay="300ms">
                    <div class="post-image">
                        <a href="javscript:void(0);">
                            <img src="{{ asset('assets/images/home/blog_2.jpg') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>July 12, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <h3><a href="javscript:void(0);">Checklist for Obtaining a HGV Driver's License</a></h3>
                        <a href="javscript:void(0);" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-blog-post wow fadeInUp" data-wow-delay="400ms">
                    <div class="post-image">
                        <a href="javscript:void(0);">
                            <img src="{{ asset('assets/images/home/blog_3.jpg') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>July 12, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <h3><a href="javscript:void(0);">The Crisis of Wait Times for Doctor's Appointments in the UK</a></h3>
                        <a href="javscript:void(0);" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection