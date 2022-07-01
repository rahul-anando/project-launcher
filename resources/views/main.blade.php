@extends('layouts.admin')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        {{-- <h2 class="text-bold-700 mb-0">{{$masuk}}</h2> --}}
                        <p>Pengguna</p>
                    </div>
                    <div class="avatar bg-rgba-success p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-box text-success font-medium-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        {{-- <h2 class="text-bold-700 mb-0">{{$selesai}}</h2> --}}
                        <p>Membership</p>
                    </div>
                    <div class="avatar bg-rgba-danger p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-check text-danger font-medium-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        {{-- <h2 class="text-bold-700 mb-0">{{$diambil}}</h2> --}}
                        <p>Transaksi</p>
                    </div>
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-check-square text-warning font-medium-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-header">
      <h1>Blank Page</h1>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>HTML5 Form Basic</h4>
            </div>
            <div class="card-body">
              <div class="alert alert-info">
                <b>Note!</b> Not all browsers support HTML5 type input.
              </div>
              <div class="form-group">
                <label>Nama Customer</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama Petugas</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Waktu Selesai</label>
                <input type="date" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Laundry</label>
                <select class="form-control form-control-lg">
                  <option>Cepat</option>
                  <option>Cepat + Setrika</option>
                  <option>Reguler</option>
                  <option>Reguler + Setrika</option>
                </select>
              </div>
              <div class="form-group">
                <label>Total Berat</label>
                <input type="text" class="form-control">
              </div>
              <div class="row">
                <div class="col-form-label col-sm-3 pt-0">Status Pembayaran</div>
                <div class="col-sm-9">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                    <label class="form-check-label" for="">
                    Lunas
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="">
                      Belum Lunas
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Diskon</label>
                <select class="form-control form-control-lg">
                  <option>0 %</option>
                  <option>10 %</option>
                  <option>15 %</option>
                </select>
              </div>
              <button class="btn btn-primary mr-1" type="submit">Submit</button>

    <div class="section-body">
    </div>
  </section>
@endsection
