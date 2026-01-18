<footer class="footer-style1 pb-50px">
    <div class="container">
        <div class="row sm-marg">
            <div class="col-lg-8">
                <div class="fo-box-left v-align-between">
                    <div>
                        <div
                            class="d-flex align-items-center justify-content-between fs-14 mb-20px pb-20px line-bottom border-color-transparent-white-light">
                            <div>
                                <h2><span class="opacity-7">Projeniz için bizimle iletişime geçin. En kısa sürede size dönüş yapalım.</span></h2>
                            </div>
                            <div>
                                <a href="{{route('contact.view')}}" class="butn-arrow butn-rounded">
                                    <span class="text-uppercase fs-14 fw-500">İletişime Geç!</span>
                                    <span class="arrow-icon">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between">
                        <div>
                            <div class="f-logo w-150px mb-30px">
                                <img src="{{ asset('assets/imgs/dijistack-logo.png') }}" alt="">
                            </div>
                            <p class="fs-14 text-uppercase fw-200">© 2026 <a href="">Dijistack</a>. Tüm Hakları Saklıdır.</p>
                        </div>
                        <div class="tags text-align-right">
                            <a href="{{route('home')}}">Anasayfa</a>
                            <a href="{{route('service.view')}}">Hizmetlerimiz</a>
                            <a href="{{route('project.view')}}">Projelerimiz</a>
                            <br>
                            <a href="page-about.html">Hakkımızda</a>
                            <a href="{{route('blogs.view')}}">Blog</a>
                            <a href="{{route('teams.view')}}">Ekibimiz</a>
                            <a href="{{route('contact.view')}}">İletişim</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="fo-box-right d-flex v-align-between">
                    <div>
                        <h5>Bizi Sosyal Medyadan <br> Takip Edin!</h5>
                        <div class="social-icon-circle mt-30px">
                            <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                            <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                            <a href="#"> <i class="fab fa-instagram"></i> </a>
                            <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                        </div>
                        <div class="subscribe mt-20px">
                            <form action="#" class="position-relative">
                                <input type="email" placeholder="E-Posta Adresinizi Giriniz..." name="subscribe">
                                <button type="submit"><img src="{{ asset('assets/imgs/paper-plane.svg') }}" alt="" class="w-30px"></button>
                            </form>
                            <p class="fs-14 mt-15px">Abone olarak <a href="#0" class="underline">Gizlilik Politika</a>'sını kabul etmiş olursunuz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
