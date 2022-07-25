<form action="storea" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Nama Petugas</label>
        <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Nama Petugas">
        @error('nama_petugas')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
    </div>
        <label for="" class="mt-2">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
        @error('username')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
        <label for="" class="mt-2">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        @error('password')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
        <label for="" class="mt-2">No Telepon</label>
        <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="No Telepon">
        @error('no_telepon')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
        <label for="" class="mt-2">Foto</label>
        <input type="file" name="foto" id="foto" class="form-control" placeholder="Foto">
        @error('foto')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
        <label for="" class="mt-2">Status</label>
        <select class="form-control form-control-lg" name="status" id="status">
            <option>Active</option>
            <option>Nonactive</option>
        </select>
        @error('status')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-primary">Create</button>
    </div>
</form>
