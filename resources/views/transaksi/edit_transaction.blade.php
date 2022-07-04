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
