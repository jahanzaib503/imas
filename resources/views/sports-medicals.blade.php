@extends('layouts.main')
@section('content')
    <section class="inner_banner"
        style="background-image: url('{{ asset('assets/images/banner/sports-medicals.webp') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>Sports Medicals & Events Medical Cover Assessments</h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>Sports Medicals & Events Medical Cover Assessments</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <h3>
                    Welcome to IMAS Medical: Your Destination for Sports Medicals and Event Medical Cover
                </h3>
                <p class="text-center">
                    At IMAS Medical, we are dedicated to ensuring the health, safety, and well-being of athletes and
                    event participants alike. With our comprehensive range of services, we provide top-notch sports medicals
                    and event medical cover to meet the diverse needs of individuals, teams, and event organisers.
                </p>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content wow fadeInLeft" data-wow-duration="1s">
                        <h2 class="heading">
                            Sports Medicals
                        </h2>
                        <ul>
                            <li>
                                <strong>Expertise:</strong>
                                Our team comprises highly skilled and experienced sports medicine specialists who are
                                passionate about helping athletes perform at their best and preventing injuries. With
                                advanced training and a deep understanding of sports-related conditions and treatments, our
                                specialists are committed to delivering exceptional care to every patient.
                            </li>
                            <li>
                                <strong>Comprehensive Services:</strong>
                                From pre-participation physical exams to injury assessments and rehabilitation, we offer a
                                full spectrum of sports medicals tailored to the unique requirements of each athlete and
                                sport. Whether you're a professional boxer in need of a boxing medical or a footballer
                                requiring a comprehensive football medical, our team has the expertise to address your
                                specific needs.
                            </li>
                            <li>
                                <strong>Personalised Care:</strong>
                                We recognise that every athlete is unique, which is why we take a personalised approach to
                                every sports medical assessment and treatment plan. Our specialists take the time to
                                understand your individual goals, challenges, and concerns, and work closely with you to
                                develop a customised plan that meets your needs and maximises your performance potential.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/sports1.webp') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/sports2.webp') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            Event Medical Cover
                        </h2>
                        <p>
                            Planning an event? Our event medical cover services are designed to ensure the health and safety of participants and spectators alike. Whether you're organising a sporting event, concert, festival, or corporate gathering, our team of medical professionals is available to provide on-site medical support, first aid treatment, and emergency response services as needed.
                        </p>
                        <p>
                            We understand the importance of being prepared for any medical emergencies that may arise during an event. That's why our event medical cover services include comprehensive emergency preparedness planning, ensuring that our team is equipped to respond quickly and effectively to any medical situation, from minor injuries to life-threatening emergencies.
                        </p>
                        <p>
                            Ready to take your sports performance or event safety to the next level? Schedule a consultation with one of our sports medicine specialists today and discover how IMAS Medical can support you with our comprehensive sports medicals and event medical cover services.
                        </p>
                        <p>
                            For more information or to book your consultation, please contact us
                        </p>
                    </div>
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

    <section class="cta-section bg-theme mb-30">
        <div class="pattern-layer lazy" style="background-image: url('{{ asset('assets/images/home/shape-2.png') }}');">
        </div>
        <div class="auto-container">
            <div class="clearfix">
                <div class="text">
                    <h2 class="wow fadeInUp" data-wow-duration="2s">Book Your Sports Medicals & Events Medical Cover
                        Assessments Today
                    </h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        Don’t let delays or long waiting lists hinder your career at sea. Contact IMAS Medical to book
                        your Sports Medicals & Events Medical Cover Assessments and ensure you’re fit for duty. Your health
                        and safety
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
                        <img src="{{ asset('assets/images/home/cta_1.png') }}" alt="Medical Services">
                    </div>
                </div>
            </div>
        </div>
    </section>
    

@endsection
