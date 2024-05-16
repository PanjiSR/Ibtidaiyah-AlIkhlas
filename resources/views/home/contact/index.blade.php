{{-- Style --}}

<style>
/*======= Contact ======*/

.form-control {
  box-shadow: none !important;
  outline: none !important;
  border: 2px solid #cecece;
  height: 38px;
}
.form-control:hover ,.form-control:focus{
  border-color: #97a0af;
}


.error {
  margin: 8px 0px;
  display: none;
  color: red;
}
#ajaxsuccess {
  font-size: 16px;
  width: 100%;
  display: none;
  clear: both;
  margin: 8px 0px;
}
.con_sub_text {
  margin: 20px 0px;
  font-size: 15px;
}

.contact-detail-box {
  margin-bottom: 50px;
}

.contact-detail-box address {
  font-size: 14px;
}
.contact-map {
  background-color: #ededed;
}

.title-box .border,.btn-primary,.back-to-top,
.logo i,.question-q-box,.social-circle li a:hover {
  background-color: #22c55e !important;
}
.title-box .title-alt,.text-colored,.footer a:hover,
.navbar-custom .navbar-nav li a:hover,
.navbar-custom .navbar-nav li a:focus,
.navbar-custom .navbar-nav li a:active,
.navbar-custom .navbar-nav li.active a {
  color: #22c55e;
}

.btn-primary {
  border: 1px solid #22c55e !important;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.btn-primary.focus,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:hover,
.open > .dropdown-toggle.btn-primary,
.btn-primary.active.focus, .btn-primary.active:focus, 
.btn-primary.active:hover, .btn-primary:active.focus, 
.btn-primary:active:focus, .btn-primary:active:hover, 
.open>.dropdown-toggle.btn-primary.focus, 
.open>.dropdown-toggle.btn-primary:focus, 
.open>.dropdown-toggle.btn-primary:hover {
  background-color: #22c55e !important;
  border: 1px solid #22c55e !important;
}

.btn-shadow.btn-primary {
  box-shadow: 1px 5px 9px #22c55e;
}



/*======= Responsive ======*/
@media (min-width: 768px) {
    .nav-custom-left {
		margin-left: 5%;
	}
  .navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .contact-page .col-sm-6 {
    padding-left: 30px;
    padding-right: 30px;
  }
}

@media (max-width: 768px) {
  .navbar-custom {
        -moz-box-shadow: 0 2px 2px rgba(0,0,0,.1);
    -webkit-box-shadow: 0 2px 2px rgba(0,0,0,.1);
    box-shadow: 0 2px 2px rgba(0,0,0,.1);
  }
  .screen-space {
    margin: 0px auto 50px auto;
  }
  .feature-detail {
    padding: 0px 0px 50px 30px !important;
  }
  .footer h5 {
    margin-top: 30px;
  }
}


@media only screen and (min-width: 768px) and (max-width: 991px){
  .blog-wrapper .blog-item {
    width: 50%;
  }
  .navbar-custom .navbar-nav li a {
    font-size: 12px;
  }
  .blog-detail-box {
  padding-right: 0px;
}
}
@media only screen and (min-width: 767px) and (max-width: 991px){
  
}
@media (max-width: 767px) {
  .blog-wrapper .blog-item {
    width: 100%;
  }
  .logo {
    margin-top: 7px;
  }
  .blog-detail-box {
  padding-right: 0px;
}
}
</style>

{{-- End Style --}}

{{-- Content --}}

<div class="container bootstrap snippets bootdeys my-5">
    <div class="row text-center mt-5">
      <div class="col-sm-4">
        <div class="contact-detail-box">
          <i class="fas fa-th fa-3x text-colored"></i>
          <h4>Hubungi Kami</h4>
          <abbr title="Phone"><i class="fa-solid fa-phone-flip"></i></abbr> (123) 456-7890<br>
          <a href="mailto:email@email.com" class="text-muted"><i class="fa-solid fa-envelope"></i> email@email.com</a>
        </div>
      </div><!-- end col -->

      <div class="col-sm-4">
        <div class="contact-detail-box">
          <i class="fa-solid fa-location-dot fa-3x text-colored"></i>
          <h4>Lokasi Kami</h4>
          <address>
          Gg Jabon, Kp.Dukuh RT.005/001<br>
          Pasir Mukti, Citeureup, Bogor<br>
        </address>
        </div>
      </div><!-- end col -->

      <div class="col-sm-4">
        <div class="contact-detail-box">
          <i class="fas fa-book fa-3x text-colored"></i>
          <h4>Layanan 24 Jam</h4>

          <p>MI Al-Ikhlas</p>
          <h4 class="text-muted">1234 567 890</h4>
        </div>
      </div><!-- end col -->

    </div>
    <!-- end row -->


    <div class="row">
      <div class="col-sm-6">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3964.0924902941624!2d106.8953899!3d-6.5099762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMzAnMzYuOSJTIDEwNsKwNTMnNDMuOCJF!5e0!3m2!1sid!2sid!4v1715408092100!5m2!1sid!2sid" class="mt-2" style="border:0; border-radius:20px; width: 100%; height: 250px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div><!-- end col -->

      <!-- Contact form -->
      
      <div class="col-sm-6">
        <form role="form" name="ajax-form" id="ajax-form" action="/contact/send" method="post" class="form-main">
            @csrf
          <div class="form-group">
            <label for="Name">Nama Lengkap</label>
            <input name="name" type="text" placeholder="Nama Lengkap" class="form-control @error('name') is-invalid @enderror"> 
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div> <!-- /Form-name -->

          <div class="form-group mt-3">
            <label for="Desc">Pesan</label>
            <textarea name="desc" placeholder="Pesan" class="form-control @error('desc') is-invalid @enderror" rows="3"></textarea> 
                @error('desc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
          </div> <!-- /col -->

          <div class="row">            
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-shadow btn-rounded w-md mt-3" id="send">Submit</button>
            </div> <!-- /col -->
          </div> <!-- /row -->

        </form> <!-- /form -->
      </div> <!-- end col -->

    </div> <!-- end row -->
        
  </div>

{{-- End Content --}}




{{-- 
<form action="/contact/send" method="post" class="contactform contact_form" id="contact_form">
    <div class="row">
    {{-- <form action="/contact/send" method="POST"> --}}
        {{-- @csrf
        <div class="col-md-6">
            <div class="form-group">
                <input name="name" type="text" placeholder="Nama Lengkap" class="form-control @error('name') is-invalid @enderror"> 
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="desc" placeholder="Pesan" class="form-control @error('desc') is-invalid @enderror" rows="3"></textarea> 
                @error('desc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 btn-lg">Kirim Pesan</button>
    </div>
</form> --}}


{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3964.0924902941624!2d106.8953899!3d-6.5099762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMzAnMzYuOSJTIDEwNsKwNTMnNDMuOCJF!5e0!3m2!1sid!2sid!4v1715408092100!5m2!1sid!2sid" class="mt-2" style="border:0; border-radius:20px; width: 100%; height: 360px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}