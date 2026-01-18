@extends('partials.master')
@section('main')
    <main class="o-hidden">
        <header class="hero-style1 position-relative o-hidden">
            <div class="bg-img" data-background="assets/imgs/pattern-bg.webp">
            </div>
            <div class="container position-relative z-index-2">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-80px md-mb50">
                            <h1 class="fs-75">Web Tasarım, Yönetim Paneli, Mobil Uygulama, Yapay Zeka Çözümleri </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 d-flex align-items-end md-order-1">
                            <div class="tags md-mb50">
                                <a>Arayüz & Deneyim Tasarımı</a>
                                <a>Web & Mobil Yazılım</a>
                                <a>SEO & Performans Pazarlaması</a>
                                <a>Dijital Büyüme Stratejileri</a>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center md-order-2">
                            <div class="circle-button">
                                <div class="rotate-circle fs-24 text-uppercase">
                                    <svg class="textcircle" viewBox="0 0 500 500">
                                        <defs>
                                            <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                            </path>
                                        </defs>
                                        <text>
                                            <textPath xlink:href="#textcircle" textLength="900">
                                                Web - Mobil - Yapay Zeka - Yönetim Paneli -</textPath>
                                        </text>
                                    </svg>
                                </div>
                                <div class="icon text-align-center">
                                    <span class="w-200px"><img  src="{{asset('assets/imgs/dijistack-logo.png')}}" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-order-1 md-mb80">
                            <p class="fs-18">İşinizi büyütmeye odaklanan; ölçeklenebilir web ve mobil uygulamalar, gelişmiş
                                yönetim panelleri ve yapay zeka destekli dijital ürünler geliştiriyoruz. Güçlü altyapılar,
                                modern teknolojiler ve kullanıcı odaklı çözümlerle markanıza sürdürülebilir dijital değer
                                katıyoruz.</p>
                            <a href="{{route('contact.view')}}" class="butn-arrow mt-30px">
                                <span class="text-uppercase fs-14 fw-500">Birlikte Çalışalım!</span>
                                <span class="arrow-icon">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                        </path>
                                    </svg>
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="hr-sec p-0">
            <div class="hr-container row">
                @foreach ($projects as $project)
                    <div class="item-panel col-12 col-md-6 md-mb30">
                        <div class="fit-img">
                            <img src="{{ asset('assets/imgs/' . $project->hero_image) }}" alt="{{ $project->title }}">
                            <div class="cont">
                                <div class="tags fs-14 text-uppercase">
                                    <span>{{ $project->category }}</span>
                                </div>
                                <a href="{{ url('projelerimiz/' . $project->slug) }}" class="butn-arrow butn-blur">
                                    <span class="text-uppercase fs-16 fw-500">{{ $project->title }}</span>
                                    <span class="arrow-icon">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </section>
        <section class="position-relative" data-ui-animate data-delay="0.4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-align-center sec-head">
                            <h6 class="text-uppercase mb-30px">Dijistack Hakkında</h6>
                            <h2 class="fw-400">Markanızın hikâyesini dijital dünyada güçlü bir şekilde anlatan, dikkat
                                çekici
                                ve sürdürülebilir kimlikler oluşturuyoruz. Web, mobil ve dijital ürünlerde; yalnızca estetik
                                değil, performans ve kullanıcı deneyimi odaklı çözümler geliştiriyoruz. Dijistack’te
                                tasarım, iş
                                hedeflerinize hizmet eder.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-top-right w-300px opacity-1">
                <img src="assets/imgs/mshap1.png" alt="" data-speed="0.9" data-lag="0">
            </div>
        </section>
        <section class="serv-style4 pt-0">
            <div class="container">
                <div class="sec-head bord mb-80px" data-ui-animate data-delay="0.2">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="text-uppercase">Hizmetlerimiz</h6>
                        </div>
                        <div class="col-lg-5 col-md-8">
                            <div>
                                <h2 class="fs-60 text-uppercase"><span class="opacity-7 d-inline">Uzmanlık</span>
                                    <br> Alanlarımız
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 sm-hide d-flex justify-content-end">
                            <div>
                                <a href="/hizmetlerimiz" class="butn-more d-flex align-items-center">
                                    <span class="text-uppercase fs-14 fw-500">Devamını Göster</span>
                                    <span class="arrow-icon">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                            </path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($services as $index => $service)
                        <div class="col-lg-4 md-mb30" data-ui-animate data-delay="0.4"
                            @if ($index == 0) data-direction="left" @elseif($index == 2) data-direction="right" @endif>
                            <div class="item v-align-between {{ $service->is_featured ? 'bg-dark' : '' }}">

                                <div class="img service-icon">
                                    {!! $service->icon_svg !!}
                                </div>

                                <div>
                                    <h4 class="mb-30px">{{ $service->title }}</h4>
                                    <p>{{ $service->sort_description }}</p>
                                </div>

                                <div>
                                    <a href="{{ route('service.edit', $service->slug) }}"
                                        class="butn-more d-flex align-items-center">


                                        <span class="text-uppercase fs-14 fw-500">Detaylı Bilgi</span>
                                        <span class="arrow-icon">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                                </path>
                                            </svg>
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="main-marq xlrg with-shad">
            <div class="slide-har st1 opacity-5">
                <div class="box d-flex align-items-center">
                    <div class="item">
                        <h4>Dijistack</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>UI / UX Tasarım</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Kurumsal Web Siteleri</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Dijital Deneyim</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Web Tasarım</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="box d-flex align-items-center">
                    <div class="item">
                        <h4>Profesyonel Tasarım</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Mobil Uygulama</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Web Yazılım</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Yapay Zeka Entegrasyon</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="team-intro style2 pb-0">
            <div class="container">
                <div class="sec-head bord mb-80px" data-ui-animate data-delay="0.4">
                    <div class="row align-items-center mb-50px">
                        <div class="col-lg-6 md-mb50">
                            <h6 class="text-uppercase mb-50px">Ekibimiz</h6>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <div>
                                <h2 class="fs-60 text-uppercase mb-15px"><span
                                        class="opacity-7 d-inline">Ekibimizle</span>
                                    Tanışın
                                </h2>
                                <p> Dijistack ekibi; tasarım, yazılım ve dijital strateji alanlarında
                                    uzmanlaşmış profesyonellerden oluşur. Her projede farklı bakış
                                    açılarını bir araya getirerek, estetik kadar işlevselliği de
                                    ön planda tutan dijital çözümler üretiyoruz.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-ui-animate data-delay="0.4">
                    <div class="col-lg-4 col-md-6 sm-mb30">
                        <div class="item sub-bg p-40px border-radius-15px o-hidden v-align-between">
                            <div class="mb-80px w-100px">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"
                                    fill="currentColor">
                                    <path fill="currentColor"
                                        d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                                                                                                                              c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                                                                                                                              c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                                                                                                                              C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                                                                                                                              c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                                                                                                                              s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                                                                                                                              c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                                                                                                                              ">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <span class="text-uppercase opacity-7 mb-15px">Kurucu</span>
                                <h4 class="fs-30">Selimcan Gürsu</h4>
                            </div>
                            <div class="mt-4">
                                <span class="text-uppercase opacity-7 mb-15px">Özgeçmiş</span>
                                <h6 class="">Farklı sektörlerde full stack web developer olarak çalışmış ve web
                                    siteleri ile yönetim panelleri geliştirme alanında kapsamlı deneyimler kazanmıştır. <br>
                                    <br> 2025 yılında bu birikimini Dijistack Web Tasarım Ajansı’nı kurarak profesyonel
                                    hizmete dönüştürmüş ve modern, kullanıcı odaklı dijital çözümler sunmayı hedeflemiştir.
                                </h6>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="item bg-img background-position-center d-flex align-items-end p-30px border-radius-15px o-hidden"
                            data-background="{{ asset('assets/imgs/team/selimcangursu-photo.jpg') }}"
                            style="
                            background-size: contain;
                            background-repeat: no-repeat;
                            background-position: center;
                            ">
                            <a href="/ekibimiz" class="butn-arrow butn-rounded">
                                <span class="text-uppercase fs-14 fw-500">Ekibimizi Keşfedin!</span>
                                <span class="arrow-icon">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16"></path>
                                    </svg>
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="features p-0">
            <div class="container">
                <div class="sec-head text-align-center stack-title text-uppercase md-hide">
                    <h2>Nasıl Çalışıyoruz?</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6" data-ui-animate data-delay="0.4" data-direction="up">
                        <div class="item mb-60px">
                            <div class="w-60px mb-30px">
                                <img src="assets/imgs/serv/1.svg" alt="">
                            </div>
                            <h6 class="mb-80px">Yenilikçi <br> Tasarım</h6>
                            <p>Estetik ve teknolojiyi bir araya getirerek markanızı öne çıkaran, fark yaratan dijital
                                deneyimler tasarlıyoruz.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 offset-lg-6 col-md-6" data-ui-animate data-delay="0.4" data-direction="up">
                        <div class="item bg-light mt-60px mb-60px">
                            <div class="w-60px mb-30px">
                                <img src="assets/imgs/serv/2.svg" alt="">
                            </div>
                            <h6 class="mb-80px">Güçlü <br> İş Birliği</h6>
                            <p>Vizyonunuzu kendi uzmanlığımızla birleştiriyor, markanıza özel çözümler üreten güçlü bir
                                ekip anlayışıyla çalışıyoruz.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 offset-lg-5 col-md-6" data-ui-animate data-delay="0.4" data-direction="up">
                        <div class="item mt-60px mb-60px">
                            <div class="w-60px mb-30px">
                                <img src="assets/imgs/serv/7.svg" alt="">
                            </div>
                            <h6 class="mb-80px">Sonuç Odaklı <br> Strateji</h6>
                            <p>Hedeflerinize ulaşmanızı sağlayan, ölçülebilir ve sürdürülebilir dijital stratejiler
                                geliştiriyoruz.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 offset-lg-2 col-md-6" data-ui-animate data-delay="0.4" data-direction="up">
                        <div class="item bg-light main-colorbg mt-60px">
                            <div class="w-60px mb-30px">
                                <img src="assets/imgs/serv/6.svg" alt="">
                            </div>
                            <h6 class="mb-80px">Şeffaf <br> İletişim</h6>
                            <p>Projenin her aşamasında açık, net ve sürekli iletişim kurarak süreci birlikte yönetiyoruz.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 offset-lg-3 col-md-6" data-ui-animate data-delay="0.4" data-direction="up">
                        <div class="item mt-60px">
                            <div class="w-60px mb-30px">
                                <img src="assets/imgs/serv/5.svg" alt="">
                            </div>
                            <h6 class="mb-80px">Etkili <br> Çözümler</h6>
                            <p>Yalnızca iyi görünen değil, markanıza gerçek değer katan dijital projeler üretiyoruz.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="testim-style1 sub-bg" data-ui-animate data-delay="0.4">
            <div class="container">
                <div class="sec-head bord mb-80px">
                    <h6 class="text-uppercase">Müşteri Yorumlarımız</h6>
                </div>
                <div class="testim-sliders pb-40px">
                    <div class="row align-items-end">
                        <div class="col-lg-9">
                            <div class="main-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($testimonials as $test)
                                        <div class="swiper-slide">
                                            <div class="row align-items-center md-marg">
                                                <div class="col-md-4 col-lg-5">
                                                    <div class="img fit-img h-400px border-radius-30px o-hidden md-mb30">
                                                        <img src="{{ asset('assets/imgs/testim/' . $test->image) }}"
                                                            alt="{{ $test->name }}"
                                                            style="width:100%; height:100%; object-fit:cover;">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-7">
                                                    <svg class="w-90px mb-30px" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 800 800">
                                                        <path fill="#fff"
                                                            d="M225.87,344.5a233.54,233.54,0,0,1,66.2-60.93l7.93-4.9v-64.1l-19.77,3.76C77,256.67,66.67,421.53,66.67,454.17,66.67,524.4,108.37,600,199.9,600A128.53,128.53,0,0,0,333.24,476.46Z" />
                                                    </svg>

                                                    <p class="fs-28">
                                                        “{{ $test->comment }}”
                                                    </p>

                                                    <div class="info-text d-flex mt-30px">
                                                        <h6 class="fs-18 mr-15px">{{ $test->name }}</h6>
                                                        <p>{{ $test->title }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination md-hide"></div>
                            </div>
                        </div>
                        <div class="brand-style1 mt-70px position-relative z-index-9">
                            <div class="container">
                                <div class="row align-items-center">
                                    @foreach ($brands as $brand)
                                        <div class="col-lg-2 col-md-4 col-6 ">
                                            <div class="item text-align-center bg-light">
                                                <a href="{{ $brand->website_url ?? '#0' }}" target="_blank">
                                                    <img src="{{ asset('assets/imgs/clients/' . $brand->logo_path) }}"
                                                        alt="{{ $brand->name }}">

                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-lg-2 col-md-4 col-12 d-flex justify-content-center md-order-2">
                                        <div class="d-flex align-items-center">
                                            <span class="pr-10 mr-20px line-right border-color-transparent-white-light">
                                                <img src="{{ asset('assets/imgs/global.svg') }}" alt=""
                                                    class="invert-icon">
                                            </span>
                                            <span>{{ $brands->count() }}+ Fazla İş Ortağımız</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-6 md-order-1 md-mb30">
                                        <div class="text-align-center">
                                            <a href="/is-ortaklarimiz">
                                                Tüm İş Ortaklarımızı
                                                <br>
                                                İncele!
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

        </section>
        <div class="main-marq xlrg with-shad mt-80px pt-40px">
            <div class="slide-har st1 opacity-5">
                <div class="box d-flex align-items-center">
                    <div class="item">
                        <h4>Web Tasarım</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>UI / UX</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Web Çözümleri</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Responsive Tasarım</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="box d-flex align-items-center">
                    <div class="item">
                        <h4>Landing Page</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>E-Ticaret</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>SEO Uyumlu</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Modern Arayüz</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="assets/imgs/star.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="blog-style2 pt-0 mt-5">
            <div class="container">
                <div class="sec-head mb-80px" data-ui-animate data-delay="0.2">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="text-align-center">
                                <span class="butn-bord-sm mb-15px">Blog</span>
                                <h2 class="fs-60">Son Yazılarımız</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container" data-ui-animate data-delay="0.4">
                    <div class="swiper-wrapper">
                        @foreach ($blogs as $blog)
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="fit-img h-350px border-radius-30px o-hidden">
                                        <img src="{{ asset('assets/imgs/blog/' . $blog->featured_image) }}"
                                            alt="{{ $blog->title }}">
                                    </div>
                                    <div class="text mt-30px">
                                        <div class="info fs-13 mb-20px d-flex align-items-center">
                                            <span class="opacity-7">{{ $blog->category }}</span>
                                            <span class="mr-15px ml-15px opacity-7">|</span>
                                            @php \Carbon\Carbon::setLocale('tr'); @endphp
                                            <span
                                                class="fs-14 opacity-7">{{ \Carbon\Carbon::parse($blog->published_at)->translatedFormat('d F Y') }}</span>
                                        </div>
                                        <h5>
                                            <a href="{{ route('blogs.edit', $blog->slug) }}">{{ $blog->title }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endsection
