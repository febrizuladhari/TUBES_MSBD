<div>
    <div class="col-lg-3 col-sm-6 col-12 ms-4 mb-4">
        <div class="demo-inline-spacing">
            <div class="btn-group" id="dropdown-icon-demo">
                <select class="form-control from-control-sm" wire:model="selectedCategory">
                    <option value=""> All Category </option>
                    @foreach($kategoris as $item)
                    <option value="{{$item->nama_kategori}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <input type="search" wire:model="search" class="form-control" wire:model placeholder="Cari">
        </div>
    <table class="table table-responsive table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Rack</th>
                <th>Warehouse</th>
                <th>Outlet</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach($barangs as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td><strong>{{$barang->Nama}}</strong></td>
                <td>{{$barang->Kategori}}</td>
                <td>{{$barang->Rak}}</td>
                <td>{{$barang->Gudang}}</td>
                <td>{{$barang->Outlet}}</td>
                <td>{{$barang->Status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$barangs->Links()}}
    </div>
</div>
