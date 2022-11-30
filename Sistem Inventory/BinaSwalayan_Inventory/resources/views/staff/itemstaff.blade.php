@extends('layout.layoutstaff')

@section('title')
    <title>Item - Staff</title>
@endsection

@section('content')

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
                            <!-- Dropdown with icon -->
                            <div class="col-lg-3 col-sm-6 col-12 ms-4 mb-4">
                                <div class="demo-inline-spacing">
                                    <div class="btn-group" id="dropdown-icon-demo">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-menu bxs-like bx-burst-hover"></i> Category
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Elektronik</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Kebersihan</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Perkakas</a>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-responsive table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Rack</th>
                                            <th>Warehouse</th>
                                            <th>Outlet</th>
                                            <th>Suppilers</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>1</td>
                                            <td><strong>Komputer Kasir</strong></td>
                                            <td>Elektronik</td>
                                            <td>1</td>
                                            <td>Warehouse 1</td>
                                            <td>Bina Marindal Swalayan</td>
                                            <td>Lenovo</td>
                                            <td><span class="badge bg-label-primary me-1">Good</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><strong>Komputer Kasir</strong></td>
                                            <td>Elektronik</td>
                                            <td>3</td>
                                            <td>Warehouse 2</td>
                                            <td>Toko Deli Baru</td>
                                            <td>Lenovo</td>
                                            <td><span class="badge bg-label-info me-1">Borrow</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><strong>Komputer Kasir</strong></td>
                                            <td>Elektronik</td>
                                            <td>2</td>
                                            <td>Warehouse 1</td>
                                            <td>Bina Marindal Swalayan</td>
                                            <td>Lenovo</td>
                                            <td><span class="badge bg-label-danger me-1">Damaged</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')

@endsection
