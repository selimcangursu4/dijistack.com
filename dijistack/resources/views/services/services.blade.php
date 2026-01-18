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
