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
                        @error('nama_cost')
                            <span class="text-danger small">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Customer" value="{{ $transaksi->alamat }}">
                        @error('alamat')
                            <span class="text-danger small">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama Petugas</label>
                        <select class="form-control" name="petugas_id" id="petugas_id">
                        @foreach ($petugass as $item)
                            <option value="{{ $item->id}}" {{ old('petugas_id', $transaksi->petugas_id) == $item->id ? 'selected' : null }}>{{$item->nama_petugas}}</option>
                        @endforeach
                        </select>
                      </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="form-group">
                            <label>Waktu Selesai</label>
                            <input type="date" class="form-control" name="selesai" id="selesai" value="{{$transaksi->selesai}}">
                            @error('selesai')
                                <span class="text-danger small">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                <div class="colcol-12 col-md-6 col-lg-5">
                    <div class="form-group">
                        <label>Total Berat</label>
                        <input type="number" class="form-control" name="total_berat" id="total_berat" value="{{ $transaksi->total_berat }}">
                        @error('total_berat')
                            <span class="text-danger small">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>
                <div class="colcol-12 col-md-6 col-lg-5">
                    <div class="form-group">
                        <label>Total Biaya</label>
                        <input type="number" class="form-control" name="total_biaya" id="total_biaya" value="{{ $transaksi->total_biaya }}">
                        @error('total_biaya')
                            <span class="text-danger small">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jenis Laundry</label>
                    <select class="form-control form-control-lg" name="jenis_laundry" id="jenis_laundry" >
                        <option value="Cepat" {{ $transaksi->jenis_laundry == 'Cepat' ? 'selected' : '' }}>Cepat</option>
                        <option value="Cepat + Setrika" {{ $transaksi->jenis_laundry == 'Cepat + Setrika' ? 'selected' : '' }}>Cepat + Setrika</option>
                        <option value="Reguler" {{ $transaksi->jenis_laundry == 'Reguler' ? 'selected' : '' }}>Reguler</option>
                        <option value="Reguler + Setrika" {{ $transaksi->jenis_laundry == 'Reguler + Setrika' ? 'selected' : '' }}>Reguler + Setrika</option>
                    </select>
                </div>
      {{--           <div class="row">
                    <div class="col-form-label col-sm-6 pt-0">
                    <label>Status Pembayaran</label>
                </div>
                 <div class="col-sm-9">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="Lunas" {{ $transaksi->jenis_laundry == 'Lunas'? 'checked' : ''}} >
                        Lunas
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="Belum Lunas" {{ $transaksi->jenis_laundry == 'Belum Lunas'? 'checked' : ''}}>
                        Belum Lunas
                    </div>
                  </div>
                </div> --}}

                <div class="form-group">
                    <label for="status_pembayaran">Status Pembayaran</label> <br>
                    <label for="status_pembayaran">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_pembayaran" value="Lunas" id="status_pembayaran" {{$transaksi->status_pembayaran == 'Lunas'? 'checked' : ''}} >Lunas
                        <br>
                        <input class="form-check-input" type="radio" name="status_pembayaran" value="Belum Lunas" id="status_pembayaran" {{$transaksi->status_pembayaran == 'Belum Lunas'? 'checked' : ''}} >Belum Lunas
                    </label>
                </div>
                </div>

            <div class="form-group">
              <label>Diskon</label>
              <select class="form-control form-control-lg" name="diskon_member" id="diskon_member">
                  <option value="0 %" {{ $transaksi->diskon_member == '0 %' ? 'selected' : '' }}>0 %</option>
                  <option value="10 %" {{ $transaksi->diskon_member == '10 %' ? 'selected' : '' }}>10 %</option>
                  <option value="15 %" {{ $transaksi->diskon_member == '15 %' ? 'selected' : '' }}>15 %</option>
                </select>
            </div>
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
        </form>
        </div>
    </div>
</div>

