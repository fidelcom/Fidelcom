<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fidelis Okpara - Portfolio</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/smooth-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>
<body class="home1-page">

<video class="body-overlay" muted autoplay loop>
    <source src="{{ asset('assets/images/video1.mp4') }}" type="video/mp4">
</video>

<div class="page-loader">
    <div class="bounceball"></div>
</div>

<span class="icon-menu">
        <span class="bar"></span>
        <span class="bar"></span>
    </span>

<div class="global-color">
        <span class="setting-toggle">
            <i class="las la-cog"></i>
        </span>
    <div class="inner">
        <div class="overlay"></div>
        <div class="global-color-option">
                <span class="close-settings">
                    <i class="las la-times"></i>
                </span>
            <h2>Configuration</h2>
            <div class="global-color-option-inner">
                <p>Colors</p>
                <div class="color-boxed">
                    <a href="#" class="clr-active" onclick="color1();"></a>
                    <a href="#" onclick="color2();"></a>
                    <a href="#" onclick="color3();"></a>
                    <a href="#" onclick="color4();"></a>
                    <a href="#" onclick="color5();"></a>
                    <a href="#" onclick="color6();"></a>
                    <a href="#" onclick="color7();"></a>
                    <a href="#" onclick="color8();"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@php($contact = \App\Models\ActiveContact::first())
<div class="responsive-sidebar-menu">
    <div class="overlay"></div>
    <div class="sidebar-menu-inner">
        <div class="menu-wrap">
            <p>Menu</p>
            <ul class="menu scroll-nav-responsive d-flex">
                <li>
                    <a class="scroll-to" href="#home">
                        <i class="las la-home"></i> <span>Home</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#about">
                        <i class="lar la-user"></i> <span>About</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#resume">
                        <i class="las la-briefcase"></i> <span>Resume</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#services">
                        <i class="las la-stream"></i> <span>Services</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#skills">
                        <i class="las la-shapes"></i> <span>Skills</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#portfolio">
                        <i class="las la-grip-vertical"></i> <span>Portfolios</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#testimonial">
                        <i class="lar la-comment"></i> <span>Testimonial</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#contact">
                        <i class="las la-envelope"></i> <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-social">
            <p>Social</p>
            <ul class="social-links d-flex align-items-center">
                <li>
                    <a href="{{ $contact->socials['twitter'] }}"><i class="lab la-twitter"></i></a>
                </li>
                <li>
                    <a href="{{ $contact->socials['linkedin'] }}"><i class="lab la-linkedin"></i></a>
                </li>
                <li>
                    <a href="{{ $contact->socials['instagram'] }}"><i class="lab la-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<ul class="menu scroll-nav d-flex">
    <li>
        <a class="scroll-to" href="#home">
            <span>Home</span> <i class="las la-home"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#about">
            <span>About</span> <i class="lar la-user"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#resume">
            <span>Resume</span> <i class="las la-briefcase"></i>
        </a>
    </li>
    <li>
        <a href="#services">
            <span>Services</span> <i class="las la-stream"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#skills">
            <span>Skills</span> <i class="las la-shapes"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#portfolio">
            <span>Portfolios</span> <i class="las la-grip-vertical"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#testimonial">
            <span>Testimonial</span> <i class="lar la-comment"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#contact">
            <span>Contact</span> <i class="las la-envelope"></i>
        </a>
    </li>
</ul>

<div class="left-sidebar">
    <div class="sidebar-header d-flex align-items-center justify-content-between">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 40%">
        <span class="designation">Senior Software Engineer</span>
    </div>
    <img class="me" src="{{ asset('assets/images/me.jpg') }}" alt="Me">
    <h2 class="email">okpara.f.e@gmail.com</h2>
    <h2 class="address">Base in Lagos, Nigeria</h2>
    <p class="copyright">&copy; {{ date('Y') }} Fidelis. All Rights Reserved</p>
    <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
        <li>
            <a href="{{ $contact->socials['twitter'] }}"><i class="lab la-twitter"></i></a>
        </li>
        <li>
            <a href="{{ $contact->socials['dribble'] }}"><i class="lab la-dribbble"></i></a>
        </li>
        <li>
            <a href="{{ $contact->socials['linkedin'] }}"><i class="lab la-linkedin"></i></a>
        </li>
        <li>
            <a href="{{ $contact->socials['instagram'] }}"><i class="lab la-instagram"></i></a>
        </li>
        <li>
            <a href="{{ $contact->socials['github'] }}"><i class="lab la-github"></i></a>
        </li>
    </ul>
    <a href="mailto:{{ $contact->email }}" class="theme-btn">
        <i class="las la-envelope"></i> Hire Me!
    </a>
</div>

<main class="drake-main">
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <div class="left-sidebar">
                <div class="sidebar-header d-flex align-items-center justify-content-between">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 40%">
                    <span class="designation">Senior Software Engineer</span>
                </div>
                <img class="me" src="{{ asset('assets/images/me.jpg') }}" alt="Me">
                <h2 class="email">okpara.f.e@gmail.com</h2>
                <h2 class="address">Base in Lagos, Nigeria</h2>
                <p class="copyright">&copy; {{ date('Y') }} Fidelis. All Rights Reserved</p>
                <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
                    <li>
                        <a href="{{ $contact->socials['twitter'] }}"><i class="lab la-twitter"></i></a>
                    </li>
                    <li>
                        <a href="{{ $contact->socials['linkedin'] }}"><i class="lab la-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="{{ $contact->socials['dribble'] }}"><i class="lab la-dribbble"></i></a>
                    </li>
                    <li>
                        <a href="{{ $contact->socials['instagram'] }}"><i class="lab la-instagram"></i></a>
                    </li>
                    <li>
                        <a href="{{ $contact->socials['github'] }}"><i class="lab la-github"></i></a>
                    </li>
                </ul>
                <a href="mailto:{{ $contact->email }}" class="theme-btn">
                    <i class="las la-envelope"></i> Hire Me!
                </a>
            </div>
            @yield('main')
        </div>
    </div>
</main>


<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/js/lightbox.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/js/color.js') }}"></script>
</body>

<!-- Mirrored from wpriverthemes.com/HTML/drake/home1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jan 2026 16:28:37 GMT -->
</html>
