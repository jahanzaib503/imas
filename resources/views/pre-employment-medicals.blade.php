@extends('layouts.main')
@section('content')
    <section class="inner_banner"
        style="background-image: url('{{ asset('assets/images/banner/pre-employment-medicals.webp') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>
                    Pre-Employment Medicals
                </h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>
                        Pre-Employment Medicals
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <h3>
                    At IMAS Medical, we understand the importance of ensuring that prospective employees are fit and healthy
                    to perform their job roles effectively and safely. That's why we offer comprehensive pre-employment
                    medical assessments designed to evaluate the health and fitness of individuals entering the workforce.
                </h3>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/pre-employment1.webp') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            Our Approach
                        </h2>
                        <p class="para">
                            Our approach to pre-employment medicals is focused on thorough evaluation, personalized care,
                            and adherence to industry standards. We aim to provide employers with valuable insights into the
                            health status of their prospective employees while also ensuring that individuals receive the
                            support and guidance they need to thrive in their new roles.
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
                            What We Offer
                        </h2>
                        <ol>
                            <li>
                                <strong>Comprehensive Health Checks:</strong> <br>
                                Our experienced medical professionals conduct thorough health assessments to evaluate
                                various aspects of the candidate's health and fitness. This may include measurements such as
                                blood pressure, heart rate, lung function, vision, and hearing, as well as other relevant
                                health indicators.
                            </li>
                            <li>
                                <strong>Medical History Review:</strong> <br>
                                In addition to physical assessments, we review the candidate's medical history to identify
                                any pre-existing conditions or health concerns that may impact their ability to perform the
                                job role safely and effectively.
                            </li>
                            <li>
                                <strong>Job-Specific Assessments:</strong> <br>
                                We understand that different job roles may have specific health requirements or risks
                                associated with them. That's why we tailor our assessments to address the unique demands of
                                each job role, ensuring that candidates are physically and medically capable of meeting job
                                requirements.
                            </li>

                            <li>
                                <strong>Fitness for Duty Determination:</strong> <br>
                                Based on the findings from the pre-employment medical assessment, we provide employers with
                                a clear determination of the candidate's fitness for duty. This enables employers to make
                                informed decisions regarding the candidate's suitability for the job role.
                            </li>
                            <li>
                                <strong>Risk Mitigation Strategies:</strong> <br>
                                In cases where potential health risks or concerns are identified, we work with employers to
                                develop appropriate risk mitigation strategies. This may include recommending accommodations
                                or adjustments to the work environment, as well as providing guidance on health promotion
                                and preventive care measures.
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/pre-employment2.webp') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="2s">
                </div>

            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/why_choose.webp') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            Why Choose IMAS Medical?
                        </h2>
                        <ul>
                            <li>
                                <strong>Expertise:</strong>
                                Our team consists of highly skilled medical professionals with expertise in pre-employment
                                medical assessments and occupational health.
                            </li>
                            <li>
                                <strong>Industry Compliance:</strong>
                                We adhere to industry standards and guidelines to ensure that our pre-employment medical
                                assessments are comprehensive, reliable, and legally compliant.
                            </li>
                            <li>
                                <strong>Customised Solutions:</strong>
                                We understand that every organisation has unique needs and requirements. That's why we offer
                                customised pre-employment medical solutions tailored to meet the specific needs of our
                                clients.
                            </li>

                            <li>
                                <strong>Timely Service:</strong>
                                We recognise the importance of timeliness in the recruitment process. Our efficient
                                processes ensure that pre-employment medical assessments are conducted promptly, allowing
                                employers to make informed hiring decisions without unnecessary delays.
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
                    <h2 class="wow fadeInUp" data-wow-duration="2s">
                        Get in Touch
                    </h2>
                    <p class="cta_para wow fadeInUp" data-wow-duration="3s">
                        If you're an employer looking to ensure the health and fitness of your prospective employees or
                        would like to learn more about our pre-employment medical services, we encourage you to contact us
                        today. Our dedicated team is here to support you in promoting a safe, healthy, and productive
                        workforce.
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
