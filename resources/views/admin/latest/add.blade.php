<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset ($latest))
                <form action="/admin/latest/{{$latest->id}}" method="POST" enctype="multipart/form-data"> 
                    @method('PUT')
                @else
                <form action="/admin/latest" method="POST" enctype="multipart/form-data">
                    
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Judul" value="{{ isset($latest) ? $latest->title :  old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="desc" class="form-control" id="" cols="30" rows="10"> {{ isset($latest) ? $latest->desc : '' }} </textarea>
                        @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" placeholder="********">

                        @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        @if (isset($latest))
                            <img src="/{{ $latest->gambar }}" width="100%" class="mt-4" alt="">
                        @endif
                    </div>


                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>