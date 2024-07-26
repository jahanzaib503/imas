@extends('layouts.main')
@section('content')
    <section class="inner_banner" style="background-image: url('{{ asset('assets/images/privacy/terms-banner.jpg') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>
                    GDPR Policy
                </h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>GDPR Policy</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="main-sec">
        <div class="container">
            <p class="main-sec-top-para wow fadeInUp" data-wow-duration="1s">
                At Inner City Care Group Limited trading as <span class="main-sec-clr">IMAS MEDICAL</span>, we prioritise the privacy and security of our clients' personal data. As an occupational health provider, we handle sensitive information and are committed to ensuring that all data is processed in compliance with the General Data Protection Regulation (GDPR). This page outlines our dedication to GDPR compliance and the measures we take to protect your information.
            </p>

            <p class="main-sec-bottom-para wow fadeInUp" data-wow-duration="1s">
                The General Data Protection Regulation (GDPR) is a comprehensive data protection law that came into effect on 25 May 2018. It aims to protect the privacy of individuals within the European Union (EU) by regulating how personal data is collected, stored, processed, and shared. GDPR applies to all organisations that handle the personal data of EU citizens, regardless of where the organisation is based.
            </p>

            <p class="main-sec-bottom-para2 wow fadeInUp" data-wow-duration="1s">
                Our Commitment
            </p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Data Protection Principles</p>
            <p class="main-sec-list-heading2 wow fadeInUp" data-wow-duration="1s">At imas medical, we adhere to the following key principles of GDPR:</p>
            <ul class="main-sec-list2 wow fadeInUp" data-wow-duration="1s">
                <li>Lawfulness, Fairness, and Transparency: We process personal data lawfully, fairly, and transparently.</li>
                <li>Purpose Limitation: We collect data for specified, explicit, and legitimate purposes and do not process it further in ways that are incompatible with those purposes.</li>
                <li>Data Minimisation: We collect only the personal data that is necessary for our services.</li>
                <li>Accuracy: We ensure that personal data is accurate and kept up to date.</li>
                <li>Storage Limitation: We keep personal data only for as long as necessary for the purposes for which it was collected.</li>
                <li>Integrity and Confidentiality: We process personal data in a manner that ensures its security, including protection against unauthorised or unlawful processing and accidental loss, destruction, or damage.</li>
                <li>Accountability: We take responsibility for complying with GDPR and can demonstrate our compliance.</li>            
            </ul>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">The data that we collect</p>
            <ul class="main-sec-list2 wow fadeInUp" data-wow-duration="1s">
                <li>In this Section 2 we have set out the general categories of personal data that we process and, in the case of personal data that we did not obtain directly from you, information about the source and specific categories of that data.</li>
                <li>We may process data enabling us to get in touch with you “contact data”. The contact data may include your name, email address, telephone number, postal address and/or social media account identifiers. The source of the contact data is you and/or your employer.</li>
                <li>We may process your website user account data (“account data”). The account data may include your account identifier, name, email address, business name, account creation and modification dates, website settings and marketing preferences. The primary source of the account data is you and/or your employer, although some elements of the account data may be generated by our website.</li>
                <li>We may process information relating to transactions, including purchases of goods and/or services, that you enter into with us and/or through our website (“transaction data”). The transaction data may include your name, your contact details, your payment card details (or other payment details) and the transaction details. The source of the transaction data is you and/or our payment services provider.</li>
                <li>We may process information contained in or relating to any communication that you send to us or that we send to you (“communication data”). The communication data may include the communication content and metadata associated with the communication. Our website will generate the metadata associated with communications made using the website contact forms.</li>
                <li>We may process data about your use of our website and services (“usage data”). The usage data may include your IP address, geographical location, browser type and version, operating system, referral source, length of visit, page views and website navigation paths, as well as information about the timing, frequency and pattern of your service use. The source of the usage data is our analytics tracking system.</li>               
            </ul>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Data Subject Rights</p>
            <p class="main-sec-list-heading2 wow fadeInUp" data-wow-duration="1s">Under GDPR, individuals have specific rights regarding their personal data. At imas medical, we respect and facilitate these rights, which include:</p>
            <ul class="main-sec-list2 wow fadeInUp" data-wow-duration="1s">
                <li>Right to Access: Individuals can request access to their personal data and obtain information about how it is processed.</li>
                <li>Right to Rectification: Individuals can request corrections to inaccurate or incomplete personal data.</li>
                <li>Right to Erasure (Right to be Forgotten): Individuals can request the deletion of their personal data under certain conditions.</li>
                <li>Right to Restrict Processing: Individuals can request the restriction of processing of their personal data in specific circumstances.
                </li>
                <li>Right to Data Portability: Individuals can request to receive their personal data in a structured, commonly used, and machine-readable format and have the right to transmit that data to another controller.
                </li>
                <li>Right to Object: Individuals can object to the processing of their personal data in certain situations.
                </li>
                <li>Rights Related to Automated Decision-Making and Profiling: Individuals have rights related to automated decision-making, including profiling.
                </li>            
            </ul>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Data Security Measures</p>
            <p class="main-sec-list-heading2 wow fadeInUp" data-wow-duration="1s">We implement robust security measures to protect personal data, including:</p>
            <ul class="main-sec-list2 wow fadeInUp" data-wow-duration="1s">
                <li>Encryption: Encrypting personal data both in transit and at rest.</li>
                <li>Access Controls: Restricting access to personal data to authorised personnel only.</li>
                <li>Regular Audits: Conducting regular audits and assessments to ensure compliance with GDPR and our internal policies.</li>
                <li>Data Breach Response: Having procedures in place to detect, report, and investigate personal data breaches promptly.</li>          
            </ul>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Data Processing Agreements</p>
            <p class="main-sec-list-heading2 wow fadeInUp" data-wow-duration="1s">We enter into Data Processing Agreements (DPAs) with all third-party service providers who process personal data on our behalf. These agreements ensure that our partners comply with GDPR and uphold the same standards of data protection that we adhere to.</p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Training and Awareness</p>
            <p class="main-sec-list-heading2 wow fadeInUp" data-wow-duration="1s">Our staff undergo regular training to stay informed about GDPR requirements and best practices in data protection. This ensures that everyone at Medicals Northwest understands their role in maintaining compliance and safeguarding personal data.</p>

            <p class="main-sec-list-heading2 wow fadeInUp" data-wow-duration="1s">Contact Us</p>
            <p class="main-sec-list-heading2 wow fadeInUp" data-wow-duration="1s">If you have any questions or concerns about our GDPR compliance or how we handle your personal data, please contact our Data Protection Officer (DPO):</p>

            <div class="gdpr-contact wow fadeInUp" data-wow-duration="1s">
                <span>Email:<a href="mailto:info@imasmedical.com">info@imasmedical.com</a></span>
                <span>Phone:<a href="tel:+123 456 7891">+123 456 7891</a></span>
            </div>

                     
        </div>
    </section>

@endsection
