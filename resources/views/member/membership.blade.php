<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membership</title>

    <!-- CSS only -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

</head>

<body>
    @extends('layouts.admin')
    @section('content')
        <section class="section">
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Membership</h4>
                            <button class="btn btn-primary" id="btn-tambah " onclick="tambah()">Tambah Member</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($member as $member)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $member->nama_member }}</td>
                                        <td>{{ $member->alamat }}</td>
                                        <td>{{ $member->no_telephone }}</td>
                                        <td>{{ $member->jenis_kelamin }}</td>
                                        <td>
                                            <div class="badge badge-success">{{ $member->status }}</div>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-action mr-1" href="ubah/{{ $member->id }}" data-toggle="tooltip" title="Edit">Edit</a>
                                            <form action="hapus/{{ $member->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger mr-1" type="submit" data-toggle="tooltip"
                                                    title="Delete" onclick="return confirm('Are You Sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
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
        @endsection

        <!-- Modal -->
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
            function tambah() {
                $.get("{{ url('member.create') }}", {}, function(data, status) {
                    $("#exampleModalLabel").html('Membership');
                    $("#page").html(data);
                    $("#exampleModal").modal('show');
                });
            }
        </script>
</body>

</html>
