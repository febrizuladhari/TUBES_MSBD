@extends('layout.layoutsuperadmin')

@section('title')
    <title>Print - Super Admin</title>
@endsection

@section('content')
@livewireStyles
    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Print Item</h3>
            <hr class="my-4">

            <div class="card my-4">
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">Print ____</h5>
                        <div class="card-body">

                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="card-header">Print ____</h5>
                        <div class="card-body">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">Print ____</h5>
                        <div class="card-body">

                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="card-header">Print ____</h5>
                        <div class="card-body">

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
