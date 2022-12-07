@extends('layout.layoutstaff')

@section('title')
    <title>Profile - Staff</title>
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
                            <img src="{{ asset('img/avatars/3.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="avatar"/>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="nama" class="form-label">{{ __('Name') }}</label>
                                    <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" value="{{ $user->nama }}" autocomplete="nama" required/>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input class="form-control" type="text" value="{{ $user->username }}" disabled/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="level" class="form-label">Level</label>
                                    <input type="text" class="form-control" value="{{ $user->level }}" disabled/>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="alamat" class="form-label">{{ __('Address') }}</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="alamat" name="alamat" value="{{ $user->alamat }}" required/>
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="no_telp" class="form-label">{{ __('Phone Number') }}</label>
                                    <input type="number" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ $user->no_telp }}" required/>
                                    @error('no_telp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="jenis_kelamin" class="form-label">Gender</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="select2 form-select" required>
                                        <option value="P" {{ $user->jenis_kelamin == 'P' ? 'selected' : '' }}>Male</option>
                                        <option value="W" {{ $user->jenis_kelamin == 'W' ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save Profile</button>
                                <a href="{{ route('homestaff') }}"><button type="button" class="btn btn-outline-secondary">Back</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card mb-4">
                    <h5 class="card-header">Update Password</h5>

                    <div class="card-body">
                        <a href="{{ route('changepassword.edit') }}"><button class="btn btn-primary d-grid w-100 btn-lg" type="button">Update My Password</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>




        <!-- /Account -->

@endsection

@section('script')

@endsection
