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
                                    <span class="butn-bord-sm mb-15px">İletişim</span>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div>
                                    <h1 class="fs-80">Aklınızda bir proje mi var ? Hemen İletişime Geçin !</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
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
                </header>
                <section class="contact-style2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="box-info p-30px border-radius-30px sub-bg mb-30px">
                                            <span class="fs-40 mb-30px"><i class="fa-solid fa-location-dot"></i></span>
                                            <h6
                                                class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                                Adres Bilgisi</h6>
                                            <p>Türkiye - İstanbul/Ümraniye</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="box-info p-30px border-radius-30px sub-bg mb-30px">
                                            <span class="fs-40 mb-30px"><i class="fa-solid fa-envelope"></i></span>
                                            <h6
                                                class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                                E-Posta 7/24</h6>
                                            <p><a href="#0">info@dijistack.com </a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="box-info p-30px border-radius-30px sub-bg mb-30px">
                                            <span class="fs-40 mb-30px"><i class="fa-solid fa-phone"></i></span>
                                            <h6
                                                class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                                İletişim Numarası</h6>
                                            <p>+090 530 080 5690</p>
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
