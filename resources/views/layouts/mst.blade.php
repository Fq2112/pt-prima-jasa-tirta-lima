<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <meta name="keywords" content="HTML5 Template , Responsive , html5 , css3"/>
    <meta name="description" content="{{env('APP_TITLE')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-3.3.7 fremwork css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/glyphicons.css')}}"/>
    <!-- Core Style css -->
    <link rel="stylesheet" href="{{asset('css/colorbox.css')}}"/>
    <!-- Slider carousel css  -->
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
    <!-- Slider revolution css  -->
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/rev-settings.css')}}"/>
    <!-- Fontawesome 5.10.1 -->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <!-- Main style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

    <!-- select2 -->
    <link href="{{asset('vendor/select2/dist/css/select2.css')}}" rel="stylesheet"/>
    <!-- Loading.io -->
    <link href="{{asset('css/loading.css')}}" rel="stylesheet">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="{{asset('vendor/sweetalert/sweetalert2.css')}}">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <!-- Media queries -->
    <link rel="stylesheet" href="{{asset('css/media-query.css')}}">

    <style>
        .required {
            color: #fdc716;
        }

        .form-control:focus, .select2-search--dropdown .select2-search__field:focus {
            border-color: #fdc716 !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(253, 199, 22, 0.6) !important;
        }

        .has-feedback .form-control-feedback {
            position: absolute;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
        }

        [type="radio"]:checked,
        [type="radio"]:not(:checked) {
            position: absolute;
            left: -9999px;
        }

        [type="radio"]:checked + label,
        [type="radio"]:not(:checked) + label {
            position: relative;
            padding-left: 28px;
            cursor: pointer;
            line-height: 20px;
            display: inline-block;
            color: #666;
        }

        [type="radio"]:checked + label:before,
        [type="radio"]:not(:checked) + label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 20px;
            border: 1px solid #777;
            border-radius: 100%;
            background: transparent;
        }

        [type="radio"]:checked + label:before {
            border: 1px solid #fdc716;
        }

        [type="radio"]:checked + label:after,
        [type="radio"]:not(:checked) + label:after {
            content: '';
            width: 12px;
            height: 12px;
            background: #fdc716;
            position: absolute;
            top: 4px;
            left: 4px;
            border-radius: 100%;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        [type="radio"]:not(:checked) + label:after {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        [type="radio"]:checked + label:after {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .btn-primary {
            background-color: #fdc716;
            border-color: #cda011;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary.focus,
        .btn-primary:active,
        .btn-primary.active,
        .open > .dropdown-toggle.btn-primary {
            background-color: #CDA011;
            border-color: #9b7b0c;
        }

        .btn-primary.disabled,
        .btn-primary[disabled],
        fieldset[disabled] .btn-primary,
        .btn-primary.disabled:hover,
        .btn-primary[disabled]:hover,
        fieldset[disabled] .btn-primary:hover,
        .btn-primary.disabled:focus,
        .btn-primary[disabled]:focus,
        fieldset[disabled] .btn-primary:focus,
        .btn-primary.disabled.focus,
        .btn-primary[disabled].focus,
        fieldset[disabled] .btn-primary.focus,
        .btn-primary.disabled:active,
        .btn-primary[disabled]:active,
        fieldset[disabled] .btn-primary:active,
        .btn-primary.disabled.active,
        .btn-primary[disabled].active,
        fieldset[disabled] .btn-primary.active {
            background-color: #fdc716;
            border-color: #cda310;
        }

        .btn-primary .badge {
            color: #fdc716;
            background-color: #fff;
        }
    </style>
    @stack('styles')
</head>
<body class="use-nicescroll">
<!-- page loader start -->
<div class="images-preloader">
    <div class="preloader"></div>
</div>

<div class="wrapper">
    <div class="main-content scroll-none home-page">
        <!-- header start -->
        <header class="site-header header2 hover-yellow dropdown-yellow bg-1 color-1 header8 txt-color-1">
            <div class="sub-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('images/logo/logotype.png')}}" alt="">
                                </a>
                            </h1>
                        </div>
                        <div class="col-md-8">
                            <div class="contacts">
                                <i class="fa fa-clock"></i>
                                <p>Monday &ndash; Friday : 8:00 &ndash;
                                    16:00<br><span>Saturday &ndash; Sunday (closed)</span></p>
                                <i class="fa fa-phone"></i>
                                <p>(0751) 462942<br><span>+62 811-8981-975</span></p>
                                <i class="fa fa-map-marked-alt"></i>
                                <p>Jl. Angkasa Puri No. 5 Padang<br><span>Sumatera Barat, Indonesia</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="main-bar bg-blue margin-top" id="main-bar">
                        <div class="container">
                            <div class="logo-hide">
                                <h1 class="logo">
                                    <a href="{{route('home')}}">
                                        <img width="48" src="{{asset('images/logo/icon.png')}}" alt="">
                                    </a>
                                </h1>
                            </div>
                            <button class="btn-toggle"><i class="fa fa-bars"></i></button>
                            <nav class="nav">
                                @include('layouts.partials._headerMenu')
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')
    </div>

    <!-- footer Start -->
    <footer class="transparent-dark bgOverly footer-color7">
        <div class="content-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget widget">
                            <h4 data-aos="fade-right">Send Us <strong class="strong-color">Message</strong></h4>
                            <form method="post" class="footer-form" action="{{route('contact.submit')}}">
                                {{csrf_field()}}
                                <input data-aos="fade-down" id="name" name="name" type="text" placeholder="Name"
                                       required>
                                <input data-aos="fade-down" id="email" name="email" type="email" placeholder="Email"
                                       required>
                                <input data-aos="fade-down" id="subject" name="subject" type="text"
                                       placeholder="Subject" required>
                                <textarea data-aos="fade-down" id="comment" name="message" placeholder="Message"
                                          required></textarea>
                                <button data-aos="fade-down" type="submit" class="btn btn-construct">Send Us</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget widget">
                            <div class="footer-logo">
                                <a href="{{route('home')}}">
                                    <img data-aos="zoom-out" width="100px" src="{{asset('images/logo/icon.png')}}"
                                         alt=""></a>
                            </div>
                            <p data-aos="fade-down"><b>PT. PRIMA JASA TIRTA LIMA</b> berkedudukan di Jalan Angkasa Puri
                                No.5 RT.01 / RW.01 Kel. Dadok Tunggul Hitam, Kec. Koto Tangah Kota Padang - Sumatera
                                Barat - Indonesia, dengan Notaris NASRUL, SH Nomor 09 Tanggal 12 Agustus 1998, dan
                                bergerak dalam bidang kontraktor dan...<a href="{{route('brief-history')}}"><em>read
                                        more</em></a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget widget">
                            <h4 data-aos="fade-right">Keep in Touch</h4>
                            <ul class="contact">
                                <li data-aos="fade-down">
                                    <i class="fa fa-building"></i>
                                    Jl. Angkasa Puri No. 5 Dadok Tanggul Hitam, Koto Tengah, Padang, Sumatera Barat,
                                    Indonesia
                                </li>
                                <li data-aos="fade-down">
                                    <i class="fa fa-map-marked-alt"></i>
                                    Keradenan Maguwoharjo RT.10/52 Depok Sleman, Yogjakarta, Indonesia
                                </li>
                                <li data-aos="fade-down">
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+62751462942">(0751) 462942</a>
                                </li>
                                <li data-aos="fade-down">
                                    <i class="fab fa-whatsapp"></i>
                                    <a href="https://api.whatsapp.com/send?phone=628118981975&text=&source=&data=">+62
                                        811-8981-975</a>
                                </li>
                                <li data-aos="fade-down">
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:{{env('MAIL_USERNAME')}}">{{env('MAIL_USERNAME')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© {{now()->format('Y').' '.env('APP_TITLE')}}. All rights reserved | Designed & Developed by
                            <a href="http://rabbit-media.net" target="_blank">Rabbit Media</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<a href="#" onclick="scrollToTop()" class="to-top" title="Go to top">Top</a>
<div class="myProgress">
    <div class="bar"></div>
</div>

<!-- Jquery -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/classie.js')}}"></script>
<!-- Core Style -->
<script type="text/javascript" src="{{asset('js/jquery.colorbox.js')}}"></script>
<!-- Carousel Slider  -->
<script src="{{asset('vendor/owlcarousel/dist/owl.carousel.min.js')}}"></script>
<!-- Jquery Waypoints -->
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
<!-- Jquery Counter -->
<script type="text/javascript" src="{{asset('js/visible.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
<!-- Jquery progress bar js-->
<script type="text/javascript" src="{{asset('js/pro-bars.js')}}"></script>
<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{asset('vendor/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Template core js -->
<script type="text/javascript" src="{{asset('js/custom-index.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wmbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/header-fixed.js')}}"></script>

<!-- select2 -->
<script src="{{asset('vendor/select2/dist/js/select2.full.min.js')}}"></script>
<!-- check-mobile -->
<script src="{{asset('vendor/checkMobileDevice.js')}}"></script>
<!-- Nicescroll -->
<script src="{{asset('vendor/nicescroll/jquery.nicescroll.js')}}"></script>
<!-- Sweetalert2 -->
<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
@stack('scripts')
<script type="text/javascript">
    $(function () {
        window.mobilecheck() ? $("body").removeClass('use-nicescroll') : $("body").css("overflow", "hidden");

        AOS.init({
            duration: 800,
            easing: 'slide',
            once: false,
        });

        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    });

    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if ($(this).scrollTop() > 100) {
            $('.to-top').addClass('show-to-top');
        } else {
            $('.to-top').removeClass('show-to-top');
        }
    }

    function scrollToTop(callback) {
        if ($('html').scrollTop()) {
            $('html').animate({scrollTop: 0}, callback);
            return;
        }
        if ($('body').scrollTop()) {
            $('body').animate({scrollTop: 0}, callback);
            return;
        }
        callback();
    }

    function numberOnly(e, decimal) {
        var key;
        var keychar;
        if (window.event) {
            key = window.event.keyCode;
        } else if (e) {
            key = e.which;
        } else return true;
        keychar = String.fromCharCode(key);
        if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27) || (key == 188)) {
            return true;
        } else if ((("0123456789").indexOf(keychar) > -1)) {
            return true;
        } else if (decimal && (keychar == ".")) {
            return true;
        } else return false;
    }

    var title = document.getElementsByTagName("title")[0].innerHTML;
    (function titleScroller(text) {
        document.title = text;
        setTimeout(function () {
            titleScroller(text.substr(1) + text.substr(0, 1));
        }, 500);
    }(title + " ~ "));

    <!--Scroll Progress Bar-->
    function progress() {
        var windowScrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var windowHeight = $(window).height();
        var progress = (windowScrollTop / (docHeight - windowHeight)) * 100;
        var $bgColor = progress > 99 ? '#ffc916' : '#fdc716';
        var $textColor = progress > 99 ? '#fff' : '#333';

        $('.myProgress .bar').width(progress + '%').css({backgroundColor: $bgColor});
        // $('h1').text(Math.round(progress) + '%').css({color: $textColor});
        $('.fill').height(progress + '%').css({backgroundColor: $bgColor});
    }

    progress();

    $(document).on('scroll', progress);

    window.onload = function () {
        $('.images-preloader').fadeOut();

        $(".use-nicescroll").niceScroll({
            cursorcolor: "rgb(253,199,22)",
            cursorwidth: "8px",
            background: "rgba(222, 222, 222, .75)",
            cursorborder: 'none',
            horizrailenabled: false,
            autohidemode: 'leave',
            zindex: 9999999,
        });

        var options = {
            whatsapp: "+628118981975",
            email: "{{env('MAIL_USERNAME')}}",
            call_to_action: "Contact us",
            button_color: "#fdc716",
            position: "left",
            order: "email,whatsapp",
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    };

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    $(document).on('mouseover', '.use-nicescroll', function () {
        $(this).getNiceScroll().resize();
    });
</script>
</body>
</html>
