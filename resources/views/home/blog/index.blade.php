{{-- CSS --}}
<style>
    .blog-grid {
    position: relative;
    box-shadow: 0 1rem 1.75rem 0 rgba(45, 55, 75, 0.1);
    height: 100%;
    border: 0.0625rem solid rgba(220, 224, 229, 0.6);
    border-radius: 0.25rem;
    transition: all .2s ease-in-out;
    height: 100%
}

.blog-grid span {
    color: #292dc2
}

.blog-grid img {
    width: 100%;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem
}

.blog-grid-text {
    position: relative
}

.blog-grid-text>span {
    color: #292dc2;
    font-size: 13px;
    padding-right: 5px
}

.blog-grid-text h4 {
    line-height: normal;
    margin-bottom: 15px
}

.blog-grid-text .meta-style2 {
    border-top: 1px dashed #cee1f8;
    padding-top: 15px
}

.blog-grid-text .meta-style2 ul li {
    margin-bottom: 0;
    font-weight: 500
}

.blog-grid-text .meta-style2 ul li:last-child {
    margin-right: 0
}

.blog-grid-text ul {
    margin: 0;
    padding: 0
}

.blog-grid-text ul li {
    display: inline-block;
    font-size: 14px;
    font-weight: 500;
    margin: 5px 10px 5px 0
}

.blog-grid-text ul li:last-child {
    margin-right: 0
}

.blog-grid-text ul li i {
    font-size: 14px;
    font-weight: 600;
    margin-right: 5px
}

.blog-grid-text p {
    font-weight: 400;
    padding: 0
}

.blog-list-left-heading:after,
.blog-title-box:after {
    content: '';
    height: 2px
}

.blog-grid-simple-content a:hover {
    color: #1d184a
}

.blog-grid-simple-content a:hover:after {
    color: #1d184a
}
.blog-grid-text {
    position: relative
}

.blog-grid-text>span {
    color: #292dc2;
    font-size: 13px;
    padding-right: 5px
}

.blog-grid-text h4 {
    line-height: normal;
    margin-bottom: 15px
}

.blog-grid-text .meta-style2 {
    border-top: 1px dashed #cee1f8 !important;
    padding-top: 15px
}

.blog-grid-text .meta-style2 ul li {
    margin-bottom: 0;
    font-weight: 500
}

.blog-grid-text .meta-style2 ul li:last-child {
    margin-right: 0
}

.blog-grid-text ul {
    margin: 0;
    padding: 0
}

.blog-grid-text ul li {
    display: inline-block;
    font-size: 14px;
    font-weight: 500;
    margin: 5px 10px 5px 0
}

.blog-grid-text ul li:last-child {
    margin-right: 0
}

.blog-grid-text ul li i {
    font-size: 14px;
    font-weight: 600;
    margin-right: 5px
}

.blog-grid-text p {
    font-weight: 400;
    padding: 0
}

a, a:active, a:focus {
    color: #575a7b;
    text-decoration: none;
    transition-timing-function: ease-in-out;
    -ms-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    -webkit-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    transition-duration: .2s;
    -ms-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -webkit-transition-duration: .2s;
    -o-transition-duration: .2s;
}

.pagination {
    border-radius: 0;
    padding: 0;
    margin: 0
}

.pagination ul {
    display: inline-block;
    *display: inline;
    *zoom: 1;
    margin: 0 auto;
    padding: 0
}

.pagination li {
    display: inline
}

.pagination a {
    float: left;
    padding: 0 18px;
    line-height: 40px;
    text-decoration: none;
    border: 1px solid #dbdbdb;
    border-left-width: 0;
    background: #fff
}

.pagination a:hover {
    background-color: #1d184a;
    color: #fff
}

.pagination .active a {
    background-color: #f7f7f7;
    color: #999;
    cursor: default
}

.pagination .disabled span {
    color: #999;
    background-color: transparent;
    cursor: default
}

.pagination .disabled a {
    color: #999;
    background-color: transparent;
    cursor: default
}

.pagination .disabled a:hover {
    color: #999;
    background-color: transparent;
    cursor: default
}

.pagination li:first-child a {
    border-left-width: 1px
}

.mt-6, .my-6 {
    margin-top: 3.5rem;
}
</style>
{{-- END --}}
 
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
                    <h3 class="h5 mb-3"><a href="/blog/show/{{ $item->id }}"> {{ $item->title }} </a></h3>
                    <p class="display-30"> {!! Illuminate\Support\Str::limit($item->body, 100) !!} </p>
                    <div class="meta meta-style2">
                        <ul>
                            <li><a href=""><i class="fas fa-calendar-alt"></i> <script>document.write(new Date().getFullYear())</script></a></li>
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