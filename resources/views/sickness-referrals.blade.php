@extends('layouts.main')
@section('content')
    <section class="inner_banner" style="background-image: url('{{ asset('public/assets/images/banner/sickness-referrals.webp') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>
                    Sickness Referrals
                </h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>
                        Sickness Referrals
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <h3>
                    At IMAS Medical, we understand the challenges that come with sickness absence in the workplace.
                    That's why we offer comprehensive sickness referral services aimed at supporting both employees and
                    employers through these difficult times.
                </h3>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('public/assets/images/inner-images/sickness1.webp') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            Our Approach
                        </h2>
                        <p class="para">
                            When it comes to sickness referrals, our approach is centred on thorough assessment and
                            personalized guidance. We recognize that each individual's situation is unique, so we take the
                            time to understand the nature of the sickness, its impact on the individual's ability to work,
                            and any specific concerns or considerations.
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
                            What We Offer
                        </h2>
                        <ol>
                            <li>
                                <strong>Assessment:</strong> <br>
                                Our experienced medical professionals conduct detailed assessments to evaluate the nature
                                and severity of the sickness. This includes reviewing medical records, conducting
                                examinations, and discussing symptoms with the individual.
                            </li>
                            <li>
                                <strong>Recommendations:</strong> <br>
                                Based on the assessment findings, we provide clear and practical recommendations regarding
                                the duration of sickness absence. We take into account factors such as the nature of the
                                illness, the individual's job role, and any relevant medical guidelines.
                            </li>
                            <li>
                                <strong>Return-to-Work Plans:</strong> <br>
                                We understand that a smooth return to work is crucial for both the individual and the
                                employer. That's why we develop customized return-to-work plans tailored to the individual's
                                needs. This may include phased return options, adjustments to workload or responsibilities,
                                and ongoing support as needed.
                            </li>

                            <li>
                                <strong>Communication:</strong> <br>
                                We maintain open communication channels with both the individual and their employer
                                throughout the sickness referral process. This ensures that everyone is kept informed and
                                involved every step of the way.
                            </li>
                            <li>
                                <strong>Supportive Environment:</strong> <br>
                                We strive to create a supportive and empathetic environment where individuals feel
                                comfortable discussing their health concerns. Our team is committed to providing
                                compassionate care and guidance to help individuals navigate through challenging times.
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('public/assets/images/inner-images/sickness2.webp') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>

            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('public/assets/images/inner-images/why_choose.webp') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            Why Choose IMAS Medical?
                        </h2>
                        <ul>
                            <li>
                                <strong>Expertise:</strong>
                                Our team consists of highly skilled medical professionals with extensive experience in
                                managing sickness referrals.
                            </li>
                            <li>
                                <strong>Tailored Solutions:</strong>
                                We understand that one size does not fit all. That's why we offer personalized
                                recommendations and support tailored to each individual's needs.
                            </li>
                            <li>
                                <strong>Timely Service:</strong>
                                We recognize the importance of timely intervention. Our efficient processes ensure that
                                individuals receive the support they need when they need it most.
                            </li>

                            <li>
                                <strong>Client-Centered Approach:</strong>
                                At IMAS Medical, our focus is always on the well-being and satisfaction of our
                                clients. We go above and beyond to ensure that their needs are met and their expectations
                                are exceeded.
                            </li>
                        </ul>
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
                    <h2 class="wow fadeInUp" data-wow-duration="2s">
                        Get in Touch
                    </h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        If you're in need of sickness referral services or would like to learn more about how IMAS Medical
                         can support your organization, we encourage you to get in touch with our friendly team.
                        Your health and well-being are our top priorities, and we're here to help every step of the way.
                    </p>
                </div>

                <div class="btn-box pull-right wow fadeInUp" data-wow-duration="4s">
                    <a href="{{ getBookingUrl($medical_info['id'], $medical_info['name'], $medical_info['price']) }}" class="th-btn style4">Book an Appointment</a>
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
