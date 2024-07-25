@extends('layouts.main')
@section('content')
    <section class="inner_banner"
        style="background-image: url('{{ asset('assets/images/banner/motorhome-drivers-medical.jpg') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>Motorhome (D4) Driver Medical Assessments</h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>Motorhome (D4) Driver Medical Assessments</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <h3>
                    D4 medicals from £45, an assessment that all drivers must pass before being granted their C1 license in
                    order to drive a motorhome.
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
                            What is a Motorhome driver medical?
                        </h2>
                        <p class="para">
                            An D4 medical is a medical examination that is required for individuals in the UK who wish to
                            obtain or renew their license to drive Motorhomes. These medical examinations are mandated by
                            the Driver and Vehicle Licensing Agency (DVLA) and are an essential part of ensuring road
                            safety.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/motorhome1.jpg') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/motorhome2.jpg') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            What’s involved in my medical?
                        </h2>
                        <ol>
                            <li>
                                <strong>Medical History Review: </strong> <br>
                                The medical practitioner will begin by reviewing the driver's medical history. They may ask
                                questions about any existing medical conditions, surgeries, hospitalizations, medications,
                                or treatments. It's important for the driver to provide accurate and complete information
                                during this phase.
                            </li>
                            <li>
                                <strong>Vision Assessment: </strong> <br>
                                The driver's vision will be assessed, including distance and peripheral vision. The medical
                                practitioner will check for visual impairments that may affect the ability to drive safely.
                            </li>
                            <li>
                                <strong>Hearing Assessment: </strong> <br>
                                The driver's hearing will be evaluated to ensure they can hear and respond to important
                                auditory signals on the road, such as horns and sirens.
                            </li>

                            <li>
                                <strong>Blood Pressure Measurement:</strong> <br>
                                The driver's blood pressure will be taken to assess cardiovascular health. Elevated blood
                                pressure can be a concern as it may increase the risk of medical events while driving.
                            </li>
                            <li>
                                <strong>Physical Examination: </strong> <br>
                                The medical practitioner will conduct a general physical examination, including checking for
                                any physical disabilities or conditions that might affect the ability to drive.
                            </li>
                            <li>
                                <strong>Neurological Examination: </strong> <br>
                                The nervous system will be assessed to check for signs of neurological conditions that could
                                impair driving skills.
                            </li>
                            <li>
                                <strong>Medication Review: </strong> <br>
                                If the driver is taking any medications, the medical practitioner will review them to
                                determine if they could affect driving ability or pose safety risks on the road.
                            </li>
                            <li>
                                <strong>Additional Tests: </strong> <br>
                                In some cases, additional tests may be required, depending on the driver's medical history
                                and the medical practitioner's assessment. These tests may include an electrocardiogram
                                (ECG) for heart health or specific neurological tests.
                            </li>
                            <li>
                                <strong>Fitness to Drive Assessment: </strong> <br>
                                Based on the findings from the various examinations and assessments, the medical
                                practitioner will make an overall assessment of the driver's fitness to drive Motorhomes. If
                                the driver meets the necessary medical standards, they will receive a D4 medical
                                certificate.
                            </li>
                            <li>
                                <strong>D4 Medical Certificate: </strong> <br>
                                This certificate is an essential document and must be submitted to the Driver and Vehicle
                                Licensing Agency (DVLA) as part of the HGV license application or renewal process. It
                                indicates that the driver has passed the D4 medical examination and is medically fit to
                                drive.  
                            </li>
                        </ol>
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
                            Successfully passing your medical examination involves a careful consideration of various
                            medical factors that could potentially impact your ability to drive safely. Your appointed GP
                            will carefully evaluate each of these factors. The good news is that the most frequent causes of
                            non-compliance can often be easily resolved.
                        </p>
                        <p class="para">
                            For instance, it's not uncommon for drivers to encounter difficulties during their vision
                            assessment due to an inadequate or outdated prescription for corrective lenses. In such
                            instances, we strongly recommend a pre-appointment visit to an optician to ensure your vision
                            meets the necessary standards.
                        </p>
                        <p class="para">
                            Similarly, elevated blood pressure readings can sometimes be attributed to stress, hurrying to
                            the appointment, or underlying health conditions. For individuals who do not pass due to high
                            blood pressure, we extend a complimentary re-test opportunity, allowing you to address and
                            manage this concern.
                        </p>
                        <p class="para">
                            While some medical conditions may be more serious and potentially create hurdles to passing the
                            medical examination, effective management can often mitigate even the most severe conditions as
                            barriers to obtaining or renewing your license. The surest way to determine your eligibility is
                            through a comprehensive evaluation by a qualified medical professional.
                        </p>
                        <p class="para">
                            Book your medical appointment <a href="javascript:void(0);">now</a>.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/ambulance2.webp') }}" alt=""
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
                    <h2 class="wow fadeInUp" data-wow-duration="2s">Book Your Motorhome (D4) Driver Medical Assessments Today
                    </h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        Don’t let delays or long waiting lists hinder your career at sea. Contact IMAS Medical to book
                        your Motorhome (D4) Driver Medical Assessments and ensure you’re fit for duty. Your health and safety
                        are
                        our top
                        priorities.
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
