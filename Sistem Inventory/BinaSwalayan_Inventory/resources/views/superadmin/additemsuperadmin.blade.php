@extends('layout.layoutsuperadmin')

@section('title')
    <title>Add Item - Super Admin</title>
@endsection

@section('content')
@livewireStyles
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
                        <h5 class="card-header">Add Category with Super Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addkategori_sa.edit') }}"><button class="btn btn-warning d-grid w-100 fw-bold" type="button">Add Category</button></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="card-header">Add Supplier with Super Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addsupplier_sa.edit') }}"><button class="btn btn-warning d-grid w-100 fw-bold" type="button">Add Supplier</button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">Add Rack with Super Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addrack_sa.edit') }}"><button class="btn btn-warning d-grid w-100 fw-bold" type="button">Add Rack</button></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="card-header">Add Outlet with Super Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addoutlet_sa.edit') }}"><button class="btn btn-warning d-grid w-100 fw-bold" type="button">Add Outlet</button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="card-header text-center ">Add Warehouse with Super Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addwarehouse_sa.edit') }}"><button class="btn btn-warning d-grid w-100 fw-bold" type="button">Add Warehouse</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Add Item -->
            <div class="card">
                <h5 class="card-header">Add Item With Super Admin Authority</h5>
                <livewire:add-items></livewire:add-items>
            </div>



        </div>

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mx-auto">
                    ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    , <strong>Bina Swalayan Inventory</strong>
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')
@livewireScripts
@endsection
