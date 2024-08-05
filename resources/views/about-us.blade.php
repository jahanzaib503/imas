@extends('layouts.main')
@section('content')
    <style>


    </style>
    <section class="inner_banner"
        style="background-image: url('{{ asset('assets/images/banner/ambulance-driver-medical.jpg') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>About IMAS Medical</h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>About IMAS Medical</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <p>
                    Welcome to IMAS Medical, a trusted provider of medical assessments for taxi drivers and other
                    professionals. Located at 173 Stanley Road, Cheadle, SK8 6RF, IMAS Medical is committed to delivering
                    high-quality service to our clients. As an approved provider to numerous local authorities across the
                    Northwest and holding multiple commercial contracts with councils, we pride ourselves on our strong
                    reputation for excellence in both quality and customer service.
                </p>
                <p>
                    With locations in over 10 areas, our experienced team ensures that your medical assessment is conducted
                    efficiently and professionally. When you book your taxi medical with us, you can rest assured that
                    you’re working with an experienced and reputable provider dedicated to meeting your needs.
                </p>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/mission.png') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            Our Mission
                        </h2>
                        <p class="para">
                            At IMAS Medical, our mission is to provide comprehensive and reliable medical assessment
                            services tailored to the needs of taxi drivers and other professionals. We are dedicated to
                            ensuring the health and safety of our clients through thorough evaluations and a commitment to
                            excellence. Our goal is to deliver high-quality services with integrity, professionalism, and a
                            focus on customer satisfaction.
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
                            Our Vision
                        </h2>
                        <p class="para">
                            Our vision at IMAS Medical is to be the leading provider of medical assessments in the
                            Northwest, known for our exceptional service quality and unwavering dedication to client care.
                            We aim to expand our reach and continue building strong partnerships with local authorities and
                            councils, ensuring that every professional we serve has access to the best medical assessment
                            services available.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/vision.png') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>
                
            </div>
        </div>
    </section>





    <section class="inner_sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/core.png') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            Our Core Values
                        </h2>
                        <ul>
                            <li>
                                <strong>Excellence:</strong>
                                We strive for the highest standards in all we do, from our medical assessments to our
                                customer service.
                            </li>
                            <li>
                                <strong>Integrity:</strong>
                                We conduct our business with honesty and transparency, ensuring trust and confidence in our
                                services.
                            </li>
                            <li>
                                <strong>Professionalism:</strong>
                                Our team is committed to maintaining a professional demeanor and approach in every
                                interaction, ensuring respect and courtesy for all our clients.

                            </li>
                            <li>
                                <strong>Customer Focus:</strong>
                                We place our clients at the center of our operations, tailoring our services to meet their
                                specific needs and exceeding their expectations.
                            </li>
                            <li>
                                <strong>Innovation:</strong>
                                We continually seek to improve our services through innovation and the adoption of best
                                practices in the medical field.
                            </li>
                        </ul>
                        <p class="para">
                            At IMAS Medical, these core values guide us in our mission to deliver unparalleled medical
                            assessment services, ensuring the health and well-being of the professionals we serve.

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
