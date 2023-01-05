<div>
    <div class="container-fluid">
        <div class="row">
            <div class="table-responsive text-nowrap">
                <table class="table table-responsive table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Warehouse</th>
                            <th>Rack</th>
                            <th>Outlet</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($barangs as $barang)
                        <td>{{$barang->id}}</td>
                        <td>{{$barang->Nama}}</td>
                        <td>{{$barang->Kategori}}</td>
                        <td>{{$barang->Gudang}}</td>
                        <td>{{$barang->Rak}}</td>
                        <td>{{$barang->Outlet }}</td>
                        <td>{{$barang->Status}}</td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-5">
            <form wire:submit.prevent="store" class="container-fluid">
                <div class="mb-3">
                    <label class="form-label" for="qr">ID Item</label>
                    <input id="qr" type="search" wire:model="search" class="form-control mb-4 @error('qr') is-invalid @enderror" placeholder="Search Item ...">
                    @error('qr')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send Report</button>
                </div>
            </form>
        </div>
    </div>
</div>
