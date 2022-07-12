<form action="{{ url('updates/{member:id}') }}" method="POST">
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
</form>
