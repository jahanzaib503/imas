@extends('layouts.main')

@section('metaTitle', $blog->title)
@section('metaDescription', $blog->description)

@section('content')
<section class="inner_banner" style="background-image: url('{{ asset('assets/images/banner/seafarers_medical.jpg') }}')">
    <div class="container">
        <div class="inner_banner_content">
            <h1 class="text-center">
                {{ $blog->title }}
            </h1>
            <ul class="pagination">
                <li>
                    <a class="first" href="{{ Route('index') }}">Home</a>
                </li>
                <li>{{ $blog->heading }}</li>
            </ul>
        </div>
    </div>
</section>

<section class="main-sec">
    <div class="container">
        <div class="boxStyle">

            <div class="sec-image">
                <img src="{{ asset('storage/images/' . $blog->image) }}" alt="" class="inner-page-image wow fadeInUp" data-wow-duration="1s">
            </div>

            <div class="content-wrapper">
                <p class="main-sec-list-heading wow fadeInUp" data-wow-duration="1s">
                    {{ $blog->heading }}
                </p>
                <p class="main-sec-bottom-para wow fadeInUp" data-wow-duration="1s">
                    {!! $blog->content !!}
                </p>

            </div>
        </div>
    </div>
</section>

@endsection
