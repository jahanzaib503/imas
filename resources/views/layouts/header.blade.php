<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:title" content="@yield('metaTitle', 'IMAS Medicals')" />
    <meta name="twitter:description" content="@yield('metaDescription', 'IMAS Medicals')" />

    <title>@yield('metaTitle', 'IMAS Medicals')</title>
    <meta name="description" content="@yield('metaDescription', 'IMAS Medicals')">


    <title>IMAS Medical | Medicals from £45 - Taxi | D4 | Pre-Employment | Safety Critical</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> -->
    
</head>

<body>

    <div class="header-top">
        <div class="container">
            <div class="navtop">
                <div class="left">
                    <a href="tel:+44 7968 999683">Call Us: +44 7968 999683</a>
                    <a href="maito:info@imasmedical.com">info@imasmedical.com</a>
                </div>
                <!-- <div class="right">
                    {{-- <a href="{{ Route('login') }}"><i class="fa-regular fa-user"></i> My Account</a> --}}
                    <div class="profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" id="profile_dropdownButton" data-bs-toggle="profile_dropdown" aria-expanded="false">
                            <img
                                src="https://images.rawpixel.com/image_png_social_square/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTAxL3JtNjA5LXNvbGlkaWNvbi13LTAwMi1wLnBuZw.png"
                                alt="" >
                                @auth
                                    <span>{{ Auth::user()->name }}</span>
                                @endauth            
                                <i class="fa fa-chevron-down ms-1" id="dropdownIcon"></i>
                        </a>

                    </div>
                    <ul class="dropdown-menu" aria-labelledby="profile_dropdown">
                        @auth
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li><a class="dropdown-item" href=">Create Account</a></li>
                        @endauth    
                    </ul>

                </div> -->
            </div>
        </div>
    </div>



    <nav class="navbar sticky-top navbar-expand-xl navbar-light bg-light">
        <div class="container">
            <a href="{{ Route('index') }}" class="navbar-brand">
                <img src="{{ asset('assets/images/imas_logo.png') }}" alt="Filingzone" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas"
                aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" id="navbarOffcanvas" tabindex="-1"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img src="{{ asset('assets/images/imas_logo.png') }}" alt="Filingzone" class="logo">
                    <button type="button" class="btn-close btn-close-dark text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <a class="nav-item nav-link active" aria-current="page" href="{{ Route('index') }}">Home</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                                Medical Assessments
                                <i class="fa fa-chevron-down ms-1" id="dropdownIcon"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ Route('taxi-driver-medical') }}">Taxi Drivers</a></li>
                                <li><a class="dropdown-item" href="{{ Route('hgv-driver-medical') }}">HGV Drivers</a></li>
                                <li><a class="dropdown-item" href="{{ Route('seafarers-medical') }}">Seafarers</a></li>
                                {{-- <li><a class="dropdown-item" href="javascript:void(0);">Safety Critical</a></li> --}}
                                <li><a class="dropdown-item"
                                        href="{{ Route('ambulance-driver-medical') }}">Ambulance</a></li>
                                <li><a class="dropdown-item" href="{{ Route('crane-operators-medical') }}">Crane
                                        Operators</a></li>
                                <li><a class="dropdown-item" href="{{ Route('forklift-operator-medical') }}">Forklift
                                        Operators</a></li>
                                <li><a class="dropdown-item" href="{{ Route('bus-driver-medical') }}">Bus Drivers</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ Route('train-driver-medical') }}">Train
                                        Drivers</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ Route('motorhome-drivers-medical') }}">Motorhomes</a></li>
                                <li><a class="dropdown-item" href="{{ Route('sports-medicals') }}">Sports
                                        Medicals</a></li>
                            </ul>
                        </div>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button">
                                Occupational Health
                                <i class="fa fa-chevron-down ms-1" id="dropdownIcon2"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="{{ Route('sickness-referrals') }}">Sickness
                                        Referrals</a></li>
                                <li><a class="dropdown-item" href="{{ Route('health-surveillance') }}">Health
                                        Surveillance</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ Route('pre-employment-medicals') }}">Pre-employment Medical</a></li>
                                <li><a class="dropdown-item" href="{{ Route('safety-critical-medicals') }}">Safety
                                        Critical Medicals</a></li>
                            </ul>
                        </div>
                        <a class="nav-item nav-link" href="{{ Route('book-medical') }}">Book Medical</a>
                        <a class="nav-item nav-link" href="{{ Route('contact-us') }}">Contact Us</a>
                        <a href="{{ Route('booking') }}" class="nav-item th-btn">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
