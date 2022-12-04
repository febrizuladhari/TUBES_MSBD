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
            <h3 class="fw-bold py-3">Add Item</h3>
            <hr class="my-4">

            <div class="card my-4">
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">Add Category with Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addkategori.edit') }}"><button class="btn btn-warning d-grid w-100" type="button">Add Category</button></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="card-header">Add Supplier with Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addsupplier.edit') }}"><button class="btn btn-warning d-grid w-100" type="button">Add Supplier</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Add Item -->
            <div class="card">
                <h5 class="card-header">Add Items With Admin Authority</h5>
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
                        <label for="id_kategori" class="form-label">Category</label>
                            <select id="id_kategori" class="select2 form-select">
                                <option selected>Choose Category</option>
                                <option value="1">Elekronik</option>
                                <option value="2">Perkakas</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_rak" class="form-label">Rack</label>
                            <select id="id_rak" class="select2 form-select">
                                <option selected>Choose Rack</option>
                                <option value="1">Elekronik</option>
                                <option value="2">Perkakas</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_supplier" class="form-label">Category</label>
                            <select id="id_supplier" class="select2 form-select">
                                <option selected>Choose Suppliers</option>
                                <option value="1">Lenovo</option>
                                <option value="2">Bosch</option>
                            </select>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Add Item</button>
                    </div>
                </form>
            </div>



        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')

@endsection
