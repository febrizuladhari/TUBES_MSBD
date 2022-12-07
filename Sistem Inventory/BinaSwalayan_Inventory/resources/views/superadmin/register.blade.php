@extends('layout.layoutsuperadmin')

@section('title')
    <title>Register - Super Admin</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Register</h3>
            <hr class="my-4">

            <!-- List Itemms -->
            <div class="card">
                <h4 class="card-header">Create a new account</h4>
                <form method="POST" action="{{url('store')}}" class="container-fluid">
                    @csrf
                    @error('Success')
                        <h4 class="mytitle" style="color: rgb(60, 255, 0)">{{ $message }}</h4>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label" for="nama">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="nama" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Name" required/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="username">Username</label>
                        <div class="input-group input-group-merge">
                            <span id="username" class="input-group-text"><i class="bx bxs-user-detail"></i></span>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-merge">
                            <span id="password" class="input-group-text"><i class="bx bx-spreadsheet"></i></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required><span class="showpass" onclick="toggle()"><p class="random_password"></p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="level">Level</label>
                            <select id="level" name="level" class="select2 form-select">
                                <option selected>Select Level</option>
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jenis_kelamin">Gender</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="select2 form-select">
                            <option selected>Select Gender</option>
                            <option value="P">Male</option>
                            <option value="W">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="outlet">Address</label>
                        <div class="input-group input-group-merge">
                            <span id="alamat" class="input-group-text"><i class="bx bx-store"></i></span>
                            <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Address" required/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="idoutlet">Outlet</label>
                            <select id="id_outlet" name="id_outlet" class="select2 form-select">
                            <option selected>Select Outlet</option>
                            @foreach($outlets as $outlet)
                                <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="mb-3 col">
                        <label class="form-label" for="phone">Phone Number</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">ID (+62)</span>
                            <input type="number" id="no_telp" name="no_telp" class="form-control" placeholder="0812 3344 5588" required/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('accounts_show') }}"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button></a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')

@endsection
