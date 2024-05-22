<header>
    <!-- Fixed navbar -->
    <nav class= "navbar navbar-expand-md bg-light nav-color shadow-sm position-fixed w-100">
      <div class="container-fluid mx-3">
        <a class="navbar-brand madrasah" href="/">
          <img src="/img/logo-nav-black.png" width="250" alt=""></a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto d-flex gap-4">
            <li class="nav-item ">
              <a class=" {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item ">
              <a class=" {{ Request::is('profile') ? 'active' : '' }} " href="/profile">Profil</a>
            </li>
            <li class="nav-item ">
              <a class=" {{ Request::is('blog') ? 'active' : '' }} " href="/blog">Berita & Kegiatan</a>
            </li>
            <li class="nav-item">
              <a class=" {{ Request::is('contact') ? 'active' : '' }} " href="/contact">Hubungi Kami</a>
            </li>
            <li>
              <a href="#" class="brosur">Download Brosur</a>
            </li>
            <li>
            @auth
            <a href="/admin/dashboard" class="login"><i class="fas fa-user"></i> Dashboard</a>
            @else
            <a href="/login" class="login"> <i class="fas fa-sign-in-alt"></i> Masuk</a>
            @endauth
            </li>

          </ul>
        </div>
      </div>
    </nav>

    

  </header>