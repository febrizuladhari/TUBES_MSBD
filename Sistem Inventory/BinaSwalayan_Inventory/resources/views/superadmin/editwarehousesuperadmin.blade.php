@extends('layout.layoutadmin')

@section('title')
    <title>Edit Warehouse - Superadmin</title>
@endsection

@section('content')
@livewireStyles
    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">List Warehouse</h3>
            <hr class="my-4">

            <div class="nav-align-top mb-4">

                <!-- Isi Tabel Item Berdasarkan Outlet -->
                <livewire:superadmin.edit-warehouse></livewire:superadmin.edit-warehouse>

            </div>


        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')
@livewireScripts
@endsection