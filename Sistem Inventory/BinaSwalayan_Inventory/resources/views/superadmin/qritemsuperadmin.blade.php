@extends('layout.layoutsuperadmin')

@section('title')
    <title>QR Items - Super Admin</title>
@endsection

@section('content')
@livewireStyles
    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">List Selected QR Items</h3>
            <hr class="my-4">

            <div class="nav-align-top mb-4">

                <livewire:admin.qritem-admin></livewire:admin.qritem-admin>

            </div>


        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')
@livewireScripts
@endsection
