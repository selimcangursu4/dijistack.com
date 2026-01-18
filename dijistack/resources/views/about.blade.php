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
                                    <span class="butn-bord-sm mb-15px">Hakkımızda</span>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div>
                                    <h1 class="fs-80 mb-2">{{ $about->title }}</h1>
                                    <p>{{ $about->long_description }}</p>
                                    <div class="d-flex gap-3 justify-content-start mt-2">
                                        @if ($about->facebook_url)
                                            <a href="{{ $about->facebook_url }}" target="_blank" class="social-icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M22.675 0h-21.35C.597 0 0 .597 0 1.325v21.351C0 23.403.597 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24h-1.918c-1.505 0-1.797.716-1.797 1.765v2.315h3.587l-.467 3.622h-3.12V24h6.116c.728 0 1.325-.597 1.325-1.324V1.325C24 .597 23.403 0 22.675 0z" />
                                                </svg>
                                            </a>
                                        @endif

                                        @if ($about->twitter_url)
                                            <a href="{{ $about->twitter_url }}" target="_blank" class="social-icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M24 4.557a9.83 9.83 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724 9.865 9.865 0 0 1-3.127 1.195 4.918 4.918 0 0 0-8.38 4.482A13.944 13.944 0 0 1 1.671 3.149 4.918 4.918 0 0 0 3.195 9.722a4.903 4.903 0 0 1-2.229-.616c-.054 2.28 1.581 4.415 3.949 4.89a4.936 4.936 0 0 1-2.224.084 4.922 4.922 0 0 0 4.596 3.417A9.867 9.867 0 0 1 0 19.54a13.933 13.933 0 0 0 7.548 2.212c9.142 0 14.307-7.721 13.995-14.646A9.936 9.936 0 0 0 24 4.557z" />
                                                </svg>
                                            </a>
                                        @endif

                                        @if ($about->linkedin_url)
                                            <a href="{{ $about->linkedin_url }}" target="_blank" class="social-icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M20.447 20.452h-3.554v-5.569c0-1.327-.025-3.037-1.851-3.037-1.853 0-2.136 1.446-2.136 2.939v5.667h-3.554V9h3.414v1.561h.049c.476-.9 1.637-1.851 3.369-1.851 3.602 0 4.268 2.372 4.268 5.455v6.287zM5.337 7.433c-1.144 0-2.067-.926-2.067-2.067 0-1.141.923-2.067 2.067-2.067 1.141 0 2.067.926 2.067 2.067 0 1.141-.926 2.067-2.067 2.067zM7.114 20.452H3.561V9h3.553v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z" />
                                                </svg>
                                            </a>
                                        @endif

                                        @if ($about->instagram_url)
                                            <a href="{{ $about->instagram_url }}" target="_blank" class="social-icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.34 3.608 1.315.975.975 1.253 2.242 1.315 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.062 1.366-.34 2.633-1.315 3.608-.975.975-2.242 1.253-3.608 1.315-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.366-.062-2.633-.34-3.608-1.315-.975-.975-1.253-2.242-1.315-3.608-.058-1.265-.07-1.645-.07-4.849s.012-3.584.07-4.849c.062-1.366.34-2.633 1.315-3.608.975-.975 2.242-1.253 3.608-1.315C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.012 7.052.07 5.777.127 4.602.383 3.633 1.352 2.664 2.321 2.408 3.496 2.351 4.771.293 8.332 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 0-2.881 0 1.44 1.44 0 0 0 2.881 0z" />
                                                </svg>
                                            </a>
                                        @endif

                                        @if ($about->youtube_url)
                                            <a href="{{ $about->youtube_url }}" target="_blank" class="social-icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M23.498 6.186a2.991 2.991 0 0 0-2.104-2.104C19.592 3.67 12 3.67 12 3.67s-7.592 0-9.394.412a2.991 2.991 0 0 0-2.104 2.104A31.79 31.79 0 0 0 0 12a31.79 31.79 0 0 0 .502 5.814 2.991 2.991 0 0 0 2.104 2.104C4.408 20.33 12 20.33 12 20.33s7.592 0 9.394-.412a2.991 2.991 0 0 0 2.104-2.104A31.79 31.79 0 0 0 24 12a31.79 31.79 0 0 0-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                    <style>
                                        .social-icon {
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            width: 48px;
                                            height: 48px;
                                            border-radius: 50%;
                                            background-color: #f0f0f0;
                                            color: #333;
                                            transition: all 0.3s ease;
                                        }

                                        .social-icon:hover {
                                            background-color: #007bff;
                                            color: #fff;
                                            transform: scale(1.1);
                                        }

                                        .social-icon svg {
                                            width: 24px;
                                            height: 24px;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <section class="contact-style2">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="box-info p-30px border-radius-30px sub-bg mb-20px">
                                <h6
                                    class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                    Misyonumuz</h6>
                                <p>{{ $about->mission }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box-info p-30px border-radius-30px sub-bg mb-20px">
                                <h6
                                    class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                    Vizyonumuz</h6>
                                <p>{{ $about->vision }}</p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="box-info p-30px border-radius-30px sub-bg mb-20px">
                                <h6
                                    class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                    Değerlerimiz
                                </h6>

                                @if ($about->values)
                                    @foreach (json_decode($about->values) as $value)
                                        <div class="mb-3">
                                            <h5 class="mb-1">{{ $value->name }}</h5>
                                            <p class="mb-2">{{ $value->description }}</p>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="box-info p-30px border-radius-30px sub-bg mb-30px">
                                            <span class="fs-40 mb-30px"><i class="fa-solid fa-location-dot"></i></span>
                                            <h6
                                                class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                                Adres Bilgisi</h6>
                                            <p>{{ $about->address }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="box-info p-30px border-radius-30px sub-bg mb-30px">
                                            <span class="fs-40 mb-30px"><i class="fa-solid fa-envelope"></i></span>
                                            <h6
                                                class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                                E-Posta 7/24</h6>
                                            <p><a href="#0">{{ $about->email }} </a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="box-info p-30px border-radius-30px sub-bg mb-30px">
                                            <span class="fs-40 mb-30px"><i class="fa-solid fa-phone"></i></span>
                                            <h6
                                                class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                                İletişim Numarası</h6>
                                            <p>{{ $about->phone }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="team-intro style2 pb-0">
                        <div class="container">

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
                                            <h6 class="">Farklı sektörlerde full stack web developer olarak çalışmış
                                                ve
                                                web
                                                siteleri ile yönetim panelleri geliştirme alanında kapsamlı deneyimler
                                                kazanmıştır. <br>
                                                <br> 2025 yılında bu birikimini Dijistack Web Tasarım Ajansı’nı kurarak
                                                profesyonel
                                                hizmete dönüştürmüş ve modern, kullanıcı odaklı dijital çözümler sunmayı
                                                hedeflemiştir.
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

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container mb-3">
                    <div class="contact">
                        <h1 class="mb-2">Hemen Bizimle İletişime Geçin!</h1>
                        <form id="contact-form" class="form2">
                            @csrf
                            <div class="controls row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-30px">
                                        <input type="text" name="name" placeholder="İsim Soyisim" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30px">
                                        <input type="email" name="email" placeholder="E-Posta" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30px">
                                        <input type="text" name="phone" placeholder="Telefon Numaranız" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-30px">
                                        <input type="text" name="subject" placeholder="Konu">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Mesajınız" rows="4" required></textarea>
                                    </div>
                                    <div class="mt-30px">
                                        <button type="submit" class="butn-arrow butn-rounded main-colorbg mt-30px">
                                            <span>Mesajı Gönder</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="messages"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#contact-form').submit(function(e) {
                e.preventDefault();

                let formData = $(this).serialize();

                $.ajax({
                    url: "{{ route('contact.store') }}",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.status === 'success') {
                            $('.messages').html('<div class="alert alert-success">' + response
                                .message + '</div>');
                            $('#contact-form')[0].reset();
                        }
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        let html = '<div class="alert alert-danger"><ul>';
                        $.each(errors, function(key, value) {
                            html += '<li>' + value[0] + '</li>';
                        });
                        html += '</ul></div>';
                        $('.messages').html(html);
                    }
                });
            });
        });
    </script>
@endsection
