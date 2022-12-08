@extends('layout.layoutadmin')

@section('title')
    <title>Approve Damaged Items - Admin</title>
@endsection

@section('content')
@livewireStyles

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Approve Damaged Items</h3>
            <hr class="my-4">

            <!-- List Itemms -->
            <div class="card">
                <h5 class="card-header">List of Damaged Items Pending Approval</h5>
                <livewire:admin.acc-damaged-item></livewire:admin.acc-damaged-item>
            </div>
        </div>
    </div>

    <!-- Content wrapper -->

@endsection

@section('script')
@livewireScripts

@endsection
