@extends('layouts.main')
@section('content')
    <style>


    </style>
    <section class="inner_banner"
        style="background-image: url('{{ asset('assets/images/banner/ambulance-driver-medical.jpg') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>Ambulance Driver Medicals (D4)</h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>Paramedic (D4) Driver Medical Assessments</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <h3>
                    D4 medicals from £45, an assessment that all drivers must pass before being granted their C1 license in
                    order to drive an Ambulance.
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
                            What is an Ambulance driver medical?
                        </h2>
                        <p class="para">
                            An ambulance driver medical, also known as an Emergency Medical Services (EMS) driver medical
                            examination, is a specialised medical assessment conducted to evaluate the physical and mental
                            fitness of individuals who operate ambulances as part of emergency medical services. This
                            medical examination is essential to ensure the safety of patients, medical personnel, and other
                            road users, as ambulance drivers are responsible for safely transporting patients to medical
                            facilities during emergency situations.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/ambulance1.jpg') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <h2 class="heading text-center">
                            What’s involved in my medical?
                        </h2>
                        <ul class="team">
                            <li class="member co-funder">
                                <div class="description">
                                    <h3>Medical History Review:</h3>
                                    <p>
                                        The medical practitioner will begin by reviewing the driver's medical history. They
                                        may ask questions about any existing medical conditions, surgeries,
                                        hospitalizations, medications, or treatments. It's important for the driver to
                                        provide accurate and complete information during this phase.
                                    </p>
                                </div>
                            </li>
                            <li class="member co-funder">
                                <div class="description">
                                    <h3>Vision Assessment:</h3>
                                    <p>The driver's vision will be assessed, including distance and peripheral vision. The
                                        medical practitioner will check for visual impairments that may affect the ability
                                        to drive safely.</p>
                                </div>
                            </li>
                            <li class="member">
                                <div class="description">
                                    <h3>Hearing Assessment:</h3>
                                    <p>
                                        The driver's hearing will be evaluated to ensure they can hear and respond to
                                        important auditory signals on the road, such as horns and sirens.
                                    </p>
                                </div>
                            </li>
                            <li class="member">
                                <div class="description">
                                    <h3>Blood Pressure Measurement:</h3>
                                    <p>
                                        The driver's blood pressure will be taken to assess cardiovascular health. Elevated
                                        blood pressure can be a concern as it may increase the risk of medical events while
                                        driving.
                                    </p>
                                </div>
                            </li>
                            <li class="member">
                                <div class="description">
                                    <h3>Physical Examination:</h3>
                                    <p>
                                        The medical practitioner will conduct a general physical examination, including
                                        checking for any physical disabilities or conditions that might affect the ability
                                        to drive.
                                    </p>
                                </div>
                            </li>
                            <li class="member">
                                <div class="description">
                                    <h3>Neurological Examination:</h3>
                                    <p>
                                        The nervous system will be assessed to check for signs of neurological conditions
                                        that could impair driving skills.
                                    </p>
                                </div>
                            </li>
                            <li class="member">
                                <div class="description">
                                    <h3>Medication Review:</h3>
                                    <p>
                                        If the driver is taking any medications, the medical practitioner will review them
                                        to determine if they could affect driving ability or pose safety risks on the road.
                                    </p>
                                </div>
                            </li>

                            <li class="member">
                                <div class="description">
                                    <h3>Additional Tests:</h3>
                                    <p>
                                        In some cases, additional tests may be required, depending on the driver's medical
                                        history and the medical practitioner's assessment. These tests may include an
                                        electrocardiogram (ECG) for heart health or specific neurological tests.
                                    </p>
                                </div>
                            </li>
                            <li class="member">
                                <div class="description">
                                    <h3>Fitness to Drive Assessment:</h3>
                                    <p>
                                        Based on the findings from the various examinations and assessments, the medical
                                        practitioner will make an overall assessment of the driver's fitness to drive
                                        Ambulances. If the driver meets the necessary medical standards, they will receive a
                                        D4 medical certificate.
                                    </p>
                                </div>
                            </li>
                            <li class="member">
                                <div class="description">
                                    <h3>D4 Medical Certificate:</h3>
                                    <p>
                                        This certificate is an essential document and must be submitted to the Driver and
                                        Vehicle Licensing Agency (DVLA) as part of the application or renewal process. It
                                        indicates that the driver has passed the D4 medical examination and is medically fit
                                        to drive.
                                    </p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
    </section>




    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/ambulance2.webp') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
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
                            Book your medical appointment <a href="{{ getBookingUrl($medical_info['id'], $medical_info['name'], $medical_info['price']) }}">now</a>.
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
                    <h2 class="wow fadeInUp" data-wow-duration="2s">How often do I need a medical?</h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        If you passed your driving test before 1997 you will automatically have a C1 license until the age of 70.
                        <br>
                        It will then need to be renewed every 3 years.
                    </p>
                </div>

                <div class="btn-box pull-right wow fadeInUp" data-wow-duration="4s">
                    <a href="{{ getBookingUrl($medical_info['id'], $medical_info['name'], $medical_info['price']) }}" class="th-btn style4">Book an Appointment</a>
                </div>

            </div>

        </div>

    </section>

    <section class="space" data-bg-src="{{ asset('assets/images/home/process_bg_1.jpg') }}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title wow fadeInUp" data-wow-duration="1s">
                    <img src="{{ asset('assets/images/home/title_icon.svg') }}" alt="Icon"> Requirements
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
                                <img src="{{ asset('assets/images/inner-images/ambulance3.webp') }}" alt="Photographic ID">
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
                                <img src="{{ asset('assets/images/inner-images/ambulance4.webp') }}" alt="Prescriptions/Glasses">
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
                                <img src="{{ asset('assets/images/home/attend_appointment.jpg') }}" alt="Medical Records">
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
