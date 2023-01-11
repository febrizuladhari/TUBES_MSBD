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
                    <div class="col-12">
                        <h5 class="card-header d-flex justify-content-center">Items</h5>
                        <div class="card-body">
                            <a href="{{ route('printbarang_sa') }}"><button class="btn btn-primary d-grid w-100 fw-bold" type="button">Print</button></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header d-flex justify-content-center">Categories</h5>
                        <div class="card-body">
                            <a href="{{ route('printkategori_sa') }}"><button class="btn btn-primary d-grid w-100 fw-bold" type="button">Print</button></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="card-header d-flex justify-content-center">Suppliers</h5>
                        <div class="card-body">
                            <a href="{{ route('printsupllier_sa') }}"><button class="btn btn-primary d-grid w-100 fw-bold" type="button">Print</button></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header d-flex justify-content-center">Repaired Items</h5>
                        <div class="card-body">
                            <a href="{{ route('printfinishrepair_sa') }}"><button class="btn btn-primary d-grid w-100 fw-bold" type="button">Print</button></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="card-header d-flex justify-content-center">Lost Items</h5>
                        <div class="card-body">
                            <a href="{{ route('printlostitem_sa') }}"><button class="btn btn-primary d-grid w-100 fw-bold" type="button">Print</button></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <h5 class="card-header d-flex justify-content-center">Approve Shifting Items</h5>
                        <div class="card-body">
                            <a href="{{ route('printaccshifting_sa') }}"><button class="btn btn-primary d-grid w-100 fw-bold" type="button">Print</button></a>
                        </div>
                    </div>

                    <div class="col-4">
                        <h5 class="card-header d-flex justify-content-center">Approve Damaged Items</h5>
                        <div class="card-body">
                            <a href="{{ route('printaccdamaged_sa') }}"><button class="btn btn-primary d-grid w-100 fw-bold" type="button">Print</button></a>
                        </div>
                    </div>

                    <div class="col-4">
                        <h5 class="card-header d-flex justify-content-center">Approve Incoming Items</h5>
                        <div class="card-body">
                            <a href="{{ route('printaccincoming_sa') }}"><button class="btn btn-primary d-grid w-100 fw-bold" type="button">Print</button></a>
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
