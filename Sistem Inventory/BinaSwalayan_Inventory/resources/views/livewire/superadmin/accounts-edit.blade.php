<div>

    <div class="card">
        <h4 class="card-header">Update this user</h4>
        <form wire:submit.prevent="update" class="container-fluid">
            <div class="mb-3">
                <input type="hidden" wire:model="id_user">
            </div>
            <div class="mb-3">
                <label class="form-label" for="nama">Name</label>
                <div class="input-group input-group-merge">
                    <span id="nama" class="input-group-text"><i class="bx bx-user"></i></span>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ $user->nama }}" wire:model="nama" placeholder="Name" required/>
                    @error('nama')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="level">Level</label>
                    <select id="level" name="level" class="select2 form-select">
                        <option value="admin" {{ $user->level == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="staff" {{ $user->level == 'staff' ? 'selected' : '' }}>Staff</option>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="jenis_kelamin">Gender</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="select2 form-select">
                    <option value="P" {{ $user->jenis_kelamin == 'P' ? 'selected' : '' }}>Male</option>
                    <option value="W" {{ $user->jenis_kelamin == 'W' ? 'selected' : '' }}>Female</option>
                </select>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="outlet">Address</label>
                <div class="input-group input-group-merge">
                    <span id="alamat" class="input-group-text"><i class="bx bx-store"></i></span>
                    <input type="text" wire:model="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $user->alamat }}" placeholder="Address" required/>
                    @error('alamat')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="idoutlet">Outlet</label>
                    <select id="id_outlet" name="id_outlet" class="select2 form-select">
                    <option>Select Outlet</option>
                        <option value="1">Bina Karya Swalayan</option>
                        <option value="2">Bina Marindal Swalayan</option>
                    </select>
            </div>
            <div class="mb-3 col">
                <label class="form-label" for="phone">Phone Number</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">ID (+62)</span>
                    <input type="text" wire:model="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ $user->no_telp }}" placeholder="0812 3344 5588" required/>
                    @error('no_telp')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('accounts_show') }}"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button></a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>


    <!-- Content wrapper -->
</div>
