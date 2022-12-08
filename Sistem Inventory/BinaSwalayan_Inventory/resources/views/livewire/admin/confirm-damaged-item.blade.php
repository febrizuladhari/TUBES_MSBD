<div>
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Confirm Damaged Items</h3>
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
                            <input type="text" class="form-control" value="{{$damage->nama_barang}}" wire:model="nama_barang" placeholder="{{$damage->nama_barang}}" disabled/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="id_kategori">Category</label>
                        <div class="input-group input-group-merge">
                            <span id="id_kategori" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" value="{{$damage->category}}" wire:model="kategori" placeholder="{{$damage->kategori}}" disabled/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="rak">Rack</label>
                        <div class="input-group input-group-merge">
                            <span id="rak" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" value="{{$damage->rak}}" wire:model="rak" placeholder="{{$damage->rak}}" disabled/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="id_outlet">Warehouse</label>
                        <div class="input-group input-group-merge">
                            <span id="gudang" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" value="{{$damage->gudang}}" wire:model="gudang" placeholder="{{$damage->gudang}}" disabled/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="id_outlet">Outlet</label>
                        <div class="input-group input-group-merge">
                            <span id="nama" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" value="{{$damage->nama}}" wire:model="nama" placeholder="{{$damage->nama}}" disabled/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="id_outlet">Out Date</label>
                        <div class="input-group input-group-merge">
                            <span id="tanggal_keluar" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="datetime-local" class="form-control" wire:model="tanggal_keluar"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="id_outlet">Back Date</label>
                        <div class="input-group input-group-merge">
                            <span id="tanggal_kembali" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="datetime-local" class="form-control" wire:model="tanggal_kembali"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="id_outlet">Repair Location</label>
                        <div class="input-group input-group-merge">
                            <span id="tanggal_keluar" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" wire:model="lokasi"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button></a>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
