@extends('layout.layoutstaff')

@section('title')
    <title>Home - Staff</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Welcome {{ auth()->user()->nama }} ! 🎉</h5>
                        <p class="mb-4">
                            You're admin at Bina Karya Swalayan. You can make request about item in your outlet.
                        </p>

                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" ria-expanded="false">
                                <i class='bx bx-check-shield me-1'></i> Check It
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('adddamagedstaff') }}"><i class="bx bx-error me-2"></i>Add Damaged</a></li>
                                <li><a class="dropdown-item" href="{{ route('reqitemstaff') }}"><i class="bx bx-transfer-alt me-2"></i>Request Item</a></li>
                                <li><a class="dropdown-item" href="{{ route('reqbelistaff') }}"><i class="bx bx-cart me-2"></i>Request Buy Item</a></li>
                                <li><a class="dropdown-item" href="{{ route('itemstaff') }}"><i class="bx bxs-component me-2"></i>Items in this outlet</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                    <img
                        src="{{ asset('img/illustrations/staff.png') }}"
                        height="140"
                        alt="View Badge User"
                        data-app-dark-img="illustrations/staff.png"
                        data-app-light-img="illustrations/staff.png"/>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Four Card Action -->
            <div class="row">
                <div class="col-lg-12 order-0">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="col d-flex justify-content-center">
                                    <button type="button" class="btn btn-icon btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalSearch">
                                        <i class="tf-icons bx bx-search-alt bxs-like bx-tada-hover bx-md"></i>
                                    </button>
                                    </div>
                                </div>
                                <h4 class="card-title text-center mb-2">Search Item</h3>
                                <span class="d-block text-center mb-1">Total Items : <strong>{{ $totalItems }}</strong></span>
                            </div>
                            <!-- Modal Search Item Popup -->
                            <div class="modal fade" id="modalSearch" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <form class="container-fluid my-5">
                                                <div class="mb-3">
                                                    <h4 class="modal-title text-center mb-4">Search Item by ID Item</h4>
                                                    <label class="form-label" for="id">ID Item</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="id" class="input-group-text"><i class="bx bx-package"></i></span>
                                                        <input type="text" class="form-control" id="id" placeholder="ID Item" required/>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ route('itemstaff') }}"> <button type="button" class="btn btn-primary">Search</button></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="col d-flex justify-content-center">
                                        <button type="button" class="btn btn-icon btn-outline-info btn-lg" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="left" data-bs-html="true" title="<i class='bx bx-bell bx-xs bxs-like bx-tada'></i><span>&nbsp; You have items to approve</span>">
                                            <i class="tf-icons bx bx-transfer bxs-like bx-tada-hover bx-md"></i>
                                        </button>
                                        </div>
                                    </div>
                                    <h5 class="d-block mb-1">Pending Shifting</h5>
                                    <h4 class="card-title mb-2"><span class="text-success"><i class="bx bx-up-arrow-alt"></i></span>{{ $totalAccShifting }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="col d-flex justify-content-center">
                                        <button type="button" class="btn btn-icon btn-outline-danger btn-lg" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-bell bx-xs bxs-like bx-tada'></i><span>&nbsp; You have items to approve</span>">
                                            <i class="tf-icons bx bx-error-alt bxs-like bx-tada-hover bx-md"></i>
                                        </button>
                                        </div>
                                    </div>
                                    <h5 class="d-block mb-1">Pending Damaged to Repaired</h5>
                                    <h4 class="card-title mb-2"><span class="text-success"><i class="bx bx-up-arrow-alt"></i></span>{{ $totalAccDamaged }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="col d-flex justify-content-center">
                                        <button type="button" class="btn btn-icon btn-outline-success btn-lg" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="left" data-bs-html="true" title="<i class='bx bx-bell bx-xs bxs-like bx-tada'></i><span>&nbsp; You have items to approve</span>">
                                            <i class="tf-icons bx bx-down-arrow-alt bxs-like bx-tada-hover bx-md"></i>
                                        </button>
                                        </div>
                                    </div>
                                    <h5 class="d-block mb-1">Pending Incoming</h5>
                                    <h4 class="card-title mb-2"><span class="text-success"><i class="bx bx-up-arrow-alt"></i></span>{{ $totalAccIncoming }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Staff -->
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">

                        {{-- chartPending --}}
                        <div class="card-header d-flex align-items-center justify-content-between pb-0">
                            <div class="card-title mb-0">
                                <h5 class="m-0 me-2">Pending Approvement</h5>
                                <small class="text-muted">Displays the number of items that have not been approved</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center" style="height:30rem;">
                                        <canvas id="chartPending"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Script chartPending --}}
                        <script>
                            var chart1 = document.getElementById('chartPending');

                            var shifting =  {{ Js::from($dataShifting) }};
                            var damaged =  {{ Js::from($dataDamaged) }};
                            var incoming =  {{ Js::from($dataIncoming) }};

                            new Chart(chart1, {
                                type: 'bar',
                                data: {
                                    labels: ['Pending Shifting', 'Pending Damaged', 'Pending Incoming'],
                                    datasets: [{
                                        label: 'Number of pending items',
                                        data: [shifting, damaged, incoming],
                                        backgroundColor: ['rgba(255, 99, 132, 0.2)'],
                                        borderColor: ['rgb(255, 99, 132)'],
                                        borderWidth: 2,
                                        hoverOffset: 4
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    animation: {
                                        y: {
                                            duration: 3000
                                        }
                                    }
                                }
                            });
                        </script>

                    </div>
                </div>

            </div>

        </div>

        </div>
        <!-- / Content -->

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mx-auto">
                    ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    , <strong>Bina Swalayan Inventory</strong>
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->



@endsection

@section('script')

@endsection
