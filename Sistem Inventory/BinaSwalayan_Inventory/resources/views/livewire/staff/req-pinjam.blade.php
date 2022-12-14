<div>

    <form wire:submit.prevent="store"  class="container-fluid">
        <div class="mb-3">
            <label class="form-label" for="nama">Name</label>
            <div class="input-group input-group-merge">
                <span id="nama" class="input-group-text"><i class="bx bx-package"></i></span>
                <input wire:model.defer="selectedName" type="text" class="form-control" id="nama" name="nama_barang" placeholder="Name" aria-label="John Doe"/>
            </div>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Category</label>
            <select wire:model="selectedKategori" class="form-select" id="kategori" name="id_kategori">
                <option selected>Open this to select category</option>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_outlet" class="form-label">Outlet</label>
                <select wire:model="selectedOutlet" id="id_outlet" class="select2 form-select">
                    @foreach($outlets as $outlet)
                    <option>{{$outlet->nama}}</option>
                    @endforeach
                </select>
        </div>
        <div class="mb-3">
            <label for="id_gudang" class="form-label">Warehouse</label>
                <select wire:model="selectedWarehouse" id="id_gudang" class="select2 form-select">
                    <option selected>Choose Warehouse</option>
                    @foreach($gudangs as $gudang)
                    <option value="{{$gudang->id}}">{{$gudang->gudang}}</option>
                    @endforeach
                    
                </select>
        </div>

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
            <label class="form-label" for="keluar">Out Date</label>
            <div class="input-group input-group-merge">
                <span id="keluar" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="datetime-local" class="form-control" wire:model="selectedDate" name="keluar" required/>
            </div>
        </div>

        <div class="modal-footer">
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Send Request</button>
        </div>
    </form>

</div>
