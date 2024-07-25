@extends('layouts.main')
@section('content')
    <section class="inner_banner"
        style="background-image: url('{{ asset('assets/images/banner/health-surveillance.webp') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>
                    Health Surveillance
                </h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>
                        Health Surveillance
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <h3>
                    At IMAS Medical, we believe that proactive health monitoring is essential for maintaining overall
                    well-being and preventing potential health issues. That's why we offer comprehensive health surveillance
                    services aimed at helping our clients stay fit, healthy, and productive.
                </h3>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/health-surveillance1.webp') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            Our Approach
                        </h2>
                        <p class="para">
                            Our approach to health surveillance is centred on thorough assessment, personalized care, and
                            proactive intervention. We understand that each individual's health needs are unique, so we
                            tailor our services to address specific concerns and promote optimal health outcomes.
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
                                <strong>Health Checks:</strong> <br>
                                Our experienced medical professionals conduct thorough health checks to assess various
                                aspects of our clients' well-being. This may include measurements such as blood pressure,
                                heart rate, and body mass index (BMI), as well as other relevant health indicators.
                            </li>
                            <li>
                                <strong>Health Questionnaire:</strong> <br>
                                In addition to physical assessments, we also provide comprehensive health questionnaires to
                                gather information about our clients' medical history, lifestyle habits, and any specific
                                health concerns they may have. This allows us to gain a holistic understanding of their
                                health status and identify any potential risk factors.
                            </li>
                            <li>
                                <strong>Risk Assessment:</strong> <br>
                                Based on the findings from the health checks and questionnaires, our medical team conducts
                                thorough risk assessments to identify any potential health risks or areas of concern. This
                                enables us to develop targeted intervention strategies and personalized health plans to
                                address specific needs and mitigate risks.
                            </li>

                            <li>
                                <strong>Preventive Care:</strong> <br>
                                Our goal is not just to treat illness but to prevent it from occurring in the first place.
                                That's why we emphasize preventive care as a cornerstone of our health surveillance
                                services. We provide practical advice and guidance on healthy lifestyle choices, disease
                                prevention strategies, and proactive health management to empower our clients to take
                                control of their health and well-being.
                            </li>
                            <li>
                                <strong>Ongoing Monitoring:</strong> <br>
                                Health surveillance is not a one-time event but an ongoing process. We offer regular
                                monitoring and follow-up appointments to track our clients' progress, monitor changes in
                                their health status, and adjust their health plans as needed. This ensures that they receive
                                the continuous support and care they need to maintain optimal health over the long term.
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/health-surveillance2.webp') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>

            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/why_choose.webp') }}" alt=""
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
                                Our team consists of highly skilled medical professionals with expertise in health
                                surveillance and preventive care.
                            </li>
                            <li>
                                <strong>Comprehensive Services:</strong>
                                We offer a wide range of health surveillance services tailored to meet the diverse needs of
                                our clients.
                            </li>
                            <li>
                                <strong>Personalised Care:</strong>
                                We take a personalised approach to health surveillance, addressing each client's unique
                                health concerns and goals.
                            </li>

                            <li>
                                <strong>Empowering Approach:</strong>
                                We believe in empowering our clients to take an active role in their health and well-being
                                through education, support, and proactive intervention.
                            </li>
                        </ul>
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
                    <h2 class="wow fadeInUp" data-wow-duration="2s">
                        Get in Touch
                    </h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        If you're ready to take control of your health and well-being or would like to learn more about our
                        health surveillance services, we invite you to contact us today. Our friendly and experienced team
                        is here to support you every step of the way on your journey to better health.
                    </p>
                </div>

                <div class="btn-box pull-right wow fadeInUp" data-wow-duration="4s">
                    <a href="javascript:void(0);" class="th-btn style4">Book an Appointment</a>
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
                        <a href="javascript:void(0);" class="th-btn shadow-1">Book Appointment</a>
                        <a href="javascript:void(0);" class="th-btn style2 shadow-1 text-dark">Get Free Consulting</a>
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
