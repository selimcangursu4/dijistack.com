@extends('partials.master')
@section('main')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="o-hidden">
                <header class="hero-style8 pt-80px">
                    <div class="container position-relative pt-80px">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-1" data-ui-animate data-delay="0.2">
                                <div class="caption">
                                    <h1 class="fs-80">İş Ortaklarımızla Tanışın !</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <section class="portfolio-style2 overlay pb-80px">
                    <div class="container">
                        <div class="row stand-marg">
                            <div class="col-lg-5" data-ui-animate data-delay="0.2">
                                <div class="item mb-50px">
                                    <div
                                        class="portfolio-vertical sub-bg h-550px border-radius-30px o-hidden position-relative">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                @foreach ($partners as $partner)
                                                    <div class="swiper-slide"><span>{{ $partner->name }}</span></div>
                                                    <br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7" data-ui-animate data-delay="0.2">
                                <div class="row">
                                    @foreach ($partners as $partner)
                                        <div class="col-md-3 bg-light m-2 p-2" style="border-radius: 50px">
                                            <img src="{{ asset('assets/imgs/clients/' . $partner->logo_path) }}"
                                                alt="Partner Logo"
                                                style="max-width: 150px; max-height: 100px; width: auto; height: auto; display: block; margin: 0 auto;">

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container mb-5">
                    <div class="contact">
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
