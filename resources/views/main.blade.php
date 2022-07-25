@extends('layouts.admin')
@section('content')
<section class="section">
    <h4>@section('title') Dashboard @endsection</h4>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
              <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Transaction Day</h4>
              </div>
              <div class="card-body">
                {{ $total }}
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
              <i class="fas fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Member</h4>
              </div>
              <div class="card-body">
                {{ $members }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
              <i class="fas fa-briefcase"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Petugas</h4>
              </div>
              <div class="card-body">
                {{ $allpetugas }}
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-5">
          <div class="card">
            <div class="card-header">
              <h4>Buat Transaksi Baru</h4>
            </div>
        <form action="store" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Nama Customer</label>
                <input type="text" class="form-control" name="nama_cost" id="nama_cost" placeholder="Masukkan Nama Customer">
                @error('nama_cost')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Customer">
                @error('alamat')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror
              </div>
          {{--     <div class="form-group">
                <label>Nama Petugas</label>
                <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" placeholder="Masukkan Nama Petugas">
                @error('nama_petugas')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror
              </div> --}}
              <div class="form-group">
                <label>Nama Petugas</label>
                <select class="form-control" name="petugas_id" id="petugas_id">
                @foreach ($petugass as $item)
                    <option value="{{ $item->id}}">{{$item->nama_petugas}}</option>
                @endforeach
                </select>
              </div>
              <div class="row ">
                <div class="col-12 col-md-6 col-lg-5">
                  <div class="form-group">
                    <label>Waktu Selesai</label>
                    <input type="date" class="form-control" name="selesai" id="selesai">
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
                    <input type="number" class="form-control" name="total_berat" id="total_berat">
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
                    <input type="number" class="form-control" name="total_biaya" id="total_biaya">
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
                <select class="form-control form-control-lg" name="jenis_laundry" id="jenis_laundry">
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
                <select class="form-control form-control-lg" name="diskon_member" id="diskon_member">
                  <option>0 %</option>
                  <option>10 %</option>
                </select>
                @error('diskon_member')
                        <span class="text-danger small">
                            {{ $message }}
                        </span>
                @enderror
              </div>
              <button class="btn btn-primary mr-1" type="submit">Submit</button>
            </div>
        </form>
          </div>
      </div>
      <div class="col-lg-7 col-md-6 col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4>Latest Transaction</h4>
                  <div class="card-header-action">
                    <a href="{{route ('index')}}" class="btn btn-primary">View All</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>Total Berat</th>
                          <th>Nama Customer</th>
                          <th>Total Biaya</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($trans as $tran)
                        <tr>
                          <td>{{ $tran->total_berat }}Kg</td>
                          <td>
                            <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> {{ $tran->nama_cost }}</a>
                          </td>
                          <td>Rp{{ $tran->total_biaya }}</td>
                          <td>{{ $tran->status_pembayaran }}</td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
  </section>
@endsection
