@extends('layout.layoutsuperadmin')

@section('title')
    <title>Edit Rack - Super Admin</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Edit Warehouse</h3>
            <hr class="my-4">

            <div class="card">
                <h5 class="card-header">Edit Warehouse With Super Admin Authority</h5>
                <form method="POST" action="" class="container-fluid">
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
                                {{-- @foreach($outlets as $outlet)
                                    <option value="{{ $outlet->id }}">{{ $outlet->id }}&nbsp;&nbsp;--&nbsp;&nbsp;{{ $outlet->nama }}</option>
                                @endforeach --}}
                            </select>
                            @error('id_outlet')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('editenvironment') }}"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button></a>
                        <button type="submit" class="btn btn-primary">Edit Warehouse</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')

@endsection
