<div>
    <form wire:submit.prevent="store" action="" method="post" enctype="multipart/form-data" class="container-fluid">
        <div class="mb-3">
            <label class="form-label" for="id">ID</label>
            <div class="input-group input-group-merge">
                <span id="id" class="input-group-text"><i class="bx bx-code"></i></span>
                <input wire:model.lazy="idb" type="text" class="form-control @error('idb') is-invalid @enderror" id="id" placeholder="ID" required/>
                @error('idb')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="id_rak" class="form-label">Outlet</label>
                <select wire:model="selectedOutlet" id="id_rak" class="select2 form-select">
                    <option selected>Choose Outlet</option>
                    @foreach($outlets as $outlet)
                    <option value="{{$outlet->id}}">{{$outlet->nama}}</option>
                    @endforeach
                </select>
        </div>

        @if(!is_null($gudangs))
        <div class="mb-3">
            <label for="id_rak" class="form-label">Warehouse</label>
                <select wire:model="selectedWarehouse" id="id_rak" class="select2 form-select">
                    <option selected>Choose Warehouse</option>
                    @foreach($gudangs as $gudang)
                    <option value="{{$gudang->id}}">{{$gudang->gudang}}</option>
                    @endforeach
                </select>
        </div>
        @endif

        @if(!is_null($raks))
        <div class="mb-3">
            <label for="id_rak" class="form-label">Rack</label>
                <select wire:model="selectedRack" id="id_rak" class="select2 form-select">
                    <option selected>Choose Rack</option>
                    @foreach($raks as $rak)
                    <option value="{{$rak->id}}">{{$rak->rak}}</option>
                    @endforeach
                </select>
        </div>
        @endif
        <div class="mb-3">
            <label class="form-label" for="nama">Name</label>
            <div class="input-group input-group-merge">
                <span id="nama" class="input-group-text"><i class="bx bx-package"></i></span>
                <input wire:model.lazy="namab" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Name" required/>
                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="id_kategori" class="form-label">Category</label>
                <select wire:model.lazy="selectedCategory" id="id_kategori" class="form-control">
                    <option selected>Choose Category</option>
                    @foreach($kategoris as $kategori)
                    <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                    @endforeach
                </select>
        </div>
        <div class="mb-3">
            <label for="id_supplier" class="form-label">Supplier</label>
                <select wire:model.lazy="selectedSupplier" id="id_supplier" class="select2 form-select">
                    <option selected>Choose Supplier</option>
                    @foreach($suppliers as $supplier)
                    <option value="{{$supplier->id}}">{{$supplier->nama}}</option>
                    @endforeach
                </select>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Add Item</button>
        </div>

    </form>
</div>
