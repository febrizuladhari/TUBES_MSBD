@extends('layout.layoutsuperadmin')

@section('title')
    <title>Log Update Users - Super Admin</title>
@endsection

@section('content')
@livewireStyles

    <!-- Konten -->
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Log Update Users</h3>
            <hr class="my-3">

            <div class="nav-align-top mb-4">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                        <!-- Log Update Users -->
                        <div class="card">
                            <div class="container">
                                <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">

                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-header">Log Update Users</h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="demo-inline-spacing d-flex justify-content-end">

                                                @if ($logUpdateUsers->count() === 0)
                                                    <div></div>
                                                @else
                                                    <a href="{{ url('exportlogupdateuser_sa') }}">
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
                                                    <th>Name Updated</th>
                                                    <th>Old Name</th>
                                                    <th>Level Updated</th>
                                                    <th>Old Level</th>
                                                    <th>Gender Updated</th>
                                                    <th>Old Gender</th>
                                                    <th>Adress Updated</th>
                                                    <th>Old Adress</th>
                                                    <th>Phone Number Updated</th>
                                                    <th>Old Phone Number</th>
                                                    <th>Outlet Updated</th>
                                                    <th>Old Outlet</th>
                                                    <th>Updated At</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @foreach ($logUpdateUsers as $logUpdateUser)
                                                <tr>
                                                    <td>{{ $logUpdateUser->id_user }}</td>
                                                    <td>{{ $logUpdateUser->nama_updated }}</td>
                                                    <td>{{ $logUpdateUser->nama_old }}</td>
                                                    <td>{{ $logUpdateUser->level_updated }}</td>
                                                    <td>{{ $logUpdateUser->level_old }}</td>
                                                    <td>{{ $logUpdateUser->jenis_kelamin_updated }}</td>
                                                    <td>{{ $logUpdateUser->jenis_kelamin_old }}</td>
                                                    <td>{{ $logUpdateUser->alamat_updated }}</td>
                                                    <td>{{ $logUpdateUser->alamat_old }}</td>
                                                    <td>{{ $logUpdateUser->no_telp_updated }}</td>
                                                    <td>{{ $logUpdateUser->no_telp_old }}</td>
                                                    <td>{{ $logUpdateUser->id_outlet_updated }}</td>
                                                    <td>{{ $logUpdateUser->id_outlet_old }}</td>
                                                    <td>{{ $logUpdateUser->updated_at }}</td>
                                                @endforeach
                                                </tr>

                                                {{-- if the data doesn't exist yet --}}
                                                @if ($logUpdateUsers->count() === 0)
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
