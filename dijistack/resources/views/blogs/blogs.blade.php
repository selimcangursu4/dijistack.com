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
                                    <span class="butn-bord-sm mb-15px">Bloglarımız</span>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div>
                                    <h1 class="fs-80">Teknolojiden Son Haberler</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <section class="pb-50px">
                    <div class="container">
                        <div class="row md-marg">
                            <div class="col-lg-12">
                                <div class="blog-style1 no-filter">
                                    @foreach ($blogs as $blog)
                                        <div class="item mb-80px">
                                            <div class="fit-img h-450px border-radius-15px o-hidden">
                                                <img src="{{ asset('assets/imgs/blog/' . $blog->featured_image) }}"
                                                    alt="{{ $blog->title }}">

                                                <a href="{{ route('blogs.edit', $blog->slug) }}" class="date-show">
                                                    <div>
                                                        @php
                                                            \Carbon\Carbon::setLocale('tr');
                                                        @endphp

                                                        <span>{{ \Carbon\Carbon::parse($blog->published_at)->format('d') }}</span>
                                                        {{ \Carbon\Carbon::parse($blog->published_at)->translatedFormat('F') }}

                                                    </div>
                                                </a>
                                            </div>
                                            <div class="text">
                                                <div class="info fw-300 mb-15px d-flex align-items-center">
                                                    <div class="sm-title-dote mr-30px">
                                                        <span class="opacity-6">{{ $blog->category }}</span>
                                                    </div>
                                                    <div>
                                                        <span class="fs-14 opacity-6">Yazar: {{ $blog->author_name }}</span>
                                                    </div>
                                                </div>
                                                <h5>
                                                    <a href="{{ route('blogs.edit', $blog->slug) }}">{{ $blog->title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    @endforeach



                                </div>
                            </div>

                        </div>
                    </div>
                </section>


            </main>


        </div>

    </div>
@endsection
