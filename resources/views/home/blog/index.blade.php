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
        <div class="d-flex justify-content-end mb-5">
            {{ $blog->links() }}
        </div>
    </div>
</div>