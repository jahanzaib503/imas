<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:title" content="Medicals from £45 - Taxi | D4 | Pre-Employment | Safety Critical" />
    <meta name="twitter:description"
        content="Manchester's trusted Taxi Medical and HGV Medical assessment service provider. With qualified and experienced doctors on board, your Taxi Medical assessment will be completed in confidence and priority at IMAS" />

    <title>IMAS Medical| Medicals from £45 - Taxi | D4 | Pre-Employment | Safety Critical</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

    <div class="header-top">
        <div class="container">
            <div class="navtop">
                <a href="tel:+123 456 7891">Call Us: +123 456 7891</a>
                <a href="maito:info@imasmedical.com">info@imasmedical.com</a>
                <a href="javascript:void(0);"><i class="fa-regular fa-user"></i> My Account</a>
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
                        <a class="nav-item nav-link active" aria-current="page" href="index.html">Home</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                                Medical Assessments
                                <i class="fa fa-chevron-down ms-1" id="dropdownIcon"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="javascript:void(0);">Taxi Drivers</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">HGV Drivers</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Seafarers</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Safety Critical</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Ambulance</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Crane Operators</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Forklift Operators</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Bus Drivers</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Train Drivers</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Motorhomes</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Sports Medicals</a></li>
                            </ul>
                        </div>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button">
                                Occupational Health
                                <i class="fa fa-chevron-down ms-1" id="dropdownIcon2"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="javascript:void(0);">Sickness Referrals</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Health Surveillance</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Pre-employment Medical</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Safety Critical Medicals</a></li>
                            </ul>
                        </div>
                        <a class="nav-item nav-link" href="javascript:void(0);">Book Medical</a>
                        <a class="nav-item nav-link" href="javascript:void(0);">Contact Us</a>
                        <a href="javascript:void(0);" class="nav-item th-btn">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>