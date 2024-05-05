<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset ($latest))
                <form action="/admin/latest/{{$latest->id}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @else
                <form action="/admin/latest/" method="POST" enctype="multipart/form-data">
                    
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="title" value="{{ isset($latest) ? $latest->title :  old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" placeholder="********">

                        @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        @if (isset($latest))
                            <img src="/{{ $latest->foto }}" width="100%" class="mt-4" alt="">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Body</label>
                        <textarea type="text" id="summernote" name="body" class="form-control @error('body') is-invalid @enderror" placeholder="Body">{{ isset($latest) ? $latest->body : old('body') }}</textarea>
                        @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                   
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>