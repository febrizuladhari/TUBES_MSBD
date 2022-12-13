@extends('layout.layoutsuperadmin')

@section('title')
    <title>Approve Damaged Items - Super Admin</title>
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

</div>

@endsection

@section('script')
@livewireScripts

@endsection
