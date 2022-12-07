<div>
    <form wire:submit.prevent="store" action="" method="POST" class="container-fluid">

        <div class="mb-3">
            <label for="id_rak" class="form-label">Outlets</label>
                <select wire:model="selectedOutlet" id="id_rak" class="select2 form-select">
                    <option selected>Choose Outlets</option>
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

        <div class="mb-3">
            <label class="form-label" for="rak">Rack Number</label>
            <div class="input-group input-group-merge">
                <span id="rak" class="input-group-text"><i class='bx bx-list-ol'></i></span>
                <input wire:model="rack" type="number" class="form-control @error('rak') is-invalid @enderror" name="rak" id="rak" placeholder="Rack Number" required/>
                @error('rak')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="modal-footer">
            <a href="{{ route('additem_sa.edit') }}"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button></a>
            <button wire:Loading.atr='disabled' type="submit" class="btn btn-primary">Add Rack</button>
        </div>
        <div wire:Loading>
            Waiting ...
        </div>
    </form>


</div>
