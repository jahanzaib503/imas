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
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="single-blog-post wow fadeInUp" data-wow-delay="200ms">
                        <div class="post-image">
                            <a href="{{ route('blog-details', ['slug' => $blog->slug]) }}">
                                <img src="{{ asset('storage/images/' . $blog->image) }}" alt="image">
                            </a>
                            <div class="date">
                                <span>{{ $blog->created_at->format('F d, Y') }}</span>
                            </div>
                        </div>

                        <div class="post-content">
                            <h3><a href="{{ route('blog-details', ['slug' => $blog->slug]) }}">
                                {{ $blog->heading }}
                            </a></h3>
                            <a href="{{ route('blog-details', ['slug' => $blog->slug]) }}" class="details-btn">Read Story</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
