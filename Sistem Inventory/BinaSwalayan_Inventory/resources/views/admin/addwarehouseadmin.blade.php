@extends('layout.layoutadmin')

@section('title')
    <title>Add Rack - Admin</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Add Rack</h3>
            <hr class="my-4">

            <div class="card">
                <h5 class="card-header">Add Rack With Admin Authority</h5>
                <form method="POST" action="{{ route('addwarehouse.insert') }}" class="container-fluid">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="gudang">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="gudang" class="input-group-text"><i class='bx bx-building-house'></i></span>
                            <input type="text" class="form-control @error('gudang') is-invalid @enderror" name="gudang" id="gudang" placeholder="Warehouse Name" required/>
                            @error('gudang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="id_outlet" class="form-label">Outlet</label>
                            <select id="id_outlet" name="id_outlet" class="select2 form-select @error('id_outlet') is-invalid @enderror">
                                <option selected>--&nbsp;Choose Outlet&nbsp;--</option>
                                @foreach($outlets as $outlet)
                                    <option value="{{ $outlet->id }}">{{ $outlet->id }}&nbsp;&nbsp;--&nbsp;&nbsp;{{ $outlet->nama }}</option>
                                @endforeach
                            </select>
                            @error('id_outlet')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('additem.edit') }}"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button></a>
                        <button type="submit" class="btn btn-primary">Add Warehouse</button>
                    </div>
                </form>
            </div>

        </div>

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mx-auto">
                    ??
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
