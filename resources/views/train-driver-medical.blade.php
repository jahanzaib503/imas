@extends('layouts.main')
@section('content')
    <section class="inner_banner"
        style="background-image: url('{{ asset('public/assets/images/banner/train-driver-medical.webp') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>Train / Tram Drivers Medical Assessment</h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>Train / Tram Drivers Medical Assessment</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <h3>
                    Train / Tram Drivers medicals from £45, an assessment that all drivers must pass before being granted
                    their license.
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
                            What is a Train / Tram Drivers Truck medical?
                        </h2>
                        <p class="para">
                            A train/tram driver medical, also known as a train or tram driver medical examination, is a
                            specialised medical assessment conducted to evaluate the physical and mental fitness of
                            individuals who operate trains or trams in the railway or tramway industry. The primary purpose
                            of this medical examination is to ensure the safety of passengers, crew, and the general public,
                            as train and tram operators are responsible for the safe operation of these vehicles on tracks
                            or tramlines.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('public/assets/images/inner-images/train1.webp') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('public/assets/images/inner-images/train2.webp') }}" alt=""
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
                                A comprehensive physical assessment is conducted to evaluate the overall health and physical
                                fitness of the bus or coach driver. This may include checking vital signs like blood
                                pressure, heart rate, and overall physical condition.
                            </li>
                            <li>
                                <strong>Vision Assessment: </strong> <br>
                                Vision tests are essential to ensure that the driver has adequate visual acuity, peripheral
                                vision, and depth perception. Good vision is critical for safely navigating and operating a
                                large vehicle.
                            </li>
                            <li>
                                <strong>Hearing Assessment: </strong> <br>
                                Adequate hearing is necessary for communication with passengers, fellow drivers, and
                                emergency situations. Hearing tests may be conducted to evaluate hearing acuity.
                            </li>

                            <li>
                                <strong>Mental Health Assessment: </strong> <br>
                                A mental health evaluation may be included to assess the driver's mental well-being and
                                cognitive function.
                            </li>
                            <li>
                                <strong>Review of Medical History: </strong> <br>
                                The medical examiner will review the driver's medical history, including any past injuries,
                                surgeries, or medical conditions that could impact their ability to operate a bus or coach
                                safely.
                            </li>
                            <li>
                                <strong>Medication Review: </strong> <br>
                                If the driver is taking any medications, the examiner may review them to determine if there
                                are any side effects that could impair their ability to perform their job safely.
                            </li>
                            <li>
                                <strong>Cardiovascular Health Assessment: </strong> <br>
                                Due to the demanding nature of the job and the potential for long hours, cardiovascular
                                health assessments may be conducted to check for conditions such as high blood pressure,
                                heart disease, or other cardiovascular issues.
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
                            Book your medical appointment <a href="{{ getBookingUrl($medical_info['id'], $medical_info['name'], $medical_info['price']) }}">now</a>.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('public/assets/images/inner-images/ambulance2.webp') }}" alt=""
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
                    <h2 class="wow fadeInUp" data-wow-duration="2s">Book Your Bus / Coach Drivers Medical Assessment Today
                    </h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        Don’t let delays or long waiting lists hinder your career at sea. Contact IMAS Medical to book
                        your Bus / Coach Drivers Medical Assessment and ensure you’re fit for duty. Your health and safety
                        are
                        our top
                        priorities.
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
