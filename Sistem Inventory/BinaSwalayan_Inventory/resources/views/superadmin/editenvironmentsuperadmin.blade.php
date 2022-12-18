@extends('layout.layoutsuperadmin')

@section('title')
    <title>Edit Environment - Super Admin</title>
@endsection

@section('content')
@livewireStyles
    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Edit Environments</h3>
            <hr class="my-4">

            <div class="card my-4">
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">Edit Category with Super Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('editkategori_sa.edit') }}"><button class="btn btn-warning btn-lg d-grid w-100 fw-bold" type="button">Edit Category</button></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="card-header">Edit Supplier with Super Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('editsupplier_sa.edit') }}"><button class="btn btn-warning btn-lg d-grid w-100 fw-bold" type="button">Edit Supplier</button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">Edit Rack with Super Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('editrack_sa.edit') }}"><button class="btn btn-warning btn-lg d-grid w-100 fw-bold" type="button">Edit Rack</button></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="card-header">Edit Outlet with Super Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('editoutlet_sa.edit') }}"><button class="btn btn-warning btn-lg d-grid w-100 fw-bold" type="button">Edit Outlet</button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="card-header text-center ">Edit Warehouse with Super Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('editwarehouse_sa.edit') }}"><button class="btn btn-warning btn-lg d-grid w-100 fw-bold" type="button">Edit Warehouse</button></a>
                        </div>
                    </div>
                </div>
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
