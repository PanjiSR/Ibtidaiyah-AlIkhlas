 {{-- Content --}}
<div class="container-fluid mt-5">
    <div class="container mt-5">
        <div class="row">
            <h2 class="fw-bold aripin">BERITA DAN KEGIATAN</h2>
            <p>Menyajikan informasi terbaru tentang Kegiatan, berita terkini, dan artikel-artikel jurnalistik dari Madrasah Ibtidaiyah Al-Ikhlas</p>
        </div>
    </div>
</div>
{{-- End --}}

{{-- Post --}}
<div class="container">
    <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000">

        @foreach ($blog as $item)
            
        
        <div class="col-md-6 col-lg-4 mt-2 mb-3">
            <div class="blog-grid">
                <div class="blog-grid-img position-relative">
                    <img alt="img" src="/{{ $item->cover }}" height="280">
                </div>
                <div class="blog-grid-text p-4">
                    <h3 class="h5 mb-3"><a href="/blog/show/{{ $item->id }}" style="color: black; text-decoration:none;"> {{ $item->title }} </a></h3>
                    <p class="display-30"> {!! Illuminate\Support\Str::limit($item->desc, 100) !!} </p>
                    <div class="meta meta-style2">
                        <ul>
                            <li><a href="" style="color: black; text-decoration:none;"><i class="fas fa-calendar-alt"></i> <script>document.write(new Date().getFullYear())</script></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row mt-6 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
        <div class="col-12 mb-5">
            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                <ul>
                    <li><a href="#!"><i class="fas fa-long-arrow-alt-left me-1 d-none d-sm-inline-block"></i> Prev</a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">Next <i class="fas fa-long-arrow-alt-right ms-1 d-none d-sm-inline-block"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>