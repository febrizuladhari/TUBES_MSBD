@extends('layout.layoutsuperadmin')

@section('title')
    <title>Add Category - Super Admin</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Add Category</h3>
            <hr class="my-4">

            <div class="card">
                <h5 class="card-header">Add Category With Super Admin Authority</h5>
                <form method="POST" action="{{ route('addkategori_sa.insert') }}" class="container-fluid">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="nama_kategori">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="nama_kategori" class="input-group-text"><i class='bx bx-category-alt'></i></span>
                            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" id="nama_kategori" placeholder="Name Category" required/>
                            @error('nama_kategori')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('additem_sa.edit') }}"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button></a>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </form>
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

@endsection
