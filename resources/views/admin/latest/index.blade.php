<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <a href="/admin/latest/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah</a>
                    <tr>
                        <td>No</td>
                        <td>Gambar</td>
                        <td>Title</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($latest as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="/{{ $item->foto }}" width="200px" alt=""></td>
                        <td>
                            {{-- {{ $item->title }} --}}
                            <a href="/admin/latest/{{ $item->id }}"><b>{{ $item->title }}</b></a>
                        </td>
                        <td>
                            <div class="d-flex">
                            <a href="/admin/latest/{{ $item->id }}/edit" class="btn btn-success mx-2">Edit</a>

                            <form action="/admin/latest/{{ $item->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            </div>
                            {{-- <a href="#" class="btn btn-danger">Hapus</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>