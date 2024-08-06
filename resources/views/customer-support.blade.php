@extends('layouts.main')
@section('content')
    <section class="inner_banner" style="background-image: url('{{ asset('public/assets/images/privacy/terms-banner.jpg') }}')">
        <div class="container">
            <div class="inner_banner_content">
                <h1>
                    Customer Support
                </h1>
                <ul class="pagination">
                    <li>
                        <a class="first" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li>Customer Support</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="cs-main-sec">
        <div class="container">
            <p class="main-sec-top-para wow fadeInUp" data-wow-duration="1s">
                DRIVER MEDICAL CUSTOMER SUPPORT & FREQUENTLY ASKED QUESTIONS
            </p>

            <p class="main-sec-bottom-para wow fadeInUp" data-wow-duration="1s">
                Last updated 25/07/2024. 
            </p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Who can complete a DVLA Driver Medical?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">Any doctor who holds full registration with the GMC (General Medical Council) and is licensed to practice medicine in the UK can complete the DVLA D4 Driver Medical.</p>
            
            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Where can I get a DVLA D4 driver Medical form from?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">We advise to bring your own copy to your appointment, you can download a copy of the the D4 medical form <a href="#" download>here.</a></p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Will the doctor help me complete the D2 or D47P form?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">Whilst the doctor completes the D4 medical for you, to reduce the costs you will need to complete the D2 form yourself. For more information on how to complete your D2 or D47P form please visit the GOV <a href="#">website.</a></p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">What happens during a driver medical assessment?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">The doctor will examine you in accordance with the requirements of the relevant D4 Medical Form.</p>

            <p class="main-sec-list-heading2  cs-para wow fadeInUp" data-wow-duration="1s">During the medical our Doctor will:
                <ol class="cs-list cs-para wow fadeInUp" data-wow-duration="1s">
                    <li class="cs-para">Complete an eye test (if you wear glasses/ contact lenses, one test without and one test whilst you’re wearing them)</li>
                    <li class="cs-para">Record your blood pressure</li>
                    <li class="cs-para">Take note of any medication you’re currently taking</li>
                    <li class="cs-para">Ask about your previous medical history</li>
                </ol>
            </p>

            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">Note: Urine sample may be required to test for diabetes.</p>

            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">After the medical assessment, you are required to sign the back page to confirm you have given the correct information to the Assessor and all the information in the form is fully completed and correct. If there are mistakes or omissions the form is returned to you by DVLA who deem this the driver’s responsibility.</p>

            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">You must post the completed form to the DVLA for them to review and make a decision based on fitness, they will either accept your application or reject it and explain why.</p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">How long does a medical take?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">Approximately 15 minutes but this can vary if you have a complicated medical history.</p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Does the D4 Medical include an eye test?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">Yes. You will be asked to complete the test with and without your glasses/contact lenses. Please bring a container to place your lenses in if you wear contact lenses.</p>

            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">Is there anything that I need to bring to my appointment?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">You should bring the following items for your driver medical assessment:
                <ol class="cs-list wow fadeInUp" data-wow-duration="1s">
                    <li class="cs-para">D4 Medical form/ taxi medical form (or form relating to the medical you have booked)</li>
                    <li class="cs-para">Driving licence (or passport if your licence is currently with DVLA or lost)</li>
                    <li class="cs-para">Your glasses and optical prescription (contact lenses must be removed for the ‘uncorrected vision’ eye test)</li>
                    <li class="cs-para">List of all your current medication with the doses and the date you began taking them</li>
                    <li class="cs-para">Any hospital letters or details of hospital consultants who are treating you</li>
                </ol>
            </p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">Note: Urine sample may be required to test for diabetes.</p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Can I have a receipt for my accountant or employer?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">Yes. You will receive an email with a receipt alongside your appointment confirmation email.</p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">How long is the D4 medical valid for?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">DVLA D4 medical form is valid for 4 months from the date of the doctor’s signature, so you must send the paperwork in to DVLA within 4 months of your medical for it to be reviewed.</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">If this is your first application, when you receive your licence back from DVLA with the additional provisional categories,these are available to view online and will not show on your physical photocard driving licence.</p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Which areas do you offer clinics?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">Currently we only offer clinics in the Northwest of England.</p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">Will I need to bring my medical summary from my GP?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">For taxi drivers, certain councils require a medical summary to be seen by the doctor. Please consult the medical form and ensure the form can be completed by any registered doctor before booking. If unsure, please give us a call on <a href="tel:+44 7968 999683">+44 7968 999683</a> or email at <a href="mailto:info@imasmedical.com">info@imasmedical.com</a> and we will be happy to assist.</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">As of September 2021, you must bring your medical summary for the following councils: Blackburn, Burnley, Cheshire West & Chester, Liverpool, Manchester, North Warwickshire, Oldham, Rochdale, Salford, Sefton, Shropshire, St Helen’s, Stockport, Trafford, and Walsall.</p>

            <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">What is your cancellation policy?</p>
            <p class="main-sec-list-heading2 cs-para wow fadeInUp" data-wow-duration="1s">You must provide us with at least 24hrs notice. Deposit is non-refundable unless the cancellation has been made by IMAS Medical.</p>
            
        </div>
    </section>

@endsection
