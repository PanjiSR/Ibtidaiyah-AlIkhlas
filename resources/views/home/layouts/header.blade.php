<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark  shadow-sm position-fixed w-100">
      <div class="container">
        <a class="navbar-brand madrasah" href="/">
          <img src="/img/logo-nav.png" width="180" alt=""></a>
          {{-- Ibtidaiyah Al-Ikhlas<br><small>Pasir Mukti | Citeureup</small></a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0 mx-auto">
            <li class="nav-item mx-2">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link {{ Request::is('profile') ? 'active' : '' }} " href="/profile">Profil</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link {{ Request::is('blog') ? 'active' : '' }} " href="/blog">Berita</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link {{ Request::is('contact') ? 'active' : '' }} " href="/contact">Kontak</a>
            </li>
          </ul>
          <form class="d-flex">
            @auth
            <a href="/admin/dashboard" class="login"><i class="fas fa-user"></i> Dashboard</a>
            @else
            <a href="/login" class="login"> <i class="fas fa-sign-in-alt"></i> Login</a>
            @endauth
          </form>
        </div>
      </div>
    </nav>
  </header>