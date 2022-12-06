@extends('layout.layoutadmin')

@section('title')
    <title>Add Item - Admin</title>
@endsection

@section('content')
@livewireStyles
    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Add Item</h3>
            <hr class="my-4">

            <div class="card my-4">
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">Add Category with Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addkategori.edit') }}"><button class="btn btn-warning d-grid w-100 fw-bold" type="button">Add Category</button></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="card-header">Add Supplier with Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addsupplier.edit') }}"><button class="btn btn-warning d-grid w-100 fw-bold" type="button">Add Supplier</button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">Add Rack with Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addrack.edit') }}"><button class="btn btn-warning d-grid w-100 fw-bold" type="button">Add Rack</button></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="card-header">Add Outlet with Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addoutlet.edit') }}"><button class="btn btn-warning d-grid w-100 fw-bold" type="button">Add Outlet</button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="card-header text-center ">Add Warehouse with Admin Authority</h5>
                        <div class="card-body">
                            <a href="{{ route('addwarehouse.edit') }}"><button class="btn btn-warning d-grid w-100 fw-bold" type="button">Add Warehouse</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Add Item -->
            <div class="card">
                <h5 class="card-header">Add Items With Admin Authority</h5>
                <livewire:add-rack></livewire:add-rack>
            </div>



        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')
@livewireScripts
@endsection
