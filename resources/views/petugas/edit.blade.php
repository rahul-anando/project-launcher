   {{--  --}}
   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
       <title>Halaman Edit &mdash; Stisla</title>

       <!-- General CSS Files -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
           integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
           integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
                   <h2>Form Edit Petugas</h2>
               </div>
               <form action="/updates/{{ $petugas->id }}" method="POST">
                   @csrf
                   @method('put')
                   <div class="card-body">
                       <div class="form-group">
                           <label for="name">Nama Petugas</label>
                           <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Nama Petugas"
                               value="{{ $petugas->nama_petugas }}">
                           <label for="name">Username</label>
                           <input type="text" name="username" id="username" class="form-control"
                               placeholder="Username" value="{{ $petugas->username }}">
                           <label for="name">Password</label>
                           <input type="password" name="password" id="password" class="form-control"
                               placeholder="Password" value="{{ $petugas->password }}">
                           <label for="name">No Telepon</label>
                           <input type="text" name="no_telepon" id="no_telepon" class="form-control"
                               placeholder="No Telepon" value="{{ $petugas->no_telepon }}">
                           <label for="name">Status</label>
                           <select class="form-control form-control-lg" name="status" id="status">
                               <option>Active</option>
                               <option>Nonactive</option>
                           </select>
                       </div>
                   </div>
                   <button class="btn btn-primary mr-1" type="submit">Submit</button>
               </form>
           </div>
       </div>
   </div>
