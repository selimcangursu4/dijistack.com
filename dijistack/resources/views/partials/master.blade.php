<!DOCTYPE html>
<html lang="tr">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dijistack | Web Tasarım & Dijital Çözümler</title>
<meta name="description" content="Dijistack, modern web tasarım, kurumsal web sitesi, SEO uyumlu yazılım ve dijital çözümler sunar.">
<meta name="keywords" content="web tasarım, kurumsal web sitesi, laravel, seo, dijital ajans, dijistack">
<meta name="author" content="Dijistack">
<link rel="canonical" href="{{ url()->current() }}">
<link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/favicon.ico') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/imgs/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/imgs/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/imgs/android-chrome-192x192.png') }}">
<meta property="og:title" content="Dijistack | Web Tasarım & Dijital Çözümler">
<meta property="og:description" content="SEO uyumlu, modern ve hızlı web projeleri Dijistack ile.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('assets/imgs/og-image.jpg') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="home-main">
    <!-- ==================== Start Loading ==================== -->
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
    <!-- ==================== End Loading ==================== -->
    <div class="cursor"></div>
    <div class="blur-div"></div>
    <!-- ==================== Start progress-scroll-button ==================== -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== End progress-scroll-button ==================== -->
    @include('partials.header')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="o-hidden">
                @yield('main')
                @include('partials.footer')
            </main>
        </div>
    </div>
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
            var width = $(window).width();
            if (width > 991) {

                gsap.registerPlugin(ScrollTrigger);

                let sections = gsap.utils.toArray(".hr-container .item-panel");

                gsap.to(sections, {
                    xPercent: -100 * (sections.length - 1),
                    ease: "none",
                    scrollTrigger: {
                        trigger: ".hr-container",
                        start: "center center",
                        end: "bottom bottom",
                        pin: true,
                        scrub: 1,
                        end: () => "+=" + document.querySelector(".hr-container").offsetWidth
                    }
                });
            }
        });
    </script>
</body>

</html>
