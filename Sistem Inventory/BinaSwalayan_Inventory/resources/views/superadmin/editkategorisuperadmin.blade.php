@extends('layout.layoutadmin')

@section('title')
    <title>Edit Categories - Superadmin</title>
@endsection

@section('content')
@livewireStyles
    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">List Category</h3>
            <hr class="my-4">

            <div class="nav-align-top mb-4">

                <!-- Isi Tabel Item Berdasarkan Outlet -->
                <livewire:superadmin.edit-category></livewire:superadmin.edit-category>

            </div>


        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')
@livewireScripts
@endsection