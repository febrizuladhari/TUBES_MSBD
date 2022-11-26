@extends('layout.layoutadmin')

@section('title')
    <title>Approve Shifting Items - Admin</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Approve Shifting Items</h3>
            <hr class="my-4">

            <!-- List Itemms -->
            <div class="card">
                <h5 class="card-header">List of shifting items pending approval</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Origin Outlet</th>
                                <th>Outlet Destination</th>
                                <th class="d-flex justify-content-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>1</td>
                                <td><strong>Komputer Kasir</strong></td>
                                <td>Elektronik</td>
                                <td>Bina Marindal Swalayan</td>
                                <td>Bina Setia Budi Swalayan</td>
                                <td>
                                    <!-- Modal Confirm Button -->
                                    <button type="button" class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#basicModal1">
                                        <i class="menu-icon tf-icons bx bxs-badge-check"></i>Confirm
                                    </button>

                                    <!-- Modal Confirm Popup -->
                                    <div class="modal fade" id="basicModal1" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Confirm this item ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            Are you sure you want to confirm this item ?
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close </button>
                                                    <button type="submit" class="btn btn-success">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Reject Button -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal2">
                                        <i class="menu-icon tf-icons bx bx-error-alt"></i>Reject
                                    </button>

                                    <!-- Modal Reject Popup -->
                                    <div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Reject this item ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            Are you sure you want to reject this item ?
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warning">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>Komputer Kasir</strong></td>
                                <td>Elektronik</td>
                                <td>Toko Deli Baru</td>
                                <td>Bina Marindal Swalayan</td>
                                <td>
                                    <!-- Modal Confirm Button -->
                                    <button type="button" class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#basicModal1">
                                        <i class="menu-icon tf-icons bx bxs-badge-check"></i>Confirm
                                    </button>

                                    <!-- Modal Confirm Popup -->
                                    <div class="modal fade" id="basicModal1" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Confirm this item ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            Are you sure you want to confirm this item ?
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close </button>
                                                    <button type="submit" class="btn btn-success">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Reject Button -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal2">
                                        <i class="menu-icon tf-icons bx bx-error-alt"></i>Reject
                                    </button>

                                    <!-- Modal Reject Popup -->
                                    <div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Reject this item ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            Are you sure you want to reject this item ?
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warning">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>Komputer Kasir</strong></td>
                                <td>Elektronik</td>
                                <td>Toko Deli Baru</td>
                                <td>Bina Marindal Swalayan</td>
                                <td>
                                    <!-- Modal Confirm Button -->
                                    <button type="button" class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#basicModal1">
                                        <i class="menu-icon tf-icons bx bxs-badge-check"></i>Confirm
                                    </button>

                                    <!-- Modal Confirm Popup -->
                                    <div class="modal fade" id="basicModal1" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Confirm this item ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            Are you sure you want to confirm this item ?
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close </button>
                                                    <button type="submit" class="btn btn-success">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Reject Button -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal2">
                                        <i class="menu-icon tf-icons bx bx-error-alt"></i>Reject
                                    </button>

                                    <!-- Modal Reject Popup -->
                                    <div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Reject this item ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            Are you sure you want to reject this item ?
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warning">Reject</button>
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

    <!-- Content wrapper -->



@endsection

@section('script')

@endsection
