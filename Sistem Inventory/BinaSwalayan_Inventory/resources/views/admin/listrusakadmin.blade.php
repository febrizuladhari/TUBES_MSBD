@extends('layout.layoutadmin')

@section('title')
    <title>List Repaired Item - Admin</title>
@endsection

@section('content')
@livewireStyles
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">List Repaired Items</h3>
            <hr class="my-4">

            <div class="nav-align-top mb-4">
                <!-- Repaired -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                        <!-- List Itemms -->
                        <div class="card">
                            <h5 class="card-header">List Repaired Items</h5>
                                <livewire:admin.list-rusak-admin></livewire:admin.list-rusak-admin>
                        </div>
                    </div>
                </div>
            </div>

        </div>

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
