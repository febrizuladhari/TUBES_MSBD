@extends('layout.layoutadmin')

@section('title')
    <title>Add Items - Admin</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Add Items</h3>
            <hr class="my-4">

            <!-- List Itemms -->
            <div class="card">
                <h5 class="card-header">Add Items With Admin Authority</h5>
                <form class="container-fluid">
                    <div class="mb-3">
                        <label class="form-label" for="nama">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="nama" class="input-group-text"><i class="bx bx-package"></i></span>
                            <input type="text" class="form-control" id="nama" placeholder="Name" aria-label="John Doe"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="kategori">Category</label>
                        <div class="input-group input-group-merge">
                            <span id="kategori" class="input-group-text"><i class="bx bx-category"></i></span>
                            <input type="text" id="kategori" class="form-control" placeholder="Category"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="rak">Rack</label>
                        <div class="input-group input-group-merge">
                            <span id="rak" class="input-group-text"><i class="bx bx-spreadsheet"></i></span>
                            <input type="number" id="rak" class="form-control" placeholder="Rack"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="gudang">Warehouse</label>
                        <div class="input-group input-group-merge">
                            <span id="gudang" class="input-group-text"><i class="bx bx-buildings"></i></span>
                            <input type="text" id="gudang" class="form-control" placeholder="Warehouse"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="outlet">Outlet</label>
                        <div class="input-group input-group-merge">
                            <span id="outlet" class="input-group-text"><i class="bx bx-store"></i></span>
                            <input type="text" id="outlet" class="form-control" placeholder="Outlet"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="suppliers">Suppliers</label>
                        <div class="input-group input-group-merge">
                            <span id="suppliers" class="input-group-text"><i class="bx bx-group"></i></span>
                            <input type="text" id="suppliers" class="form-control" placeholder="Suppliers"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status">
                            <option selected>Open to change status</option>
                            <option value="good">Good</option>
                            <option value="borrow">Borrow</option>
                            <option value="damaged">Damaged</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')

@endsection
