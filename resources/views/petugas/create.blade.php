<form action="storea" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nama Petugas</label>
        <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Nama Petugas">
        <label for="name">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
        <label for="name">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <label for="name">No Telepon</label>
        <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="No Telepon">
        <label for="name">Status</label>
        <select class="form-control form-control-lg" name="status" id="status">
            <option>Active</option>
            <option>Nonactive</option>
        </select>
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-primary">Create</button>
    </div>
</form>
