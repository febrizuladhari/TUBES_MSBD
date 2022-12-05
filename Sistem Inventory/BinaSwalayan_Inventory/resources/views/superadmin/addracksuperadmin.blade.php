@extends('layout.layoutsuperadmin')

@section('title')
    <title>Add Rack - Super Admin</title>
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
                <h5 class="card-header">Add Rack With Super Admin Authority</h5>
                <form method="POST" action="{{ route('addrack_sa.insert') }}" class="container-fluid">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="rak">Rack Number</label>
                        <div class="input-group input-group-merge">
                            <span id="rak" class="input-group-text"><i class='bx bx-list-ol'></i></span>
                            <input type="number" class="form-control @error('rak') is-invalid @enderror" name="rak" id="rak" placeholder="Rack Number" required/>
                            @error('rak')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="id_gudang" class="form-label">Warehouse</label>
                            <select id="id_gudang" name="id_gudang" class="select2 form-select @error('id_gudang') is-invalid @enderror">
                                <option selected>--&nbsp;Choose Warehouse&nbsp;--</option>
                                @foreach($gudangs as $gudang)
                                    <option value="{{ $gudang->id }}">{{ $gudang->id }}&nbsp;&nbsp;--&nbsp;&nbsp;{{ $gudang->gudang }}</option>
                                @endforeach
                            </select>
                            @error('id_gudang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('additem_sa.edit') }}"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button></a>
                        <button type="submit" class="btn btn-primary">Add Rack</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')

@endsection
