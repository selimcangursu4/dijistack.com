@extends('partials.master')
@section('main')
    <main>
        <header class="pg-hero">
            <div class="container">
                <div class="row mb-80px">
                    <div class="col-lg-2">
                        <span class="butn-bord-sm mb-15px">Proje Detayı</span>
                    </div>
                    <div class="col-lg-10">
                        <span class="fs-16 text-uppercase fw-300 mb-10px opacity-7">{{ $project->category }}</span>
                        <h1 class="fs-80">{{ $project->title }}</h1>
                        <div class="info mt-50px">
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <div class="item mb-30px">
                                        <span class="opacity-8 mb-10px">Kategori</span>
                                        <h6>{{ $project->category }}</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="item mb-30px">
                                        <span class="opacity-8 mb-10px">Müşteri</span>
                                        <h6>{{ $project->client }}</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="item mb-30px">
                                        <span class="opacity-8 mb-10px">Website Linki</span>
                                        <h6> <a href="{{ $project->website_link }}">Siteye Git</a></h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="item">
                                        <span class="opacity-8 mb-10px">Projeyi Tamamlayan</span>
                                        <h6>{{ $project->designer }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-xxl">
                <div class="o-hidden border-radius-100px h-700px">
                    <div class="bg-img background-position-center h-800px"
                        data-background="{{ asset('assets/imgs/' . $project->hero_image) }}" data-speed="0.5"
                        data-lag="0">
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                @foreach ($features as $feature)
                    <div class="row mb-5">
                        <div class="col-lg-4">
                            <div>
                                <h6 class="fs-14 fw-400 ls-1px text-uppercase mb-30px">{{ $feature->feature_title }}</h6>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                {{ $feature->feature_main }}
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row lg-marg mt-80px">
                    <div class="col-md-6">
                        <div class="fit-img o-hidden border-radius-15px h-auto mt-30px"
                            style="overflow: hidden !important;">
                            <img src="{{ asset('assets/imgs/' . $project->big_image_1) }}"
                                alt="{{ $project->big_image_1 }}"
                                style="width: 100% !important; height: 100% !important; object-fit: cover !important;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fit-img o-hidden border-radius-15px h-auto mt-30px"
                            style="overflow: hidden !important;">
                            <img src="{{ asset('assets/imgs/' . $project->big_image_2) }}"
                                alt="{{ $project->big_image_2 }}"
                                style="width: 100% !important; height: 100% !important; object-fit: cover !important;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if ($images->count())
            <div class="portfolio-elegant mb-5">
                <div class="container-xxl">
                    <div class="work-boxs">
                        @foreach ($images as $img)
                            <div class="item cursor-pointer">
                                <div class="w-100">
                                    <div class="bg-img" data-background="{{ asset('assets/imgs/' . $img->image_path) }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </main>
@endsection
