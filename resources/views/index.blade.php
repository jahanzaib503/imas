@extends('layouts.main')
@section('content')
    <section class="home_banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="content">
                        <h1 class="hero-title2 wow fadeInLeft" data-wow-duration="3s">
                            <span class="title1">Caring for <span class="line-text">Health</span></span>
                            <span class="title2">Caring for You</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-duration="3s">
                            With qualified and experienced doctors on board, your Medical assessment will be completed
                            with confidence and priority at IMAS.
                        </p>
                        <div class="flex_btn wow fadeInUp" data-wow-duration="4s">
                            <a href="{{ Route('contact-us') }}" class="th-btn">Contact Us</a>
                            <a href="{{ Route('book-medical') }}" class="th-btn style4 wow fadeInUp">View All Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img_sec wow fadeInRight" data-wow-duration="4s">
                        <img src="{{ asset('assets/images/home/Website_1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mb-30 mt-30">
        <div class="space" id="about-sec">
            <div class="shape-mockup" data-top="0" data-right="0"><img
                    src="{{ asset('assets/images/home/pattern_shape_1.png') }}" alt="shape"></div>
            <div class="shape-mockup jump" data-bottom="10%" data-right="3%"><img
                    src="{{ asset('assets/images/home/medicine_1.png') }}" alt="shape"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 mb-30 mb-xl-0">
                        <div class="img-box1 wow fadeInLeft" data-wow-duration="2s">
                            <div class="img1">
                                <img src="{{ asset('assets/images/home/about_1_3.png') }}" alt="About">
                            </div>
                            <div class="about-info">
                                <h3 class="box-title">Dr. Esita Jabed</h3>
                                <p class="box-text">Mention the languages <br> in which the staff.</p>
                                <div class="box-review">
                                    <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i>
                                </div>
                                <a href="tel:+44 7968 999683" class="box-link"><i class="fa-solid fa-phone"></i> +123 456
                                    7896</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="ps-xxl-4 ms-xl-2 text-center text-xl-start">
                            <div class="title-area mb-32 wow fadeInRight" data-wow-duration="2s">
                                <span class="sub-title"><img src="{{ asset('assets/images/home/title_icon.svg') }}"
                                        alt="shape">About
                                    Us Company</span>
                                <h2 class="sec-title">About Us</h2>
                                <p class="sec-text">
                                    At IMAS Medical, we are dedicated to providing comprehensive medical
                                    assessment services with a commitment to excellence in quality and customer service. Our
                                    team of experienced healthcare professionals ensures that you receive the highest
                                    standard of care, whether you need a routine check-up or a specialized medical
                                    examination.
                                </p>
                            </div>
                            <div class="mb-30 mt-n1">
                                <div class="checklist style2 list-two-column wow fadeInUp" data-wow-duration="4s">
                                    <ul>
                                        <li><i class="fas fa-heart-pulse"></i> Medical Professionals</li>
                                        <li><i class="fas fa-heart-pulse"></i> Facilities and Equipment</li>
                                        <li><i class="fas fa-heart-pulse"></i> Emergency Care</li>
                                        <li><i class="fas fa-heart-pulse"></i> Medical Consulting</li>
                                        <li><i class="fas fa-heart-pulse"></i> Services Offered</li>
                                        <li><i class="fas fa-heart-pulse"></i> Specializations</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-4 wow fadeInUp" data-wow-duration="4s">
                                <a href="javascript:void(0);" class="th-btn">More About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service_cards wow fadeInUp" data-wow-delay="100ms">
                        <div class="card-header">
                            <i class="fa-solid fa-taxi"></i>
                        </div>
                        <div class="card-body">
                            <h3>Taxi Driver Medicals</h3>
                            <p>
                                For £50, our taxi or private hire medical assessment is essential for all drivers seeking a
                                licence to operate. Approved by local councils such as Manchester, Knowsley, Wolverhampton,
                                Oldham, Rochdale, and more, it ensures you meet all necessary health standards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service_cards wow fadeInUp" data-wow-delay="200ms">
                        <div class="card-header">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                        <div class="card-body">
                            <h3>D4 Driver Medicals</h3>
                            <p>
                                D4 medicals starting from £45; a required assessment for all drivers seeking their group 2
                                license. This includes HGV drivers, bus drivers, coach drivers, and more.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service_cards wow fadeInUp" data-wow-delay="300ms">
                        <div class="card-header">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <div class="card-body">
                            <h3>Other Medicals</h3>
                            <p>
                                We handle a wide range of medical assessments. Call us today to speak with our team and
                                learn more about our services.
                            </p>
                            <ul>
                                <li>Seafarers Medicals</li>
                                <li>Plant/Machinery Medicals</li>
                                <li>Pre-Employment Medicals</li>
                                <li>Safety Critical Medicals</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service_cards wow fadeInUp" data-wow-delay="400ms">
                        <div class="card-header">
                            <i class="fa-solid fa-person-swimming"></i>
                        </div>
                        <div class="card-body">
                            <h3>Sports Medicals</h3>
                            <p>
                                We offer comprehensive sports medicals, including boxing medicals, pre-fight and post-fight
                                medicals, ringside medical assistance, football medicals, and more. Contact our team today
                                to inquire about our full range of sports services.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service_cards wow fadeInUp" data-wow-delay="500ms">
                        <div class="card-header">
                            <i class="fa-solid fa-truck-medical"></i>
                        </div>
                        <div class="card-body">
                            <h3>Occupational Health</h3>
                            <p>
                                Our occupational health services prioritize your well-being at work. We offer:
                            </p>
                            <ul>
                                <li>Pre-Employment Screening</li>
                                <li>Health Surveillance</li>
                                <li>Wellbeing Screening</li>
                                <li>Sickness Referrals</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service_cards wow fadeInUp" data-wow-delay="600ms">
                        <div class="card-header">
                            <i class="fa-solid fa-house-medical"></i>
                        </div>
                        <div class="card-body">
                            <h3>Private Health Services</h3>
                            <p>
                                Our team of expert doctors, ranging from qualified General Practitioners to Hospital
                                Specialists, provides a variety of private health services:
                            </p>
                            <ul>
                                <li>Vitamin B12</li>
                                <li>Weight Loss Programmes</li>
                                <li>Hyperhidrosis Treatment</li>
                                <li>Baby Circumcisions</li>
                                <li>Virtual GP</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cta-section bg-theme mb-30">
        <div class="pattern-layer lazy" style="background-image: url('{{ asset('assets/images/home/shape-2.png') }}');">
        </div>
        <div class="auto-container">
            <div class="clearfix">
                <div class="text">
                    <h2 class="wow fadeInUp" data-wow-duration="2s">Schedule Your Appointment Online</h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        Experience the ease of booking your medical assessment from home with our online scheduling system.
                        Select a time that suits your busy lifestyle and rest assured that our team of qualified and
                        experienced doctors will provide a thorough and professional assessment. Begin your path to better
                        health with IMAS Medical today.
                    </p>
                </div>

                <div class="btn-box pull-right wow fadeInUp" data-wow-duration="4s">
                    <a href="{{ Route('book-medical') }}" class="th-btn style4">Book an Appointment</a>
                </div>

            </div>

        </div>

    </section>

    <section class="space" data-bg-src="{{ asset('assets/images/home/process_bg_1.jpg') }}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title wow fadeInUp" data-wow-duration="1s">
                    <img src="{{ asset('assets/images/home/title_icon.svg') }}" alt="Icon"> Process Steps
                </span>
                <h2 class="sec-title mb-30 wow fadeInUp" data-wow-duration="2s">
                    Our 4 Simple Steps to Completing Your Assessment
                </h2>
            </div>
            <div class="process-card-wrap">
                <div class="process-card wow fadeInUp" data-wow-delay="200ms">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets/images/home/appointment.jpg') }}" alt="Book Appointment">
                        </div>
                        <p class="box-number">01</p>
                    </div>
                    <h3 class="box-title">Book Your Appointment</h3>
                    <p class="box-text">Easily book your appointment online using our convenient booking form.</p>
                </div>
                <div class="process-card wow fadeInUp" data-wow-delay="300ms">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets/images/home/email_booking.jpg') }}" alt="Email Confirmation">
                        </div>
                        <p class="box-number">02</p>
                    </div>
                    <h3 class="box-title">Check Your Email for Confirmation</h3>
                    <p class="box-text">Receive and review your booking confirmation sent to your email immediately.</p>
                </div>
                <div class="process-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets/images/home/attend_appointment.jpg') }}" alt="Attend Appointment">
                        </div>
                        <p class="box-number">03</p>
                    </div>
                    <h3 class="box-title">Attend Your Appointment</h3>
                    <p class="box-text">Meet with our experienced doctor and bring your medical forms to the appointment.
                    </p>
                </div>
                <div class="process-card wow fadeInUp" data-wow-delay="500ms">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets/images/home/review_submit.jpg') }}" alt="Review and Submit">
                        </div>
                        <p class="box-number">04</p>
                    </div>
                    <h3 class="box-title">Review and Submit Your Medical Assessment</h3>
                    <p class="box-text">Review your completed assessment and submit it with your driver's medical
                        application.</p>
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
                        <p class="sec-text text-white">
                            IMAS Medical is a trusted provider for numerous local authorities
                            across the Northwest, holding multiple commercial contracts with councils. With over 10
                            locations, we are dedicated to delivering exceptional service and have built a solid reputation
                            for both quality and customer care. When you choose us for your taxi medical, you can be
                            confident that you are partnering with an experienced and reputable provider.
                        </p>
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
                <span class="sub-title wow fadeInUp" data-wow-duration="1s"><img
                        src="{{ asset('assets/images/home/title_icon.svg') }}" alt="Icon">Insights and Updates from
                    IMAS Medical</span>
                <h2 class="sec-title mb-30 wow fadeInUp" data-wow-duration="2s">Stay Informed with the Latest News, Tips,
                    and Health Advice</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-blog-post wow fadeInUp" data-wow-delay="200ms">
                        <div class="post-image">
                            <a href="{{ route('blog-details') }}">
                                <img src="{{ asset('assets/images/home/blog_1.jpg') }}" alt="image">
                            </a>
                            <div class="date">
                                <span>July 12, 2024</span>
                            </div>
                        </div>

                        <div class="post-content">
                            <h3><a href="{{ route('blog-details') }}">Taxi Medicals in Manchester: Everything You Need to
                                    Know</a></h3>
                            <a href="{{ route('blog-details') }}" class="details-btn">Read Story</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-blog-post wow fadeInUp" data-wow-delay="300ms">
                        <div class="post-image">
                            <a href="{{ route('blog-details') }}">
                                <img src="{{ asset('assets/images/home/blog_2.jpg') }}" alt="image">
                            </a>
                            <div class="date">
                                <span>July 12, 2024</span>
                            </div>
                        </div>

                        <div class="post-content">
                            <h3><a href="{{ route('blog-details') }}">Checklist for Obtaining a HGV Driver's License</a>
                            </h3>
                            <a href="{{ route('blog-details') }}" class="details-btn">Read Story</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-blog-post wow fadeInUp" data-wow-delay="400ms">
                        <div class="post-image">
                            <a href="{{ route('blog-details') }}">
                                <img src="{{ asset('assets/images/home/blog_3.jpg') }}" alt="image">
                            </a>
                            <div class="date">
                                <span>July 12, 2024</span>
                            </div>
                        </div>

                        <div class="post-content">
                            <h3><a href="{{ route('blog-details') }}">The Crisis of Wait Times for Doctor's Appointments
                                    in the UK</a></h3>
                            <a href="{{ route('blog-details') }}" class="details-btn">Read Story</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <div class="d-flex justify-content-center align-items-center wow fadeInUp" data-wow-duration="4s">
                        <a href="{{ Route('blogs') }}" class="th-btn">View more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
