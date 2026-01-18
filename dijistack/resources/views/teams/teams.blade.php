@extends('partials.master')
@section('main')
    <main class="o-hidden">
        <section class="team-style1">
            <div class="container">
                <div class="sec-head bord mb-30px">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="text-uppercase">Ekibimiz</h6>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <h2 class="fs-60 text-uppercase"><span class="opacity-7 d-inline">
                                        Ekibimizle Tanışın !
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col-lg-4 col-md-6">
                            <div class="item p-25px border-radius-15px mt-50px">

                                <div class="fit-img position-relative h-450px o-hidden border-radius-10px mb-20px">
                                    <img src="{{ asset('assets/imgs/team/' . $team->photo) }}" alt="{{ $team->name }}"
                                        style="width:100%; height:100%; object-fit:cover;">

                                    <div class="social-icon-circle">
                                        @if ($team->twitter_url)
                                            <a href="{{ $team->twitter_url }}" target="_blank">
                                                <i class="fab fa-x-twitter"></i>
                                            </a>
                                        @endif

                                        @if ($team->facebook_url)
                                            <a href="{{ $team->facebook_url }}" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        @endif

                                        @if ($team->instagram_url)
                                            <a href="{{ $team->instagram_url }}" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        @endif

                                        @if ($team->linkedin_url)
                                            <a href="{{ $team->linkedin_url }}" target="_blank">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="info d-flex justify-content-between">
                                    <h6>{{ $team->name }}</h6>
                                    <span class="opacity-5 fs-14">{{ $team->title }}</span>
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
                            <img src="{{asset('assets/imgs/star.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Web Tasarım</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                           <img src="{{asset('assets/imgs/star.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Ajans</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="{{asset('assets/imgs/star.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4>Yazılım</h4>
                    </div>
                    <div class="item">
                        <div class="w-70px">
                            <img src="{{asset('assets/imgs/star.svg')}}" alt="">
                        </div>
                    </div>
            
                </div>
           
            </div>
        </div>
            <div class="container mb-5">
                    <div class="contact mt-80px">
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
