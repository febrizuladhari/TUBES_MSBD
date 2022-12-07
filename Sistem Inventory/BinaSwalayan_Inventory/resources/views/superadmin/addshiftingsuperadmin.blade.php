@extends('layout.layoutsuperadmin')

@section('title')
    <title>Add Shifting Item - Super Admin</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Add Shifting Item</h3>
            <hr class="my-4">

            <!-- List Itemms -->
            <div class="card">
                <h5 class="card-header">Add Shifting With Super Admin Authority</h5>
                <form class="container-fluid">
                    <div class="mb-3">
                        <label class="form-label" for="nama">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="nama" class="input-group-text"><i class="bx bx-package"></i></span>
                            <input type="text" class="form-control" id="nama" placeholder="Name" required/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="id" class="form-label">Origin Outlet</label>
                                    <select id="id" class="select2 form-select">
                                        <option selected>Choose Origin Outlet</option>
                                        <option value="1">Bina Karya Swalayan</option>
                                        <option value="2">Bina Marindal Swalayan</option>
                                    </select>
                            </div>
                            <div class="col-6">
                                <label for="id" class="form-label">Outlet Destination</label>
                                    <select id="id" class="select2 form-select">
                                        <option selected>Choose Outlet Destination</option>
                                        <option value="1">Bina Karya Swalayan</option>
                                        <option value="2">Bina Marindal Swalayan</option>
                                    </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Shift Item</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')

@endsection
