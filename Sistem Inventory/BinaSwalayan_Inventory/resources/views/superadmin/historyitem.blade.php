@extends('layout.layoutsuperadmin')

@section('title')
    <title>History Items - Super Admin</title>
@endsection

@section('content')
@livewireStyles

    <!-- Konten -->
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">History Shifting Items</h3>
            <hr class="my-3">

            <div class="nav-align-top mb-4">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                        <!-- Log Update Items -->
                        <div class="card">
                            <div class="container">
                                <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">

                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-header">History Shifting Items</h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="demo-inline-spacing d-flex justify-content-end">

                                                {{-- <a href="{{ url('exportlogupdatebarang_sa') }}">
                                                    <button type="button" class="btn btn-outline-primary data-bs-dismiss="modal"><i class='bx bxs-file me-1'></i>Export Excel</button>
                                                </a> --}}

                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <br>
                                        <table class="table table-responsive table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>ID Item</th>
                                                    <th>Borrower Outlet</th>
                                                    <th>Out Date</th>
                                                    <th>Back Date</th>
                                                    <th>user</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                {{-- if the data doesn't exist yet --}}
                                                @if ($pinjams->count() === 0)
                                                <div class="alert alert-danger mx-4" role="alert">
                                                    It looks like this log doesn't have any data
                                                </div>
                                                @else

                                                @foreach ($pinjams as $pinjam)
                                                <tr>
                                                    <td>{{$pinjam->id}}</td>
                                                    <td>{{$pinjam->id_barang}}</td>
                                                    <td>{{$pinjam->id_outlet_peminjam}}</td>
                                                    <td>{{$pinjam->tanggal_keluar}}</td>
                                                    <td>{{$pinjam->tanggal_kembali}}</td>
                                                    <td>{{$pinjam->nama}}</td>
                                                    @endforeach
                                                </tr>

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

        <div class="container-xxl flex-grow-1 container-p-y">
        <h3 class="fw-bold py-3">History Damaged Items</h3>
        <hr class="my-3">

        <div class="nav-align-top mb-4">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                    <!-- Log Update Items -->
                    <div class="card">
                        <div class="container">
                            <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">

                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-header">History Damaged Items</h5>
                                    </div>
                                    <div class="col-6">
                                        <div class="demo-inline-spacing d-flex justify-content-end">

                                            {{-- <a href="{{ url('exportlogupdatebarang_sa') }}">
                                                <button type="button" class="btn btn-outline-primary data-bs-dismiss="modal"><i class='bx bxs-file me-1'></i>Export Excel</button>
                                            </a> --}}

                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive text-nowrap">
                                    <br>
                                    <table class="table table-responsive table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>id Item</th>
                                                <th>Damaged Date</th>
                                                <th>Good Date</th>
                                                <th>Location</th>
                                                <th>Note</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            {{-- if the data doesn't exist yet --}}
                                            @if ($rusaks->count() === 0)
                                            <div class="alert alert-danger mx-4" role="alert">
                                                It looks like this log doesn't have any data
                                            </div>
                                            @else

                                            @foreach ($rusaks as $rusak)
                                            <tr>
                                                <td>{{$rusak->id}}</td>
                                                <td>{{$rusak->id_barang}}</td>
                                                <td>{{$rusak->tanggal_rusak}}</td>
                                                <td>{{$rusak->tanggal_bagus}}</td>
                                                <td>{{$rusak->lokasi}}</td>
                                                <td>{{$rusak->catatan}}</td>
                                                @endforeach
                                            </tr>

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
