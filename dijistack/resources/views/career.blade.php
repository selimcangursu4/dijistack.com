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
                                    <span class="butn-bord-sm mb-15px">Kariyer</span>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div>
                                    <h1 class="fs-80">Ekibimize Katılmak İster Misiniz? Kariyer Fırsatlarını Keşfedin!</h1>
                                    <p class="fs-18 mt-3">Yenilikçi projelerimizde yer almak ve profesyonel ekibimizle
                                        büyümek için doğru yerdesiniz. Başvurularınızı hemen iletebilirsiniz.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container mb-3">
                        <div class="contact mt-80px">
                            <form id="career-form" class="form2" enctype="multipart/form-data">
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

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30px">
                                            <input type="text" name="position"
                                                placeholder="Başvurmak İstediğiniz Pozisyon" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-30px">
                                            <label class="mb-1" for="resume">Özgeçmişinizi Yükleyin (PDF, DOCX)</label>
                                            <input type="file" name="resume" id="resume" accept=".pdf,.doc,.docx"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Eklemek İstediğiniz Not veya Mesaj" rows="4"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mt-30px">
                                            <button type="submit" class="butn-arrow butn-rounded main-colorbg mt-30px">
                                                <span>Başvuruyu Gönder</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="messages mt-3"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </header>
            </main>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#career-form').submit(function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    url: "{{ route('career.store') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            $('.messages').html('<div class="alert alert-success">' + response
                                .message + '</div>');
                            $('#career-form')[0].reset();
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr); // 🔹 Hata detayını console'a yazdır
                        let html = '<div class="alert alert-danger"><ul>';

                        if (xhr.responseJSON?.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                html += '<li>' + value[0] + '</li>';
                            });
                        } else if (xhr.responseJSON?.message) {
                            html += '<li>' + xhr.responseJSON.message + '</li>';
                            if (xhr.responseJSON.error) html += '<li>' + xhr.responseJSON
                                .error + '</li>';
                        } else {
                            html += '<li>Beklenmeyen bir hata oluştu.</li>';
                        }

                        html += '</ul></div>';
                        $('.messages').html(html);
                    }
                });
            });

        });
    </script>
@endsection
