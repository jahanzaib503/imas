@extends('layouts.main')
@section('content')
<section class="inner_banner" style="background-image: url('{{ asset('assets/images/banner/seafarers_medical.jpg') }}')">
    <div class="container">
        <div class="inner_banner_content">
            <h1>
                Insights and Updates
            </h1>
            <ul class="pagination">
                <li>
                    <a class="first" href="{{ Route('index') }}">Home</a>
                </li>
                <li>Insights and Updates</li>
            </ul>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title wow fadeInUp" data-wow-duration="1s">All Post</span>
            <h2 class="sec-title mb-30 wow fadeInUp" data-wow-duration="2s">Stay Informed with the Latest News, Tips, and Health Advice</h2>
        </div>
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="single-blog-post wow fadeInUp" data-wow-delay="200ms">
                    <div class="post-image">
                        <a href="{{ route('blog-details') }}">
                            <img src="{{ asset('assets/images/inner-images/taxi2.jpg') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>July 12, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <h3><a href="{{ route('blog-details') }}">
                            Download Your Council Taxi Medical Forms Directly from IMAS Medical
                        </a></h3>
                        <a href="{{ route('blog-details') }}" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="single-blog-post wow fadeInUp" data-wow-delay="300ms">
                    <div class="post-image">
                        <a href="{{ route('blog-details') }}">
                            <img src="{{ asset('assets/images/inner-images/hgv1.jpg') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>July 12, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <h3><a href="{{ route('blog-details') }}">Liverpool Licensing Officers Join Police for Manchester Airport Taxi and PHV Compliance Checks</a></h3>
                        <a href="{{ route('blog-details') }}" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="single-blog-post wow fadeInUp" data-wow-delay="400ms">
                    <div class="post-image">
                        <a href="{{ route('blog-details') }}">
                            <img src="{{ asset('assets/images/inner-images/why_choose.webp') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>July 12, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <h3><a href="{{ route('blog-details') }}">The Crisis of Wait Times for Doctor's Appointments in the UK</a></h3>
                        <a href="{{ route('blog-details') }}" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="single-blog-post wow fadeInUp" data-wow-delay="200ms">
                    <div class="post-image">
                        <a href="{{ route('blog-details') }}">
                            <img src="{{ asset('assets/images/inner-images/taxi2.jpg') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>July 12, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <h3><a href="{{ route('blog-details') }}">
                            Download Your Council Taxi Medical Forms Directly from IMAS Medical
                        </a></h3>
                        <a href="{{ route('blog-details') }}" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="single-blog-post wow fadeInUp" data-wow-delay="300ms">
                    <div class="post-image">
                        <a href="{{ route('blog-details') }}">
                            <img src="{{ asset('assets/images/inner-images/hgv1.jpg') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>July 12, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <h3><a href="{{ route('blog-details') }}">Liverpool Licensing Officers Join Police for Manchester Airport Taxi and PHV Compliance Checks</a></h3>
                        <a href="{{ route('blog-details') }}" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="single-blog-post wow fadeInUp" data-wow-delay="400ms">
                    <div class="post-image">
                        <a href="{{ route('blog-details') }}">
                            <img src="{{ asset('assets/images/inner-images/why_choose.webp') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>July 12, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <h3><a href="{{ route('blog-details') }}">The Crisis of Wait Times for Doctor's Appointments in the UK</a></h3>
                        <a href="{{ route('blog-details') }}" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


@endsection