@extends('layout.layoutadmin')

@section('title')
    <title>Add Supplier - Admin</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Add Supplier</h3>
            <hr class="my-4">

            <div class="card">
                <h5 class="card-header">Add Supplier With Admin Authority</h5>
                <form method="POST" action="{{ route('addsupplier.insert') }}" class="container-fluid">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="nama">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="nama" class="input-group-text"><i class='bx bx-briefcase-alt-2' ></i></span>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Name Supplier" required/>
                            @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('additem.edit') }}"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button></a>
                        <button type="submit" class="btn btn-primary">Add Supllier</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')

@endsection
