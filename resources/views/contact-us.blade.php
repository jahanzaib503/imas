@extends('layouts.main')
@section('content')
<section class="inner_banner" style="background-image: url('{{ asset('assets/images/banner/seafarers_medical.jpg') }}')">
    <div class="container">
        <div class="inner_banner_content">
            <h1>
                Contact Us
            </h1>
            <ul class="pagination">
                <li>
                    <a class="first" href="{{ Route('index') }}">Home</a>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>

<section class="contact_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="get_in_touch shadow-lg rounded">
                    <h3>Get in Touch with Us</h3>
                    <p>
                        Thank you for your interest in collaborating with us. Please complete the provided form, and
                        we will be in touch shortly.
                    </p>
                    <ul class="contact_list">
                        <li>
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <a href="tel:(855) 244-2051">(855) 244-2051</a>
                        </li>

                        <li class="mt-4">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <a href="mailto:info@imasmedical.com">info@imasmedical.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="shadow-lg contact_form">
                    <form action="" id="contact_us">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingName"
                                placeholder="Name" required>
                            <label for="floatingName">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingEmail"
                                placeholder="name@example.com" required>
                            <label for="floatingEmail">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="tel" class="form-control" id="floatingPhone"
                                placeholder="Phone" required>
                            <label for="floatingPhone">Phone</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Message</label>
                        </div>

                        <div class="form_btn">
                            <button type="submit" class="btn theme-btn btn-lg contact_submit">Register Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection