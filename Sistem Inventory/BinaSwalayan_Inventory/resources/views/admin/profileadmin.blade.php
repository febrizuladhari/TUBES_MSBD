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
                            <img src="{{ asset('img/avatars/1.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="avatar"/>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="id" class="form-label">ID</label>
                                    <input class="form-control" type="text" id="id" name="id" value="123" autofocus disabled/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="nama" class="form-label">Name</label>
                                    <input class="form-control" type="text" name="nama" id="nama" value="" placeholder="Franky Budiman" required/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input class="form-control" type="text" name="username" id="username" placeholder="Franky Budiman" disabled/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="*******" required/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="level" class="form-label">Level</label>
                                    <input type="text" class="form-control" id="level" name="level" placeholder="Admin" disabled/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="alamat" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="Medan" required/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="no_Telp" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="no_Telp" name="no_Telp" value="08123468949" required/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="jenis_Kelamin" class="form-label">Gender</label>
                                    <select id="jenis_Kelamin" class="select2 form-select">
                                        <option selected>Change Gender ?</option>
                                        <option value="P">Male</option>
                                        <option value="W">Female</option>
                                    </select>
                                </div>
                            </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save Profile</button>
                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
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
