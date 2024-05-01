<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <a href="/admin/user/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah</a>
                    <tr>
                        <td>No</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="/admin/user/{{ $item->id }}" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>