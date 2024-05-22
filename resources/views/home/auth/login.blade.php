  {{-- style --}}

  {{-- End Style --}}

  {{-- Login Content --}}

  <div class="container h-100 my-5">
    <div class="row h-100 mt-3">
    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
      <div class="d-table-cell align-middle"> 
        <div class="card mt-4">
          <div class="card-body">
            <div class="m-sm-4">
              <div class="text-center">
                <h1 class="h2">Selamat Datang Kembali</h1>
                <p class="lead">
                  Masuk dengan akun anda untuk melanjutkan!
                </p>
                <img src="/img/logo.png" alt="Andrew Jones" class="img-fluid rounded-circle" width="132" height="132">
              </div>
              @if(session()->has('loginError'))
              <div class="alert alert-danger">{{ session('loginError') }}</div>
              @endif
              <form action="/login/do" method="POST">
                @csrf
                <div class="form-group">
                  <label>Email<span class="text-danger">*</span></label>
                  <input class="form-control form-control-lg" type="email" name="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label>Password<span class="text-danger">*</span></label>
                  <input class="form-control form-control-lg" type="password" name="password" placeholder="Password">
                  <small>
                  <a href="pages-reset-password.html">Lupa Password?</a>
                  </small>
                </div>
                <div>
                  <div class="custom-control custom-checkbox align-items-center">
                    <input type="checkbox" class="custom-control-input" value="remember-me" name="remember-me" checked="">
                    <label class="custom-control-label text-small">Ingatkan Saya</label>
                  </div>
                </div>
                <div class="text-center mt-3">
                  <button class="btn bsb-btn-xl btn-primary" type="submit">Masuk</button>
                  <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
{{-- End Login Content --}}