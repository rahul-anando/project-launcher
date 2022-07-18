{{-- <form action="{{ url('updates/{member:id}') }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="name">Nama Member</label>
        <input type="text" name="nama_member" id="nama_member" class="form-control" placeholder="Nama Member">
        <label for="name">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
        <label for="name">No Telephone</label>
        <input type="text" name="no_telephone" id="no_telephone" class="form-control" placeholder="No Telephone">
        <label for="name">Jenis Kelamin</label>
        <select class="form-control form-control-lg" name="jenis_kelamin" id="jenis_kelamin">
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>
        <label for="name">Status</label>
        <select class="form-control form-control-lg" name="status" id="status">
            <option>Active</option>
            <option>Nonactive</option>
        </select>
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-primary" id="add_member_btn">Update</button>
    </div>
</form> --}}
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
                   <h2>Form Edit Member</h2>
               </div>
               <form action="/updated/{{ $member->id }}" method="POST">
                   @csrf
                   @method('put')
                   <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nama Member</label>
                        <input type="text" name="nama_member" id="nama_member" class="form-control" placeholder="Nama Member" value="{{ $member->nama_member }}">
                        <label for="name">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" value="{{ $member->alamat }}">
                        <label for="name">No Telepon</label>
                        <input type="text" name="no_telephone" id="no_telephone" class="form-control" placeholder="No Telephone" value="{{ $member->no_telephone }}">
                        <label for="name">Jenis Kelamin</label>
                        <select class="form-control form-control-lg" name="jenis_kelamin" id="jenis_kelamin">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
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

