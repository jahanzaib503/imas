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
