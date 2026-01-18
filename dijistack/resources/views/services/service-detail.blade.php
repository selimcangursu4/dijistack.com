@extends('partials.master')
@section('main')
    <main class="o-hidden">
        <header class="pg-hero">
            <div class="container-xxl">
                <div
                    style="position: relative; width: 100%; height: 0; padding-top: 56.25%; overflow: hidden;">
                    <img src="{{ asset('assets/imgs/serv/' . $service->hero_image) }}" alt="{{ $service->title }}"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
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

                    </div>
                </div>
            </div>
        </section>
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
