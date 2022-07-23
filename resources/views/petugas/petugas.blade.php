@extends('layouts.admin')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Petugas</h4>
                        <button class="btn btn-primary" onclick="baru()">Tambah Data</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>No Telepon</th>
                                    <th>Foto</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    @php $no = 1; @endphp
                                    @foreach ($petugas as $petugas)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $petugas->nama_petugas }}</td>
                                    <td>{{ $petugas->no_telepon }}</td>
                                    <td><img src="{{ asset('foto/'. $petugas->foto) }}" alt="" style="width: 60px"></td>
                                    <td>
                                        <div class="badge badge-success">{{ $petugas->status }}</div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" href="edits/{{ $petugas->id }}" data-toggle="tooltip" title="Edit">Edit</a>
                                        <form action="apus/{{ $petugas->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger mr-1" type="submit" data-toggle="tooltip"
                                                title="Delete" onclick="return confirm('Are You Sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i
                                            class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="page">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function baru() {
        $.get("{{ url('petugas.create') }}", {}, function(data, status) {
            $("#exampleModalLabel").html('Tambah Data Petugas Baru');
            $("#page").html(data);
            $("#exampleModal").modal('show');
        });
    }
</script>
