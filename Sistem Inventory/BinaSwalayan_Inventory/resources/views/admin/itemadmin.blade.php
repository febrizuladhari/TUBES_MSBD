@extends('layout.layoutadmin')

@section('title')
    <title>Items - Staff</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">List Items</h3>
            <hr class="my-4">

            <div class="nav-align-top mb-4">
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
                                            <th class="d-flex justify-content-center">Action</th>
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
                                            <td>
                                                <!-- Modal Edit Button -->
                                                <button type="button" class="btn btn-info me-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                                    <i class="menu-icon tf-icons bx bxs-edit"></i>Edit
                                                </button>

                                                <!-- Modal Edit Popup -->
                                                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <form class="container-fluid">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="nama">Name</label>
                                                                        <div class="input-group input-group-merge">
                                                                            <span id="nama" class="input-group-text"><i class="bx bx-package"></i></span>
                                                                            <input type="text" class="form-control" id="nama" placeholder="Name" aria-label="John Doe" required/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="kategori">Category</label>
                                                                        <div class="input-group input-group-merge">
                                                                            <span id="kategori" class="input-group-text"><i class="bx bx-category"></i></span>
                                                                            <input type="text" id="kategori" class="form-control" placeholder="Category" required/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="rak">Rack</label>
                                                                        <div class="input-group input-group-merge">
                                                                            <span id="rak" class="input-group-text"><i class="bx bx-spreadsheet"></i></span>
                                                                            <input type="number" id="rak" class="form-control" placeholder="Rack" required/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="gudang">Warehouse</label>
                                                                        <div class="input-group input-group-merge">
                                                                            <span id="gudang" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                                                            <input type="text" id="gudang" class="form-control" placeholder="Warehouse" required/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="outlet">Outlet</label>
                                                                        <div class="input-group input-group-merge">
                                                                            <span id="outlet" class="input-group-text"><i class="bx bx-store"></i></span>
                                                                            <input type="text" id="outlet" class="form-control" placeholder="Outlet" required/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="suppliers">Suppliers</label>
                                                                        <div class="input-group input-group-merge">
                                                                            <span id="suppliers" class="input-group-text"><i class="bx bx-group"></i></span>
                                                                            <input type="text" id="suppliers" class="form-control" placeholder="Suppliers" required/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="status" class="form-label">Status</label>
                                                                        <select class="form-select" id="status">
                                                                            <option selected>Open to change status</option>
                                                                            <option value="good">Good</option>
                                                                            <option value="borrow">Borrow</option>
                                                                            <option value="damaged">Damaged</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal Delete Button -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal">
                                                    <i class="menu-icon tf-icons bx bxs-trash"></i>Delete
                                                </button>

                                                <!-- Modal Delete Popup -->
                                                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel1">Delete this item ?</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        Are you sure you want to delete this item ?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close </button>
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
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
