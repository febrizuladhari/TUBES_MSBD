<div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Confirm Incoming Items</h3>
            <hr class="my-4">
            <!-- List Itemms -->
            <div class="card">
                <h4 class="card-header">Confirm this request</h4>
                <form wire:submit.prevent="update" class="container-fluid">
                    <div class="mb-3">
                        <input type="hidden" wire:model="id">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama">Item</label>
                        <div class="input-group input-group-merge">
                            <span id="nama_barang" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" value="{{$incoming->nama_barang}}" wire:model="nama_barang" placeholder="{{$incoming->nama_barang}}" disabled/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="id_kategori">Category</label>
                        <div class="input-group input-group-merge">
                            <span id="id_kategori" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" value="{{$incoming->id_kategori}}" wire:model="id_kategori" placeholder="{{$incoming->kategori}}" disabled/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="id_outlet">Outlet</label>
                        <div class="input-group input-group-merge">
                            <span id="id_outlet" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" value="{{$incoming->id_outlet}}" wire:model="id_outlet" placeholder="{{$incoming->outlet}}" disabled/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="idoutlet">Rack</label>
                            <select id="id_outlet" name="id_outlet" class="select2 form-select">
                            <option selected>Select Rack</option>
                            @foreach($racks as $rack)
                                <option value="{{ $rack->id }}">{{ $outlet->rack }}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="idoutlet">Supplier</label>
                            <select id="id_outlet" name="id_outlet" class="select2 form-select">
                            <option selected>Select Supplier</option>
                            @foreach($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->nama }}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('acc_incoming_admin') }}"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button></a>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Content wrapper -->
</div>
