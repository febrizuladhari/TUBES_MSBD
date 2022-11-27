@extends('layout.layoutadmin')

@section('title')
    <title>Profile - Admin</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ asset('img/avatars/1.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg"/>
                                </label>

                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="id" class="form-label">ID</label>
                                    <input class="form-control" type="text" id="id" name="id" value="123" autofocus disabled/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Franky Budiman" required/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="*******" required/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="alamat" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" required/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="level" class="form-label">Level</label>
                                    <select id="level" class="select2 form-select">
                                        <option value="">Change Level ?</option>
                                        <option value="superadmin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                    </div>
                                <div class="mb-3 col-md-6">
                                <label class="form-label" for="phone">Phone Number</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">ID (+62)</span>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="0812 3344 5588" required/>
                                </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                <label for="gender" class="form-label">Gender</label>
                                <select id="gender" class="select2 form-select">
                                    <option value="">Change Gender ?</option>
                                    <option value="p">Male</option>
                                    <option value="w">Female</option>
                                </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                <label for="outlet" class="form-label">Outlet</label>
                                <select id="outlet" class="select2 form-select">
                                    <option value="">Change Your Outlet ?</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                </div>
                            </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
