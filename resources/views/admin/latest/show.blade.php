<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <a href="/admin/latest" class="btn btn-primary my-2 px-4"><i class="fas fa-arrow-left"></i> Kembali</a>
                <h4><b> {{ $latest->title }} </b></h4>
                <p>date created {{ $latest->created_at }} </p>
                <img src="/{{ $latest->foto }}" width="100%" alt="">
                <div class="py-2"></div>
                <p>{!! $latest->desc !!} </p>
            </div>
        </div>
    </div>
</div>