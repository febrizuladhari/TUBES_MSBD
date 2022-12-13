@extends('layout.layoutsuperadmin')

@section('title')
    <title>Add Rack - Super Admin</title>
@endsection

@section('content')
@livewireStyles
    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Add Rack</h3>
            <hr class="my-4">

            <div class="card">
                <h5 class="card-header">Add Rack With Super Admin Authority</h5>
                <livewire:add-rack></livewire:add-rack>
            </div>

        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')
@livewireScripts
@endsection
