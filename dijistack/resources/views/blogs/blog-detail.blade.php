@extends('partials.master')
@section('main')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="o-hidden">
                <header class="pg-hero">
                    <div class="container">
                        <div class="row mb-80px">
                            <div class="col-lg-2">
                                <div class="pt-15px">
                                    <span class="butn-bord-sm mb-15px">{{ $blog->category }}</span>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div>
                                    <h1 class="fs-80">{{ $blog->title }}</h1>
                                    <div class="info d-flex mt-40px align-items-center">
                                        <div class="left-info">
                                            <div class="d-flex align-items-center">
                                                <div class="author-info">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="ml-20px">
                                                            <span class="opacity-7 mb-5px">Yazar</span>
                                                            <h6 class="fs-18">{{ $blog->author_name }}</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="date ml-50px">
                                                    @php \Carbon\Carbon::setLocale('tr'); @endphp
                                                    <a href="#">
                                                        <span class="opacity-7 mb-5px">Yayın Tarihi</span>
                                                        <h6 class="fs-18">
                                                            {{ \Carbon\Carbon::parse($blog->published_at)->translatedFormat('d F, Y') }}
                                                        </h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-info ml-auto">
                                            <div>
                                                <span class="pe-7s-comment fz-18 mr-10px"></span>
                                                <span class="opacity-7">{{ $blog->comment_count }} Yorum</span>
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
                                style="background-image: url('{{ asset('assets/imgs/blog/' . $blog->featured_image) }}');"
                                data-speed="0.5" data-lag="0">
                            </div>
                        </div>
                    </div>
                </header>

                <section class="pb-80px pt-80px">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="main-post">
                                    <div class="item pb-60px">
                                        <article>
                                            {!! $blog->content !!}
                                        </article>

                                        <div class="info-area d-flex pt-50px">
                                            <div>
                                                <div class="tags d-flex align-items-center">
                                                    <div><span>Etiketler :</span></div>
                                                    <div>
                                                        @foreach (json_decode($blog->tags ?? '[]') as $tag)
                                                            <a href="#">{{ $tag }}</a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="share-icon d-flex align-items-center">
                                                    <div><span>Paylaş :</span></div>
                                                    <div>
                                                        <a href="https://www.facebook.com/"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                        <a href="https://www.twitter.com/"><i
                                                                class="fab fa-twitter"></i></a>
                                                        <a href="https://www.youtube.com/"><i
                                                                class="fab fa-youtube"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact mt-80px">
                                            <div class="mb-60px">
                                                <h3>Yorum Bırak</h3>
                                            </div>
                                            <form id="contact-form" class="form2" method="post" action="#">
                                                @csrf
                                                <div class="messages"></div>
                                                <div class="controls row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-30px">
                                                            <input id="form_name" type="text" name="name"
                                                                placeholder="Adınız" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-30px">
                                                            <input id="form_email" type="email" name="email"
                                                                placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <textarea id="form_message" name="message" placeholder="Mesajınız" rows="4" required></textarea>
                                                        </div>
                                                        <div class="mt-30px">
                                                            <button type="submit"
                                                                class="butn-arrow butn-rounded main-colorbg mt-30px">
                                                                <span class="text-uppercase fs-14 fw-500">Gönder</span>
                                                                <span class="arrow-icon">
                                                                    <svg viewBox="0 0 24 24" fill="none">
                                                                        <path
                                                                            d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
@endsection
