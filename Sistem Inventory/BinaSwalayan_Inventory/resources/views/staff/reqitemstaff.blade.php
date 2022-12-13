@extends('layout.layoutstaff')

@section('title')
    <title>Request Item - Staff</title>
@endsection

@section('content')
@livewireStyles
<!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Request Items</h3>
            <hr class="my-4">


            <div class="card">
                <h5 class="card-header">Request Items With Staff Authority</h5>
                <livewire:staff.req-pinjam></livewire:staff.req-pinjam>
            </div>

        </div>

    </div>

    <!-- Content wrapper -->



@endsection

@section('script')
@livewireScripts
@endsection
