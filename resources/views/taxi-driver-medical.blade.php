@extends('layouts.main')
@section('content')
    <section class="inner_banner"
        style="background-image: url('{{ asset('public/assets/images/banner/taxi-driver-medical.jpeg') }}')">
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
                            Understanding the Taxi Driver Medical
                        </h2>
                        <p class="para">
                            A taxi or private hire medical is a required assessment for all drivers before they receive
                            their operating license. This evaluation determines whether drivers are medically fit to safely
                            operate a private hire vehicle or hackney carriage on public roads.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('public/assets/images/inner-images/taxi1.webp') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('public/assets/images/inner-images/taxi2.webp') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            What to Expect During Your Medical Assessment
                        </h2>
                        <p class="para">
                            During your medical assessment, our team will conduct a comprehensive evaluation of your physical and mental health. This includes an eyesight test, blood pressure check, and a detailed questionnaire about your medical history. Our doctor will also review your medical records as required by local authorities. The duration of your appointment—either 15 or 30 minutes—depends on whether a full medical record or just a summary is needed by the local authority.
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
                            What Medical Conditions Could Impact My Application?
                        </h2>
                        <p class="para">
                            Various medical conditions can affect your ability to drive safely and, therefore, your taxi medical application. During your assessment, the GP will carefully evaluate each condition. Common issues, such as failing a vision test due to an outdated prescription, are often easily resolved—consider visiting an optician before your appointment. High blood pressure may result from stress, rushing, or an underlying health issue. To assist, we offer a free re-test for drivers who initially fail due to high blood pressure, allowing time to address and resolve the issue.
                        </p>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('public/assets/images/inner-images/taxi3.webp') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>

    <section class="space" data-bg-src="{{ asset('public/assets/images/home/process_bg_1.jpg') }}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title wow fadeInUp" data-wow-duration="1s">
                    <img src="{{ asset('public/assets/images/home/title_icon.svg') }}" alt="Icon"> Requirements
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
                                <img src="{{ asset('public/assets/images/inner-images/ambulance3.webp') }}" alt="Photographic ID">
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
                                <img src="{{ asset('public/assets/images/inner-images/ambulance4.webp') }}" alt="Prescriptions/Glasses">
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
                                <img src="{{ asset('public/assets/images/home/attend_appointment.jpg') }}" alt="Medical Records">
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
    

    <section class="cta-section bg-theme mb-30">
        <div class="pattern-layer lazy" style="background-image: url('{{ asset('public/assets/images/home/shape-2.png') }}');">
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
                    <a href="{{ getBookingUrl($medical_info['id'], $medical_info['name'], $medical_info['price']) }}"
                        class="th-btn style4">Book an Appointment</a>
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
                        <img src="{{ asset('public/assets/images/home/cta_1.png') }}" alt="Medical Services">
                    </div>
                </div>
            </div>
        </div>
    </section>
    

@endsection
