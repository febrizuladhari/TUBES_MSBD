@extends('layout.layoutsuperadmin')

@section('title')
    <title>Log Delete Users - Super Admin</title>
@endsection

@section('content')
@livewireStyles

    <!-- Konten -->
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Log Delete Users</h3>
            <hr class="my-3">

            <div class="nav-align-top mb-4">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                        <!-- Log Delete Users -->
                        <div class="card">
                            <div class="container">
                                <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">

                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-header">Log Delete Users</h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="demo-inline-spacing d-flex justify-content-end">

                                                @if ($logDeleteUsers->count() === 0)
                                                    <div></div>
                                                @else
                                                    <a href="{{ url('exportlogdeleteuser_sa') }}">
                                                        <button type="button" class="btn btn-outline-primary data-bs-dismiss="modal"><i class='bx bxs-file me-1'></i>Export Excel</button>
                                                    </a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <br>
                                        <table class="table table-responsive table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Level</th>
                                                    <th>Username</th>
                                                    <th>Gender</th>
                                                    <th>Adress</th>
                                                    <th>Phone Number</th>
                                                    <th>Outlet</th>
                                                    <th>Deleted At</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @foreach ($logDeleteUsers as $logDeleteUser)
                                                <tr>
                                                    <td>{{ $logDeleteUser->id_user }}</td>
                                                    <td>{{ $logDeleteUser->nama_deleted }}</td>
                                                    <td>{{ $logDeleteUser->username_deleted }}</td>
                                                    <td>{{ $logDeleteUser->level_deleted }}</td>
                                                    <td>{{ $logDeleteUser->jenis_kelamin_deleted }}</td>
                                                    <td>{{ $logDeleteUser->alamat_deleted }}</td>
                                                    <td>{{ $logDeleteUser->no_telp_deleted }}</td>
                                                    <td>{{ $logDeleteUser->id_outlet_deleted }}</td>
                                                    <td>{{ $logDeleteUser->deleted_at }}</td>
                                                @endforeach
                                                </tr>

                                                {{-- if the data doesn't exist yet --}}
                                                @if ($logDeleteUsers->count() === 0)
                                                <div class="alert alert-danger mx-4" role="alert">
                                                    It looks like this log doesn't have any data
                                                </div>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>

    <!-- Content wrapper -->


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
@livewireScripts

@endsection
