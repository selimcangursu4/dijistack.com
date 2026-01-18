<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dijistack | Web Tasarım & Dijital Çözümler')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/imgs/dijistack-logo.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('head')
</head>

<body>
    @include('partials.header')

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>D</span>
                <span>İ</span>
                <span>J</span>
                <span>İ</span>
                <span>S</span>
                <span>T</span>
                <span>A</span>
                <span>C</span>
                <span>K</span>
            </div>
        </div>
    </div>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            @yield('main')
            @include('partials.footer')
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.4.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>

    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/smoother-script.js') }}"></script>
    <script src="{{ asset('assets/js/springer.min.js') }}"></script>


    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script>
        $(function() {

            if ($(window).width() <= 991) return;
            if (!$('.hr-container').length) return;

            gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

            let sections = gsap.utils.toArray(".hr-container .item-panel");

            gsap.to(sections, {
                xPercent: -100 * (sections.length - 1),
                ease: "none",
                scrollTrigger: {
                    trigger: ".hr-container",
                    start: "top top",
                    scrub: 1,
                    pin: true,
                    pinType: "transform",
                    end: () => "+=" + document.querySelector(".hr-container").offsetWidth
                }
            });

        });
    </script>



</body>

</html>
