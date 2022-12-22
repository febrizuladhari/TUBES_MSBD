@extends('layout.layoutsuperadmin')

@section('title')
    <title>Log Delete Items - Super Admin</title>
@endsection

@section('content')
@livewireStyles

    <!-- Konten -->
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Log Delete Items</h3>
            <hr class="my-3">

            <div class="nav-align-top mb-4">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                        <!-- Log Delete Items -->
                        <div class="card">
                            <div class="container">
                                <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">

                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-header">Log Delete Items</h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="demo-inline-spacing d-flex justify-content-end">

                                                <a href="{{ url('exportlogdeletebarang_sa') }}">
                                                    <button type="button" class="btn btn-outline-primary data-bs-dismiss="modal"><i class='bx bxs-file me-1'></i>Export Excel</button>
                                                </a>

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
                                                    <th>Category</th>
                                                    <th>Rack</th>
                                                    <th>Supplier</th>
                                                    <th>Deleted At</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @foreach ($logDeleteBarangs as $logDeleteBarang)
                                                <tr>
                                                    <td>{{ $logDeleteBarang->id_barang }}</td>
                                                    <td>{{ $logDeleteBarang->nama_deleted }}</td>
                                                    <td>{{ $logDeleteBarang->id_kategori_deleted }}</td>
                                                    <td>{{ $logDeleteBarang->id_rak_deleted }}</td>
                                                    <td>{{ $logDeleteBarang->id_supplier_deleted }}</td>
                                                    <td>{{ $logDeleteBarang->deleted_at }}</td>
                                                @endforeach
                                                </tr>

                                                {{-- if the data doesn't exist yet --}}
                                                @if ($logDeleteBarangs->count() === 0)
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
