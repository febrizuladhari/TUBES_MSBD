@extends('layout.layoutsuperadmin')

@section('title')
    <title>Accounts - Super Admin</title>
@endsection

@section('content')
@livewireStyles

    <!-- Konten -->
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">List Accounts</h3>
            <hr class="my-3">

            <div class="row my-4">
                <div class="d-grid gap-2 mx-auto">
                    <a href="{{ route('register_account') }}"><button class="btn btn-primary btn-lg" type="button"><i class='bx bx-user-plus bxs-like bx-tada-hover me-3'></i>Add New Account</button></a>
                </div>
            </div>

            <div class="nav-align-top mb-4">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                        <!-- List Account -->
                        <div class="card">
                            <h5 class="card-header">List Accounts With Actions</h5>
                            <livewire:superadmin.accounts-show></livewire:superadmin.accounts-show>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>

    <!-- Content wrapper -->


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
