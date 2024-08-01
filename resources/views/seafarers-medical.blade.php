@extends('layouts.main')
@section('content')
    <section class="inner_banner" style="background-image: url('{{ asset('assets/images/banner/seafarers_medical.jpg') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>SEAFARERS MEDICAL</h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>Seafarers Medical Assessments</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content wow fadeInLeft" data-wow-duration="1s">
                        <h2 class="heading">
                            What is a Seafarers Medical Assessment?
                        </h2>
                        <p class="para">
                            A Seafarers Medical Assessment is a comprehensive medical examination required for individuals
                            working at sea. It ensures that seafarers are medically fit to perform their duties without
                            compromising their health or the safety of others on board. These assessments are typically
                            conducted according to the standards set by the Maritime and Coastguard Agency (MCA) and other
                            relevant regulatory bodies.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/seafarers1.jpg') }}" alt="" class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/seafarers2.jpg') }}" alt="" class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            Why is it Important?
                        </h2>
                        <p class="para">
                            Maintaining a valid Seafarers Medical Certificate is crucial for several reasons:
                        </p>
                        <ul>
                            <li>
                                <strong>Safety: </strong>
                                Ensures the health and safety of the seafarer and their colleagues by identifying any
                                medical conditions that could impair their ability to work safely at sea.
                            </li>
                            <li>
                                <strong>Compliance: </strong>
                                Meets legal and regulatory requirements, allowing seafarers to work on vessels without any legal impediments.
                            </li>
                            <li>
                                <strong>Prevention: </strong>
                                Early detection of health issues that could become serious if left untreated, ensuring long-term health and well-being.
                            </li>
                        </ul>
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
                            Implications of Not Having It Done
                        </h2>
                        <p class="para">
                            Failing to obtain or renew a Seafarers Medical Certificate can have significant consequences:
                        </p>
                        <ul>
                            <li>
                                <strong>Employment Restrictions: </strong>
                                Without a valid certificate, seafarers are not permitted to work on most vessels, leading to potential job loss or suspension.
                            </li>
                            <li>
                                <strong>Legal Issues: </strong>
                                Non-compliance with maritime regulations can result in legal penalties for both the individual and their employer.
                            </li>
                            <li>
                                <strong>Safety Risks: </strong>
                                Unaddressed health issues can lead to accidents or emergencies at sea, putting the entire crew at risk.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/seafarers3.jpg') }}" alt="" class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/seafarers4.jpg') }}" alt="" class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            How IMAS Medical Can Help
                        </h2>
                        <p class="para">
                            At IMAS Medical, we understand the urgency and importance of Seafarers Medical Assessments. Our services include:
                        </p>
                        <ul>
                            <li>
                                <strong>Immediate Response: </strong>
                                We offer prompt appointment scheduling, including evenings and weekends, to ensure you get your assessment without delay.
                            </li>
                            <li>
                                <strong>Qualified Doctors: </strong>
                                Our GMC-registered doctors are experienced in conducting thorough seafarer medical examinations in accordance with regulatory standards.
                            </li>
                            <li>
                                <strong>Nationwide Coverage: </strong>
                                We provide services across most areas of the UK, ensuring accessibility and convenience.
                            </li>
                            <li>
                                <strong>Competitive Pricing: </strong>
                                Our assessments are priced competitively, offering excellent value for comprehensive medical evaluations.
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
                    <h2 class="wow fadeInUp" data-wow-duration="2s">Book Your Seafarers Medical Assessment Today</h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        Don’t let delays or long waiting lists hinder your career at sea. Contact IMAS Medical to book your Seafarers Medical Assessment and ensure you’re fit for duty. Your health and safety are our top priorities.
                    </p>
                </div>

                <div class="btn-box pull-right wow fadeInUp" data-wow-duration="4s">
                    <a href="{{ getBookingUrl($medical_info['id'], $medical_info['name'], $medical_info['price']) }}" class="th-btn style4">Book an Appointment</a>
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
                        <a href="{{ getBookingUrl($medical_info['id'], $medical_info['name'], $medical_info['price']) }}" class="th-btn shadow-1">Book Appointment</a>
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
