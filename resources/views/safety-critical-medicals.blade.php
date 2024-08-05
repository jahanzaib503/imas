@extends('layouts.main')
@section('content')
    <section class="inner_banner"
        style="background-image: url('{{ asset('assets/images/banner/safety-critical-medicals.jpg') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>
                    Safety Critical Medicals
                </h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>
                        Safety Critical Medicals
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="inner_sections">
        <div class="container">
            <div class="caution_text">
                <h3>
                    At IMAS Medical, we recognize the vital importance of ensuring that individuals in safety critical roles
                    are fit and healthy to perform their duties effectively and safely. That's why we offer specialised
                    safety critical medical assessments designed to evaluate the health and fitness of individuals entering
                    or currently employed in safety critical positions.
                </h3>
            </div>
        </div>
    </section>


    <section class="inner_sections">
        <div class="container">
            <div class="row col_reverse">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/safety1.jpg') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="2s">
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInRight" data-wow-duration="1s">
                        <h2 class="heading">
                            Our Approach
                        </h2>
                        <p class="para">
                            Our approach to safety critical medicals is centred on meticulous evaluation, adherence to
                            regulatory standards, and a commitment to promoting workplace safety. We understand the unique
                            risks and responsibilities associated with safety critical roles, and we strive to provide
                            comprehensive assessments that address the specific health requirements of these positions.
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
                                <strong>Thorough Health Assessments:</strong> <br>
                                Our experienced medical professionals conduct thorough health assessments to evaluate
                                various aspects of the candidate's health and fitness. This includes comprehensive physical
                                examinations, as well as assessments of medical history, lifestyle factors, and any
                                pre-existing conditions that may impact their ability to perform safety critical duties.
                            </li>
                            <li>
                                <strong>Job-Specific Evaluations:</strong> <br>
                                We recognize that safety critical roles vary widely in their requirements and
                                responsibilities. That's why we tailor our assessments to address the specific demands of
                                each job role, ensuring that candidates are medically and physically capable of meeting the
                                unique challenges associated with their position.
                            </li>
                            <li>
                                <strong>Risk Identification and Mitigation:</strong> <br>
                                Our assessments include a detailed analysis of potential health risks or conditions that
                                could impact an individual's ability to safely perform their duties. We work closely with
                                employers to identify and mitigate these risks through appropriate accommodations,
                                adjustments, or preventive measures.
                            </li>

                            <li>
                                <strong>Fitness for Duty Determination:</strong> <br>
                                Based on the findings from the safety critical medical assessment, we provide employers with
                                a clear determination of the candidate's fitness for duty. This enables employers to make
                                informed decisions regarding the individual's suitability for the safety critical role.
                            </li>
                            <li>
                                <strong>Ongoing Monitoring and Support:</strong> <br>
                                We understand that maintaining fitness for safety critical roles is an ongoing process.
                                That's why we offer regular monitoring and support to ensure that individuals remain healthy
                                and fit for duty throughout their employment.
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/inner-images/safety2.jpg') }}" alt=""
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
                                Our team consists of highly skilled medical professionals with expertise in safety critical
                                medical assessments and occupational health.
                            </li>
                            <li>
                                <strong>Regulatory Compliance:</strong>
                                We adhere to regulatory standards and guidelines to ensure that our safety critical medical
                                assessments meet the highest standards of accuracy, reliability, and legality.
                            </li>
                            <li>
                                <strong>Customised Solutions:</strong>
                                We understand the unique needs and challenges of safety critical roles, and we offer
                                customised medical solutions tailored to meet the specific requirements of each client.
                            </li>

                            <li>
                                <strong>Commitment to Safety:</strong>
                                At IMAS Medical, safety is our top priority. We are dedicated to helping employers
                                promote a safe and healthy work environment by ensuring that individuals in safety critical
                                roles are fit and capable of performing their duties safely and effectively.
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
                        If you're an employer looking to ensure the health and fitness of individuals in safety critical
                        roles, or would like to learn more about our safety critical medical services, we encourage you to
                        contact us today. Our experienced team is here to support you in promoting workplace safety and
                        protecting the well-being of your employees.
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
