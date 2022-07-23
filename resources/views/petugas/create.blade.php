<form action="storea" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nama Petugas</label>
        <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Nama Petugas">
        <label for="name" class="mt-2">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
        <label for="name" class="mt-2">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <label for="name" class="mt-2">No Telepon</label>
        <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="No Telepon">
        <label for="name" class="mt-2">Foto</label>
        <input type="file" name="foto" id="foto" class="form-control" placeholder="Foto">
        <label for="name" class="mt-2">Status</label>
        <select class="form-control form-control-lg" name="status" id="status">
            <option>Active</option>
            <option>Nonactive</option>
        </select>
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-primary">Create</button>
    </div>
</form>
