@extends('partials.master')
@section('main')
    <main class="o-hidden">
        <section class="portfolio-style2">
            <div class="container">
                <div class="row gallery lg-marg">
                    <div class="col-lg-6 col-md-6 items">
                        <div class="sec-head mb-80px">
                            <span class="butn-bord-sm mb-15px">Hizmetlerimiz</span>
                            <h2 class="fs-60">Tüm Hizmetlerimizi <br> Bu Sayfadan Görüntüleyebilirsiniz.</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($services as $index => $service)
                            <div class="col-lg-6 col-md-6 items">
                                <div class="item {{ $index != 0 ? 'mt-80px' : '' }}">
                                    <div class="fit-img h-500px border-radius-30px o-hidden">
                                        <img src="{{ asset('assets/imgs/serv/' . $service->hero_image) }}"
                                            alt="{{ $service->title }}" class="h-620px" data-speed="0.8" data-lag="0"
                                            style="width:100%; height:100%; object-fit:contain;">
                                    </div>
                                    <div class="cont mt-20px">
                                        <a href="{{ route('service.edit', $service->slug) }}">
                                            <h5>{{ $service->title }}</h5>
                                        </a>
                                        <p class="mt-10px opacity-7">
                                            {{ $service->sort_description }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
