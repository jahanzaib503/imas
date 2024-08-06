<!-- resources/views/footer_blog.blade.php -->
@if(Route::currentRouteName() == 'index' || Route::currentRouteName() == 'home')
    <section class="blog_section">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title wow fadeInUp" data-wow-duration="1s">
                    <img src="{{ asset('assets/images/home/title_icon.svg') }}" alt="Icon">
                    Insights and Updates from IMAS Medical
                </span>
                <h2 class="sec-title mb-30 wow fadeInUp" data-wow-duration="2s">
                    Stay Informed with the Latest News, Tips, and Health Advice
                </h2>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="single-blog-post wow fadeInUp" data-wow-delay="{{ $loop->iteration * 100 }}ms">
                            <div class="post-image">
                                <a href="{{ route('blog-details', ['slug' => $blog->slug]) }}">
                                    <img src="{{ asset('storage/images/' . $blog->image) }}" alt="image">
                                </a>
                                <div class="date">
                                    <span>{{ $blog->created_at->format('F d, Y') }}</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3><a href="{{ route('blog-details', ['slug' => $blog->slug]) }}">{{ $blog->heading }}</a></h3>
                                <a href="{{ route('blog-details', ['slug' => $blog->slug]) }}" class="details-btn">Read Story</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 mt-5">
                    <div class="d-flex justify-content-center align-items-center wow fadeInUp" data-wow-duration="4s">
                        <a href="{{ route('blogs') }}" class="th-btn">View more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif



<section class="footer_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer_logo">
                    <img src="assets/images/Imas_white.png" alt="">
                    
                    <p class="about_footer">
                        Subscribe to out newsletter today to receive latest news administrate cost effective for tactical data.
                    </p>
                    <ul class="footer_list">
                        <li>
                            <a href="javscript:void(0);"><i class="fa-solid fa-location-dot me-2"></i> 173 Stanley Road Cheadle SK8 6RF</a>
                        </li>
                        <li>
                            <a href="mailto:info@imasmedical.com"><i class="fa-solid fa-envelope me-2"></i> info@imasmedical.com</a>
                        </li>
                        <li>
                            <a href="tel:+44 7968 999683"><i class="fa-solid fa-phone me-2"></i> +44 7968 999683</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer_heading">
                    <h3 class="widget_title">Quick Links</h3>
                </div>
                <ul class="footer_list">
                    <li>
                        <a href="{{ Route('about-us') }}"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> About Us</a>
                    </li>
                    <li>
                        <a href="javscript:void(0);"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> Latest News & Updates</a>
                    </li>
                    <li>
                        <a href="{{ Route('terms-conditions') }}"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="{{ Route('privacy-policy') }}"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> Privacy Policy</a>
                    </li>
                    <li>
                        <a href="{{ Route('gdpr-policy') }}"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> GDPR Policy</a>
                    </li>
                    <li>
                        <a href="{{ Route('customer-support') }}"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> Customer Support</a>
                    </li>
                    <li>
                        <a href="javscript:void(0);"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> Download Forms</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="footer_heading">
                    <h3 class="widget_title">Popular Assessments</h3>
                </div>
                <ul class="footer_list">
                    <li>
                        <a href="{{ Route('taxi-driver-medical') }}"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> Hackey Carriage Driver Medical Assessment</a>
                    </li>
                    <li>
                        <a href="{{ Route('taxi-driver-medical') }}"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> Private Hire Taxi Driver Medical Assessment</a>
                    </li>
                    <li>
                        <a href="{{ Route('hgv-driver-medical') }}"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> HGV Lorry Driver Medical Assessment</a>
                    </li>
                    <li>
                        <a href="{{ Route('hgv-driver-medical') }}"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> LGV Lorry Driver Medical Assessment</a>
                    </li>
                    <li>
                        <a href="{{ Route('ambulance-driver-medical') }}"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> Ambulance Driver Medical Assessment</a>
                    </li>
                    <li>
                        <a href="{{ Route('forklift-operator-medical') }};"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> Reach Truck / Forklift Operators Medical Assessment</a>
                    </li>
                    <li>
                        <a href="{{ Route('crane-operators-medical') }}"><i class="fa-solid fa-chevron-right fa-sm me-2"></i> Crane Operators Medical Assessment</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-1">
                <div class="footer_heading">
                    <h3 class="widget_title">Social</h3>
                </div>
                <ul class="footer_list">
                    <li class="flex_btn">
                        <a href="javscript:void(0);">
                            <i class="fa-brands fa-linkedin fa-lg"></i>
                        </a>
                        <a href="javscript:void(0);">
                            <i class="fa-brands fa-facebook fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>