@extends('layout.layoutsuperadmin')

@section('title')
    <title>Approve Shifting Items - Super Admin</title>
@endsection
@livewireStyles
@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Approve Shifting Items</h3>
            <hr class="my-4">

            <!-- List Itemms -->
            <livewire:admin.acc-pinjam></livewire:admin.acc-pinjam>


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
