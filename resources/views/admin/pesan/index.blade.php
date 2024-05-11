<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td width="100px">#</td>
                        <td width="250px">Name</td>
                        <td>Message</td>
                        <td>Action</td>
                    </tr>

                    @foreach ($pesan as $item)
                        
                    <tr style="{{ $item->is_read == 1 ? 'background-color: #f0f0f0' : '' }}">
                        <td> {{ $loop->iteration }} </td>
                        <td>
                            <a href="/admin/pesan/{{ $item->id }}"><b> {{ $item->name }} </b></a>
                        </td>
                        <td>{!! Illuminate\Support\Str::limit($item->desc, 100) !!}</td>
                        <td>
                            <form action="/admin/pesan/{{ $item->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" id="delete"><i class="fas fa-trash"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Sweet Alert -->
{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
{{-- Jquery --}}
{{-- <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

<script>
    swal("Hello world!");
</script> --}}