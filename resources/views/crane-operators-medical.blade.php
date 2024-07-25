@extends('layouts.main')
@section('content')
    <section class="inner_banner" style="background-image: url('{{ asset('assets/images/banner/crane-operator.webp') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>Crane Operators Medical Assessment</h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>Crane Operators Medical Assessment</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <h3>
                    Crane Operator medicals from £45, an assessment that all drivers must pass before being granted their
                    license.
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
                            What is a Crane Operator medical?
                        </h2>
                        <p class="para">
                            A crane operator medical, often referred to as a crane operator medical assessment, is a
                            specialised medical examination designed to assess the health and fitness of individuals who
                            operate cranes or similar heavy machinery. The purpose of this medical assessment is to ensure
                            that crane operators are physically and mentally capable of performing their job safely and
                            effectively, as crane operation is a critical and potentially hazardous occupation.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/crane1.webp') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/crane2.webp') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            What’s involved in my medical?
                        </h2>
                        <ol>
                            <li>
                                <strong>Physical Examination: </strong> <br>
                                A comprehensive physical examination is conducted to evaluate the overall health of the
                                crane operator. This may include assessing vital signs such as blood pressure, heart rate,
                                and general physical fitness.
                            </li>
                            <li>
                                <strong>Vision Assessment: </strong> <br>
                                Vision is a crucial aspect of safe crane operation. The examination often includes assessing
                                visual acuity, depth perception, and peripheral vision to ensure that the operator has
                                adequate vision for the job.
                            </li>
                            <li>
                                <strong>Hearing Assessment: </strong> <br>
                                Good hearing is essential for crane operators to respond to auditory signals and communicate
                                effectively with colleagues on the worksite. Hearing tests may be conducted to evaluate
                                hearing acuity.
                            </li>

                            <li>
                                <strong>Musculoskeletal Examination: </strong> <br>
                                The musculoskeletal system is assessed to ensure that the operator has the physical strength
                                and mobility required to handle the controls and perform the duties of a crane operator.
                            </li>
                            <li>
                                <strong>Mental Health Evaluation: </strong> <br>
                                Crane operators need to be mentally alert and capable of making quick, safe decisions. The
                                assessment may include an evaluation of mental health and cognitive function.
                            </li>
                            <li>
                                <strong>Review of Medical History: </strong> <br>
                                The medical practitioner conducting the assessment will review the operator's medical
                                history, including any previous injuries, surgeries, or medical conditions that may impact
                                their ability to operate a crane safely.
                            </li>
                            <li>
                                <strong>Medication Review: </strong> <br>
                                If the operator is taking any medications, the examiner may review them to determine if they have side effects that could affect job performance.
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
                            For instance, it's not uncommon for drivers to encounter difficulties during their vision assessment due to an inadequate or outdated prescription for corrective lenses. In such instances, we strongly recommend a pre-appointment visit to an optician to ensure your vision meets the necessary standards.
                        </p>
                        <p class="para">
                            Similarly, elevated blood pressure readings can sometimes be attributed to stress, hurrying to the appointment, or underlying health conditions. For individuals who do not pass due to high blood pressure, we extend a complimentary re-test opportunity, allowing you to address and manage this concern.
                        </p>
                        <p class="para">
                            While some medical conditions may be more serious and potentially create hurdles to passing the medical examination, effective management can often mitigate even the most severe conditions as barriers to obtaining or renewing your license. The surest way to determine your eligibility is through a comprehensive evaluation by a qualified medical professional.
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
                <span class="sub-title wow fadeInUp" data-wow-duration="1s"><img src="{{ asset('assets/images/home/title_icon.svg') }}" alt="Icon">Requirements</span>
                <h2 class="sec-title mb-30 wow fadeInUp" data-wow-duration="2s">What your required to bring to your medical assessment</h2>
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
                    <h2 class="wow fadeInUp" data-wow-duration="2s">Book Your Crane Operators Medical Assessment Today</h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        Don’t let delays or long waiting lists hinder your career at sea. Contact IMAS Medical to book
                        your Crane Operators Medical Assessment and ensure you’re fit for duty. Your health and safety are our top
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
