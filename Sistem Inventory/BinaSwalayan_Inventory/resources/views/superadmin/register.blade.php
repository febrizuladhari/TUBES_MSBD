@extends('layout.layoutadmin')

@section('title')
    <title>Registrasi - Super Admin</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Registrasi</h3>
            <hr class="my-4">

            <!-- List Itemms -->
            <div class="card">
                <h5 class="card-header">Registrasi yuk</h5>
                <form class="container-fluid">
                    <div class="mb-3">
                        <label class="form-label" for="nama">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="nama" class="input-group-text"><i class="bx bx-package"></i></span>
                            <input type="text" class="form-control" id="nama" placeholder="Name" required/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="username">Username</label>
                        <div class="input-group input-group-merge">
                            <span id="username" class="input-group-text"><i class="bx bx-category"></i></span>
                            <input type="text" id="username" class="form-control" placeholder="Username" required/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-merge">
                            <span id="password" class="input-group-text"><i class="bx bx-spreadsheet"></i></span>
                            <input type="text" id="password" class="form-control" placeholder="Password" required><span class="showpass" onclick="toggle()"><p class="random_password"></p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="level">Level</label>
                          <select id="level" class="select2 form-select">
                            <option>Pilih Level</option>
                              <option value="admin">Admin</option>
                              <option value="staff">Staff</option>
                          </select>
                          </div>
                    <div class="mb-3">
                      <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                        <select id="level" class="select2 form-select">
                          <option>Pilih Jenis Kelamin</option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                        </div>
                    <div class="mb-3">
                        <label class="form-label" for="outlet">Alamat</label>
                        <div class="input-group input-group-merge">
                            <span id="alamat" class="input-group-text"><i class="bx bx-store"></i></span>
                            <input type="text" id="alamat" class="form-control" placeholder="Alamat" required/>
                        </div>
                    </div>
                    <div class="mb-3 col">
                      <label class="form-label" for="phone">Phone Number</label>
                      <div class="input-group input-group-merge">
                          <span class="input-group-text">ID (+62)</span>
                          <input type="text" id="phone" name="phone" class="form-control" placeholder="0812 3344 5588" required/>
                      </div>
                      </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
    </div>

        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')

@endsection
