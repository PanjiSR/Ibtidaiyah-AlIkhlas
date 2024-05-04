<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset ($category))
                <form action="/admin/posts/category/{{$category->id}}" method="POST"> 
                    @method('PUT')
                @else
                <form action="/admin/posts/category" method="POST">
                    
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Kategori" value="{{ isset($category) ? $category->name :  old('name') }}">
                        @error('name')
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