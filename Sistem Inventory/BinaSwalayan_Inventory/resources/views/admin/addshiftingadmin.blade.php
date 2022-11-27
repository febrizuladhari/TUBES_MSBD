@extends('layout.layoutadmin')

@section('title')
    <title>Add Shifting Items - Admin</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Add Shifting Items</h3>
            <hr class="my-4">

            <!-- List Itemms -->
            <div class="card">
                <h5 class="card-header">Add Shifting With Admin Authority</h5>
                <form class="container-fluid">
                    <div class="mb-3">
                        <label class="form-label" for="id">ID</label>
                        <div class="input-group input-group-merge">
                            <span id="id" class="input-group-text"><i class="bx bx-code"></i></span>
                            <input type="text" class="form-control" id="id" placeholder="ID" required/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="nama" class="input-group-text"><i class="bx bx-package"></i></span>
                            <input type="text" class="form-control" id="nama" placeholder="Name" required/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="kategori">Category</label>
                        <div class="input-group input-group-merge">
                            <span id="kategori" class="input-group-text"><i class="bx bx-category"></i></span>
                            <input type="text" id="kategori" class="form-control" placeholder="Category" required/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="originoutlet">Origin Outlet</label>
                                <div class="input-group input-group-merge">
                                    <span id="originoutlet" class="input-group-text"><i class="bx bx-store"></i></span>
                                    <input type="text" id="originoutlet" class="form-control" placeholder="Origin Outlet" required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="outletdestination">Outlet Destination</label>
                                <div class="input-group input-group-merge">
                                    <span id="outletdestination" class="input-group-text"><i class="bx bx-store"></i></span>
                                    <input type="text" id="outletdestination" class="form-control" placeholder="Outlet Destination" required/>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
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
