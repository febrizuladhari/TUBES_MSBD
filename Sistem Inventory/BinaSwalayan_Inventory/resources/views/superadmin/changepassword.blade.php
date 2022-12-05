@extends('layout.layoutsuperadmin')

@section('title')
    <title>Change Password - Super Admin</title>
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
                    <h5 class="card-header">Update My Password</h5>
                    <!-- Password -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form method="POST" action="{{ route('changepassword.update') }}">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="mb-3">
                                    <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                                    <input class="form-control @error('current_password') is-invalid @enderror" type="password" name="current_password" id="current_password" required/>
                                    @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="new_password" class="form-label">{{ __('New Password') }}</label>
                                    <input class="form-control @error('new_password') is-invalid @enderror" type="password" name="new_password" id="new_password" autocomplete="new_password" required/>
                                    @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="new_confirm_password" class="form-label">{{ __('Confirm New Password') }}</label>
                                    <input type="password" class="form-control" id="new_confirm_password" name="new_confirm_password" autocomplete="new_confirm_password" required/>
                                    @error('new_confirm_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Update Password</button>
                                <a href="{{ route('profile.edit') }}"><button type="button" class="btn btn-outline-secondary">Back</button></a>
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
