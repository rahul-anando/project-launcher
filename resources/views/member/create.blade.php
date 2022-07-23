<form action="add" method="POST">
    @csrf
    <div class="form-group">
        <label for="name" class="mt-2">Nama Member</label>
        <input type="text" name="nama_member" id="nama_member" class="form-control" placeholder="Nama Member">
        <label for="name" class="mt-2">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
        <label for="name" class="mt-2">No Telephone</label>
        <input type="text" name="no_telephone" id="no_telephone" class="form-control" placeholder="No Telephone">
        <label for="name" class="mt-2">Jenis Kelamin</label>
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
        <button class="btn btn-primary">Create</button>
    </div>
</form>
