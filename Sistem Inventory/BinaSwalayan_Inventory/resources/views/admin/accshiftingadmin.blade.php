@extends('layout.layoutadmin')

@section('title')
    <title>Approve Shifting Items - Admin</title>
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

    </div>

    <!-- Content wrapper -->



@endsection

@section('script')
@livewireScripts
@endsection
