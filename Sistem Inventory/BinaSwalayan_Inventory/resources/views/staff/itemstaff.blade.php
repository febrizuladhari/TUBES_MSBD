@extends('layout.layoutstaff')

@section('title')
    <title>Item - Staff</title>
@endsection

@section('content')
@livewireStyles
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">List Items</h3>
            <hr class="my-4">

            <div class="nav-align-top mb-4">
                <!-- Isi Tabel Item Berdasarkan Outlet -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                        <!-- List Itemms -->
                        <div class="card">
                            <h5 class="card-header">List Items With Conditions</h5>
                            <livewire:item-staff></livewire:item-staff>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')
@livewireScripts
@endsection
