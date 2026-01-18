@extends('partials.master')
@section('main')
    <main class="o-hidden">
        <header class="pg-hero">
            <div class="container-xxl">
                <div class="o-hidden border-radius-100px h-700px">
                    <div class="bg-img background-position-center h-800px"
                        data-background="{{ asset('assets/imgs/serv/' . $service->hero_image) }}" data-speed="0.5"
                        data-lag="0">
                    </div>

                </div>
            </div>
            <div class="container mt-5">
                <div class="row mb-10px">
                    <div class="col-lg-2">
                        <div class="pt-15px">
                            <span class="butn-bord-sm mb-15px">Detay</span>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div>
                            <h1 class="fs-80">{{ $service->title }}</h1>
                            <p>{{ $service->sort_description }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="pb-10px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="main-post">
                            <div class="item pb-60px">
                                <article>
                                    {!! $service->description !!}
                                </article>

                                <div class="mb-50px mt-50px">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="iner-img sm-mb30">
                                                <img src="assets/imgs/blog/2.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="iner-img">
                                                <img src="assets/imgs/blog/5.webp" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact mb-5">
                            <div class="mb-60px">
                                <h3>Hemen İletişime Geç</h3>
                            </div>
                            <form id="contact-form" class="form2" method="post">
                                <div class="messages"></div>
                                <div class="controls row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-30px">
                                            <input id="form_name" type="text" name="name" placeholder="İsim Soyisim"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30px">
                                            <input id="form_email" type="email" name="email"
                                                placeholder="E-Posta Adresi" required="required">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Mesajınız" rows="4" required="required"></textarea>
                                        </div>
                                        <div class="mt-30px">
                                            <button type="submit" class="butn-arrow butn-rounded main-colorbg mt-30px">
                                                <span class="text-uppercase fs-14 fw-500">Gönder</span>
                                                <span class="arrow-icon">
                                                    <svg viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                                        </path>
                                                    </svg>
                                                    <svg viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
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
        </section>
    </main>
@endsection
