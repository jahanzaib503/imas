@extends('layouts.main')
@section('content')
    <section class="inner_banner" style="background-image: url('{{ asset('assets/images/banner/forklift-operator-medical.webp') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>Forklift Operator Medical Assessment</h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>Forklift Operator Medical Assessment</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <h3>
                    Forklift Operator medicals from £45, an assessment that all drivers must pass before being granted their
                    license
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
                            What is a Forklift Operator medical?
                        </h2>
                        <p class="para">
                            A forklift operator medical, often referred to as a forklift driver medical examination or
                            forklift operator health assessment, is a specialised medical evaluation conducted to assess the
                            physical and mental fitness of individuals who operate forklifts or similar industrial vehicles.
                            The purpose of this examination is to ensure that forklift operators are in good health and
                            capable of safely performing their job duties.
                        </p>
                        <p class="para">
                            It is essential for forklift drivers to undergo a medical examination, particularly if they work
                            in demanding environments or handle toxic or hazardous materials. Additionally, working night
                            shifts can increase stress levels for drivers, making a FLT medical even more important for
                            protecting the safety of the driver and other employees.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/forklift1.webp') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/forklift2.webp') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            What’s involved in my medical?
                        </h2>
                        <p class="para">
                            When you undergo a Forklift Operator medical, you’ll need to complete a medical history
                            questionnaire and undergo a physical examination. The physical examination includes an eyesight
                            test using a Snellen chart, as well as a blood pressure check to ensure it meets DVLA standards.
                        </p>
                        <ul>
                            <li>
                                <strong>Vision assessment: </strong>
                                In terms of vision, you’ll need to meet the minimum requirement of 6/7.5 in one eye and 6/60
                                in the other, as measured on a 3-metre Snellen chart. If you wear driving glasses or contact
                                lenses, please bring them along with your current prescription to the medical assessment.
                            </li>
                            <li>
                                <strong>Blood pressure check: </strong>
                                In order to meet the DVLA group 2 standard, your blood pressure must not consistently exceed
                                179/99. This means that if your systolic blood pressure is consistently 180 or higher, or
                                your diastolic blood pressure is consistently 100 or higher, you will not meet the required
                                standard.
                            </li>
                            <li>
                                <strong>Medical questionnaire: </strong> <br>
                                During the medical history questionnaire, you’ll be asked about various medical conditions,
                                such as epilepsy, seizures, insulin-treated diabetes, and other health issues. Some
                                conditions, if managed, will not affect your application.
                                <br>
                                Based on your medical history, medications, and the results of your examination, our doctor
                                will complete your form. Typically, the entire process takes around 15 minutes to complete.
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
                    <h2 class="wow fadeInUp" data-wow-duration="2s">Book Your Forklift Operator Medical Assessment Today
                    </h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        Don’t let delays or long waiting lists hinder your career at sea. Contact IMAS Medical to book
                        your Forklift Operator Medical Assessment and ensure you’re fit for duty. Your health and safety are
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
