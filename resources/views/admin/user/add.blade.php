<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="/admin/user" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Username" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="********">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Konfirmasi Password</label>
                        <input type="password" name="re_password" class="form-control @error('re_password') is-invalid @enderror" placeholder="********">
                        @error('re_password')
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