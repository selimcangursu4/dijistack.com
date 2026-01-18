@extends('partials.master')
@section('main')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="o-hidden">
                <header class="pg-hero">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="pt-15px">
                                    <span class="butn-bord-sm mb-15px">İş Ortaklarımız</span>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div>
                                    <h1 class="fs-80 text-uppercase"><span class="opacity-7 d-inline">
                                            İş Ortaklarımızı Tanıyın !
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <section class="portfolio-style3">
                    <div class="container">
                        <div class="cardStacking">
                            <div class="cardStacking__cards">
                                @foreach ($partners as $partner)
                                    <div class="stackCard mb-20px bg-light">
                                        <div class="item fit-img h-600px border-radius-30px o-hidden position-relative">

                                            <img src="{{ asset('assets/imgs/clients/' . $partner->logo_path) }}"
                                                alt="{{ $partner->name }}"
                                                style="width:100%; height:100%; object-fit:contain;">


                                            <div class="tags">
                                                <span>{{ $partner->name }}</span>
                                            </div>

                                            <div class="text w-100 text-align-center">
                                                <h6>
                                                    <a href="{{ $partner->website_url }}" target="_blank">
                                                        {{ $partner->website_url }}
                                                    </a>
                                                </h6>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
@endsection
