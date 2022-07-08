<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Halaman Edit &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-8 ">
            <div class="card">
                <div class="card-header">
                    <h2>Form Edit Transaksi</h2>
                </div>
            <form action="/update/{{$transaksi->id}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Customer</label>
                        <input type="text" class="form-control" name="nama_cost" id="nama_cost" placeholder="Masukkan Nama Customer" value="{{ $transaksi->nama_cost }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Customer" value="{{ $transaksi->alamat }}">
                    </div>
                     <div class="form-group">
                        <label>Nama Petugas</label>
                        <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" placeholder="Masukkan Nama Petugas" value="{{ $transaksi->nama_petugas }}">
                    </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="form-group">
                            <label>Waktu Selesai</label>
                            <input type="date" class="form-control" name="selesai" id="selesai" value="{{date("Y-m-d\TH:i", strtotime($transaksi->datetime))}}">
                        </div>
                    </div>
                <div class="colcol-12 col-md-6 col-lg-5">
                    <div class="form-group">
                        <label>Total Berat</label>
                        <input type="text" class="form-control" name="total_berat" id="total_berat" value="{{ $transaksi->total_berat }}">
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jenis Laundry</label>
                    <select class="form-control form-control-lg" name="jenis_laundry" id="jenis_laundry" value="{{ $transaksi->jenis_laundry }}">
                        <option>Cepat</option>
                        <option>Cepat + Setrika</option>
                        <option>Reguler</option>
                        <option>Reguler + Setrika</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-form-label col-sm-6 pt-0">
                    <label>Status Pembayaran</label>
                </div>
                <div class="col-sm-9">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="Lunas" checked="">
                      <label class="form-check-label" for="">
                        Lunas
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="Belum Lunas">
                      <label class="form-check-label" for="">
                        Belum Lunas
                      </label>
                    </div>
                  </div>
                </div>
</br>
            <div class="form-group">
              <label>Diskon</label>
              <select class="form-control form-control-lg" name="diskon_member" id="diskon_member" value="{{ $transaksi->diskon_member }}">
                  <option>0 %</option>
                  <option>10 %</option>
                  <option>15 %</option>
                </select>
            </div>
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
        </form>
        </div>
    </div>
</div>

