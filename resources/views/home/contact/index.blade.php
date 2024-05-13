{{-- Style Contact--}}
<style>
    .contact-name {
  margin-bottom: 30px;
}
.contact-name h5 {
  font-size: 22px;
  color: #20247b;
  margin-bottom: 5px;
  font-weight: 600;
}
.contact-name p {
  font-size: 18px;
  margin: 0;
}

.social-share a {
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  text-align: center;
  margin-right: 10px;
}
.social-share .instagram {
  box-shadow: 0 8px 30px -4px rgba(234, 76, 137, 0.5);
  background-color: #ea4c89;
}
.social-share .tiktok {
  box-shadow: 0 8px 30px -4px rgba(0, 103, 255, 0.5);
  background-color: #0067ff;
}
.social-share .linkedin {
  box-shadow: 0 8px 30px -4px rgba(1, 119, 172, 0.5);
  background-color: #0177ac;
}

.contact-form .form-control {
  border: none;
  border-bottom: 1px solid #20247b;
  background: transparent;
  border-radius: 0;
  padding-left: 0;
  box-shadow: none !important;
}
.contact-form .form-control:focus {
  border-bottom: 1px solid #fc5356;
}
.contact-form .form-control.invalid {
  border-bottom: 1px solid #ff0000;
}
.contact-form .send {
  margin-top: 20px;
}
@media (max-width: 767px) {
  .contact-form .send {
    margin-bottom: 20px;
  }
}

.section-title h2 {
    font-weight: 700;
    color: #20247b;
    font-size: 45px;
    margin: 0 0 15px;
    border-left: 5px solid #fc5356;
    padding-left: 15px;
}
.section-title {
    padding-bottom: 45px;
}
.contact-form .send {
    margin-top: 20px;
}
.px-btn {
    padding: 0 50px 0 20px;
    line-height: 60px;
    position: relative;
    display: inline-block;
    color: #20247b;
    background: none;
    border: none;
}
.px-btn:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    border-radius: 30px;
    background: transparent;
    border: 1px solid rgba(252, 83, 86, 0.6);
    border-right: 1px solid transparent;
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    width: 60px;
    height: 60px;
}
.px-btn .arrow {
    width: 13px;
    height: 2px;
    background: currentColor;
    display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    right: 25px;
}
.px-btn .arrow:after {
    width: 8px;
    height: 8px;
    border-right: 2px solid currentColor;
    border-top: 2px solid currentColor;
    content: "";
    position: absolute;
    top: -3px;
    right: 0;
    display: inline-block;
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
{{-- End Style Contact --}}

{{-- Content of Contact --}}

<section class="section gray-bg my-5" id="contactus">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Hubungi Kami</h2>
                    <div class="social-share nav mt-3">
                        <a class="instagram" href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a class="tiktok" href="#">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a class="linkedin" href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex-row-reverse">
            <div class="col-md-7 col-lg-8 m-15px-tb">
                <div class="contact-form">
                     <form action="/contact/send" method="post" class="contactform contact_form" id="contact_form">
                        <div class="row">
                        {{-- <form action="/contact/send" method="POST"> --}}
                            @csrf
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
                            <button type="submit" class="btn btn-success mt-3">Kirim Pesan</button>
                        {{-- </form> --}}
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 m-15px-tb">
                <div class="contact-name">
                    <h5>Mail</h5>
                    <p>info@domainname.com</p>
                </div>
                {{-- <div class="contact-name">
                    <h5>Visit School</h5>
                    <p>Gg Jabon,Kp.Dukuh RT.05/01 <br>Desa Pasir Mukti <br>Kecamatan Citeureup, Bogor</p>
                </div> --}}
                <div class="contact-name">
                    <h5>Phone</h5>
                    <p>+01 123 654 8096</p>
                </div>

                <div class="contact-name">
                    <h5>Peta Lokasi</h5>
                    <p>Madrasah Ibtidaiyah Al-Ikhlas</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3964.0924902941624!2d106.8953899!3d-6.5099762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMzAnMzYuOSJTIDEwNsKwNTMnNDMuOCJF!5e0!3m2!1sid!2sid!4v1715408092100!5m2!1sid!2sid" class="mt-2" style="border:0; border-radius:20px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- End Content --}}