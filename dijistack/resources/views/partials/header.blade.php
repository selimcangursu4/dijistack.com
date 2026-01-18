<nav class="navbar navbar-expand-lg">
    <div class="container align-items-center">
        <a class="logo w-100px" href="#">
            <img src="{{ asset('assets/imgs/dijistack-logo.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}"><span class="rolling-text">Anasayfa</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Hizmetlerimiz</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="page-about.html">Kurumsal Web Tasarım</a></li>
                        <li><a class="dropdown-item" href="page-services.html">Özel Yazılım & Yönetim Paneli</a></li>
                        <li><a class="dropdown-item" href="page-team.html">Mobil Uygulama Geliştirme</a></li>
                        <li><a class="dropdown-item" href="page-pricing.html">Yapay Zeka & Otomasyon Entegrasyonu</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Kurumsal</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('project.view')}}">Projelerimiz</a></li>
                        <li><a class="dropdown-item" href="portfolio-carousel.html">Hakkımızda</a></li>
                        <li><a class="dropdown-item" href="portfolio-parallax.html">Ekibimiz</a></li>
                        <li><a class="dropdown-item" href="portfolio-cards.html">Kariyer</a></li>
                        <li><a class="dropdown-item" href="portfolio-elegant.html">Gizlilik Politikası</a></li>
                        <li><a class="dropdown-item" href="portfolio-interactive.html">Kullanım Koşulları</a></li>
                        <li><a class="dropdown-item" href="portfolio-grid.html">KVKK Aydınlatma Metni</a></li>
                        <li><a class="dropdown-item" href="portfolio-gallery.html">Çerez Politikası</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="blog.html"><span class="rolling-text">Blog</span></a></li>
                <li class="nav-item"><a class="nav-link" href="page-contact.html"><span class="rolling-text">İletişim</span></a></li>
            </ul>
        </div>
    </div>
</nav>
