@extends('layouts.admin')
@section('content')
<section class="section">
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
                15 
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
                12 Users
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
                <h4>Employee</h4>
              </div>
              <div class="card-body">
                10
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-5">
          <div class="card">
            <div class="card-header">
              <h4>HTML5 Form Basic</h4>
            </div>
            <div class="card-body">
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
              <div class="row ">
                <div class="col-12 col-md-6 col-lg-5">
                  <div class="form-group">
                    <label>Waktu Selesai</label>
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="colcol-12 col-md-6 col-lg-5">
                  <div class="form-group">
                    <label>Total Berat</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
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
              <div class="row">
                <div class="col-form-label col-sm-6 pt-0">
                  <label>Status Member</label>
                </div>
                <div class="col-sm-9">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                    <label class="form-check-label" for="">
                      Member
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="">
                      Bukan Member
                    </label>
                  </div>
                </div>
              </div>
</br>
              <div class="form-group">
                <label>Diskon</label>
                <select class="form-control form-control-lg">
                  <option>0 %</option>
                  <option>10 %</option>
                  <option>15 %</option>
                </select>
              </div>
              <button class="btn btn-primary mr-1" type="submit">Submit</button>
            </div>
          </div>
      </div>
      <div class="col-lg-7 col-md-6 col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4>Latest Transaction</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-primary">View All</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>Weight</th>
                          <th>Users</th>
                          <th>Pay</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Introduction Laravel 5
                            <div class="table-links">
                              in <a href="#">Web Development</a>
                              <div class="bullet"></div>
                              <a href="#">View</a>
                            </div>
                          </td>
                          <td>
                            <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                          </td>
                          <td>
                          Rp. 200.000,-
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
  </section>
@endsection
