@extends('layout.layoutadmin')

@section('title')
    <title>Approve Damaged Items - Admin</title>
@endsection

@section('content')
@livewireStyles

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h3 class="fw-bold py-3">Damaged Items Request List</h3>
        <hr class="my-4">

        <div class="nav-align-top mb-4">
            <div class="card">
                <!-- Isi Tabel Item Berdasarkan Outlet -->
                <livewire:admin.acc-damaged-item></livewire:admin.acc-damaged-item>
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
