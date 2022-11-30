@extends('layout.layoutstaff')

@section('title')
    <title>Add Damaged - Staff</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Add Damaged Items</h3>
            <hr class="my-4">

            <!-- List Itemms -->
            <div class="card">
                <h5 class="card-header">Add Damaged Items With Staff Authority</h5>
                <form class="container-fluid">
                    <div class="mb-3">
                        <label class="form-label" for="id">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="nama" class="input-group-text"><i class="bx bx-package"></i></span>
                            <input type="text" class="form-control" id="nama" placeholder="Name"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Category</label>
                        <select class="form-select" id="kategori">
                            <option selected>Open this to select category</option>
                            <option value="elektronik">Elektronik</option>
                            <option value="perkakas">Perkakas</option>
                            <option value="kebersihan">Kebersihan</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Send Report</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')

@endsection
