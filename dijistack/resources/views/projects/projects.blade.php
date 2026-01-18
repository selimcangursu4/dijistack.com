@extends('partials.master')
@section('main')
    <div id="smooth-wrapper" class="blur-menubg">
        <div id="smooth-content">
            <main class="o-hidden">
                <section class="hero-style5-showcase shwocase p-0 content-row position-relative o-hidden">
                    <div class="ui-snap-slider position-relative">

                        <div class="snap-slider-captions">
                            <div class="snap-slider-captions-wrapper container">
                                @foreach ($projects as $index => $project)
                                    <div class="snap-slide-caption">
                                        <div class="row align-items-center">
                                            <div class="col-sm-3">
                                                <span class="tag">{{ $project->category }}</span>
                                            </div>
                                            <div class="col-sm-6 text-align-center">
                                                <h2><a
                                                        href="{{ route('project.edit', $project->slug) }}">{{ $project->title }}</a>
                                                </h2>
                                                <a href="">Projeyi İncele</a>
                                            </div>
                                            <div class="col-sm-3 d-flex justify-content-end sm-hide">
                                                <span>{{ str_pad($index + 1, 3, '0', STR_PAD_LEFT) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="snap-slider-images">
                            <div class="snap-slider-images-wrapper">
                                @foreach ($projects as $project)
                                    <div class="snap-slide">
                                        <div class="main-img" data-overlay-dark="5">
                                            <div class="img">
                                                <img src="{{ asset('assets/imgs/' . $project->hero_image) }}"
                                                    alt="{{ $project->title }}">

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="snap-slider-thumbs">
                            <div class="snap-slider-thumbs-wrapper">
                                @foreach ($projects as $project)
                                    <div class="thumb-slide">
                                        <div class="thumb-slide-img fit-img">

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
