@extends('layout.layoutsuperadmin')

@section('title')
    <title>Approve Incoming Items - Super Admin</title>
@endsection

@section('content')
@livewireStyles

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Approve Incoming Items</h3>
            <hr class="my-4">

            <!-- List Itemms -->
            <div class="card">
                <livewire:admin.acc-incoming-item></livewire:admin.acc-incoming-item>
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
