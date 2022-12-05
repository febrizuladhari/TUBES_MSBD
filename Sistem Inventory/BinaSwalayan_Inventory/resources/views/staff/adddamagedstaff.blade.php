@extends('layout.layoutstaff')

@section('title')
    <title>Add Damaged - Staff</title>
@endsection

@section('content')

    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Add Damaged Items</h3>
            <hr class="my-4">

            <!-- List Itemms -->
            <div class="card">
                <h5 class="card-header">Add Damaged Items With Staff Authority</h5>
                <form method="POST" action="{{url('storeAddDamage')}}" class="container-fluid" >
                    @csrf
                    <div class="mb-3">
                        <label for="id_barang" class="form-label">Item</label>
                        <select class="form-select" id="id_barang" name="id_barang">
                            <option selected>Open this to select item</option>
                            <?php
                                use App\models\Barang;
                                $barangs = Barang::all();
                            ?>
                            @foreach ($barangs as $barang)
                                <option value="{{ $barang->id }}">{{ $barang->id }} &nbsp;-&nbsp; {{ $barang->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="id">Notes</label>
                        <div class="input-group input-group-merge">
                            <span id="catatan" class="input-group-text"><i class="bx bx-package"></i></span>
                            <input type="text" class="form-control" id="catatan" name="catatan" placeholder="Notes"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Send Report</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <!-- Content wrapper -->


@endsection

@section('script')

@endsection
