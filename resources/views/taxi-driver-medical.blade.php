@extends('layouts.main')
@section('content')
    <section class="inner_banner"
        style="background-image: url('{{ asset('assets/images/banner/taxi-driver-medical.jpeg') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>Taxi Driver Medicals</h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>Taxi Driver Medicals</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <h3>

                    Taxi Driver Medicals Hackey Carriage / Private Hire Driver Medical Forms A taxi or private hire medical
                    from £50, an assessment that all drivers must pass before being granted their licence to operate.

                </h3>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content wow fadeInLeft" data-wow-duration="1s">
                        <h2 class="heading">
                            What is a taxi driver medical?
                        </h2>
                        <p class="para">
                            A taxi or private hire medical is an assessment that all drivers must pass before being granted
                            their license to operate. The test is carried out to ensure that taxi drivers are medically fit
                            to safely drive a private hire vehicle or hackney carriage on public roads.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/taxi1.jpg') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/taxi2.jpg') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            What’s involved in my medical?
                        </h2>
                        <p class="para">
                            During the medical assessment, our team will perform a detailed evaluation of your physical and
                            mental health, which includes an eyesight test, a blood pressure check, and a questionnaire
                            about your medical history. Additionally, our doctor will review your medical records, in line
                            with local authority requirements. The length of the appointment (15 or 30 minutes) depends on
                            whether the local authority requires a full medical record or just a summary.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="content wow fadeInLeft" data-wow-duration="1s">
                        <h2 class="heading">
                            What medical conditions could affect my application?
                        </h2>
                        <p class="para">
                            Passing a taxi medical requires taking into account various medical conditions that could affect
                            your ability to drive safely. The GP carrying out your assessment will assess each condition
                            carefully. Fortunately, the most common reasons for failure are usually easy to address. For
                            instance, drivers may fail their vision test due to an inadequate or outdated prescription. In
                            such cases, we advise visiting an optician before the appointment. Similarly, high blood
                            pressure can sometimes be caused by stress, rushing to the appointment, or an underlying
                            condition. We offer a free re-test to drivers who fail due to high blood pressure, so they can
                            address the issue.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/taxi3.jpg') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>

    <section class="space" data-bg-src="{{ asset('assets/images/home/process_bg_1.jpg') }}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title wow fadeInUp" data-wow-duration="1s"><img
                        src="{{ asset('assets/images/home/title_icon.svg') }}" alt="Icon">Requirements</span>
                <h2 class="sec-title mb-30 wow fadeInUp" data-wow-duration="2s">What your required to bring to your medical
                    assessment</h2>
            </div>
            <div class="row three_cards">
                <div class="col-lg-4">
                    <div class="process-card wow fadeInUp" data-wow-delay="200ms">
                        <div class="box-img">
                            <div class="img">
                                <img src="{{ asset('assets/images/inner-images/ambulance3.webp') }}" alt="icon">
                            </div>
                            <p class="box-number">01</p>
                        </div>
                        <h3 class="box-title">Photographic ID</h3>
                        <p class="box-text">
                            Current UK Drivers License
                            <br>
                            Current UK Passport
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="process-card wow fadeInUp" data-wow-delay="300ms">
                        <div class="box-img">
                            <div class="img">
                                <img src="{{ asset('assets/images/inner-images/ambulance4.webp') }}" alt="icon">
                            </div>
                            <p class="box-number">02</p>
                        </div>
                        <h3 class="box-title">Prescriptions/ Glasses</h3>
                        <p class="box-text">
                            Any Prescriptions
                            <br>
                            Glasses (reading and distance)
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="process-card wow fadeInUp" data-wow-delay="400ms">
                        <div class="box-img">
                            <div class="img">
                                <img src="{{ asset('assets/images/home/attend_appointment.jpg') }}" alt="icon">
                            </div>
                            <p class="box-number">03</p>
                        </div>
                        <h3 class="box-title">Medical Records and Current Medication</h3>
                        <p class="box-text">
                            Full Medical Summary
                            <br>
                            Current Medications
                        </p>
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
                    <h2 class="wow fadeInUp" data-wow-duration="2s">Book Your Taxi Driver Medical Assessment Today
                    </h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        Don’t let delays or long waiting lists hinder your career at sea. Contact IMAS Medical to book
                        your Taxi Driver Medical Assessment and ensure you’re fit for duty. Your health and safety
                        are
                        our top
                        priorities.
                    </p>
                </div>

                <div class="btn-box pull-right wow fadeInUp" data-wow-duration="4s">
                    <a href="{{ Route('book-medical') }}" class="th-btn style4">Book an Appointment</a>
                </div>

            </div>

        </div>

    </section>



    <section class="overflow-hidden cta-sec4">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center text-xl-start">
                <div class="col-xl-7 col-lg-9 space-extra wow fadeInLeft" data-wow-duration="1s">
                    <div class="title-area mb-30">
                        <h2 class="sec-title">Approved Medical Provider</h2>
                        <p class="sec-text">As an approved provider to numerous local authorities across the
                            Northwest and holding multiple commercial contracts with councils, IMAS Medical is committed to
                            delivering a high-quality service. With locations in over 10 areas, we’ve established a strong
                            reputation for excellence in both quality and customer service. When you book your taxi medical
                            with us, you can rest assured that you’re working with an experienced and reputable provider.
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
                            <a href="javscript:void(0);">
                                <img src="{{ asset('assets/images/home/blog_1.jpg') }}" alt="image">
                            </a>
                            <div class="date">
                                <span>July 12, 2024</span>
                            </div>
                        </div>

                        <div class="post-content">
                            <h3><a href="javscript:void(0);">Taxi Medicals in Manchester: Everything You Need to Know</a>
                            </h3>
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
                            <h3><a href="javscript:void(0);">The Crisis of Wait Times for Doctor's Appointments in the
                                    UK</a></h3>
                            <a href="javscript:void(0);" class="details-btn">Read Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
