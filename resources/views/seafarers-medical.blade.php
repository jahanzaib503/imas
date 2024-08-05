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
