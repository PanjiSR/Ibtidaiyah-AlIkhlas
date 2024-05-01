<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm position-fixed w-100">
      <div class="container">
        <a class="navbar-brand " href="#">Madrasah</a>
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
              <a class="nav-link {{ Request::is('news') ? 'active' : '' }} " href="/news">Berita</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link {{ Request::is('contact') ? 'active' : '' }} " href="/contact">Kontak</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="login" class="btn btn-primary"> Login</a>
          </form>
        </div>
      </div>
    </nav>
  </header>