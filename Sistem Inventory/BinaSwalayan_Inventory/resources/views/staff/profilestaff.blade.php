@extends('layout.layoutadmin')

@section('title')
    <title>Profile - Staff</title>
@endsection

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Jhon Doe - Outlet 1</h5>
        <!-- Account -->
        <div class="card-body">
          <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img
              src="{{asset('img/avatars/1.png')}}"
              alt="user-avatar"
              class="d-block rounded"
              height="100"
              width="100"
              id="uploadedAvatar"
            />
            <div class="button-wrapper">
              <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Upload new photo</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" id="upload" class="account-file-input" hidden  accept="image/png, image/jpeg"
                />
              </label>
              <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
              </button>

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
                <label for="id" class="form-label">Outlet</label>
                <input class="form-control" type="text" id="id" name="id" value="1" autofocus disabled/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="firstName" class="form-label">Name</label>
                <input
                  class="form-control"
                  type="text"
                  id="firstName"
                  name="firstName"
                  value="John Doe"
                  autofocus
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="lastName" class="form-label">Username</label>
                <input class="form-control" type="text" name="lastName" id="lastName" value="jhondoe" />
              </div>
              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Password</label>
                <input
                  class="form-control"
                  type="password"
                  id="email"
                  name="email"
                  value="johndoe"
                  placeholder="john.doe@example.com"
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="organization" class="form-label">Gender</label>
                <div class="row">
                  <div class="col">
                <div class="form-check mt-3">
                  <input
                    name="default-radio-1"
                    class="form-check-input"
                    type="radio"
                    value=""
                    id="defaultRadio1"
                  />
                  <label class="form-check-label" for="defaultRadio1"> Male </label>
                </div>
                  </div>
                  <div class="col">
                <div class="form-check mt-3">
                  <input
                    name="default-radio-1"
                    class="form-check-input"
                    type="radio"
                    value=""
                    id="defaultRadio1"
                  />
                  <label class="form-check-label" for="defaultRadio1"> Female </label>
                </div>
                  </div>
                </div>
              </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="phoneNumber">Phone Number</label>
                <div class="input-group input-group-merge">
                  {{-- <span class="input-group-text">US (+1)</span> --}}
                  <input
                    type="text"
                    id="phoneNumber"
                    name="phoneNumber"
                    class="form-control"
                    placeholder="202 555 0111"
                  />
                </div>
              </div>  
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
              
              
              

        <!-- /Account -->

@endsection

@section('script')

@endsection