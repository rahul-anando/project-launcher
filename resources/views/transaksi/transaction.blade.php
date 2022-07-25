@extends('layouts.admin')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    @section('title') Transaksi @endsection
                    <h4>Daftar Transaksi</h4>
                    <a href="/home" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                        <tr>
                            <th>Nama Customer</th>
                            <th>Alamat</th>
                            <th>Nama Petugas</th>
                            <th>Waktu Selesai</th>
                            <th>Jenis Laundry</th>
                            <th>Total Berat</th>
                            <th>Total Biaya</th>
                            <th>Status Pembayaran</th>
                            <th>Diskon Member</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($transaksis as $transaksi)
                        <tr>
                            <td>{{ $transaksi->nama_cost }}</td>
                            <td>{{ $transaksi->alamat }}</td>
                            <td>{{ $transaksi->nama_petugas }}</td>
                            <td>{{ $transaksi->selesai }}</td>
                            <td>{{ $transaksi->jenis_laundry }}</td>
                            <td>{{ $transaksi->total_berat }}Kg</td>
                            <td>Rp{{ $transaksi->total_biaya }}</td>

                            @if($transaksi->status_pembayaran == "Lunas")
                            <td><div class="badge badge-success">Lunas</div></td>
                            @elseif($transaksi->status_pembayaran == "Belum Lunas")
                            <td><div class="badge badge-danger">Belum Lunas</div></td>
                            @endif

                            <td>{{ $transaksi->diskon_member }}</td>
                            <td>
                                <a class="btn btn-primary btn-action mr-1" href="edit/{{ $transaksi->id }}" data-toggle="tooltip" title="Edit">Edit</a>
                                {{-- <form action="delete/{{ $transaksi->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-danger btn-action" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                </form> --}}
                                <form action="delete/{{ $transaksi->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin mau dihapus qaqa?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        {{-- <tr>
                            <td>Irwansyah Saputra</td>
                            <td>2017-01-09</td>
                            <td>2017-01-09</td>
                            <td>2017-01-09</td>
                            <td>2017-01-09</td>
                            <td>2017-01-09</td>
                            <td><div class="badge badge-success">Active</div></td>
                            <td>2017-01-09</td>
                            <td>
                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr> --}}
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
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
