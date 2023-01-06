@extends('layout.layoutadmin')

@section('title')
    <title>Lost Items Report - Admin</title>
@endsection

@section('content')
@livewireStyles

<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h3 class="fw-bold py-3">Lost Items Report List</h3>
        <hr class="my-4">

        <div class="nav-align-top mb-4">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                    <div class="card">
                        <!-- Lost -->
                            <h5 class="card-header">List Lost Items</h5>
                            <livewire:admin.lost-item-admin></livewire:admin.lost-item-admin>
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

@endsection

@section('script')
@livewireScripts

@endsection
