@extends('layout.layoutstaff')

@section('title')
    <title>Request Buy Item - Staff</title>
@endsection

@section('content')

<!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Request Buy Item</h3>
            <hr class="my-4">


            <div class="card">
                <h5 class="card-header">Request Buy Item With Staff Authority</h5>
                <form method="POST" action="{{url('storeReqBuy')}}" class="container-fluid">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="nama">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="nama" class="input-group-text"><i class="bx bx-package"></i></span>
                            <input type="text" class="form-control" id="nama" name="nama_barang" placeholder="Name" aria-label="John Doe"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Category</label>
                        <select class="form-select" id="kategori" name="id_kategori">
                            <option selected>Open this to select category</option>
                            <?php
                                use App\models\Kategori;
                                $kategoris = Kategori::all();
                            ?>
                            @foreach ($kategoris as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Send Request</button>
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
