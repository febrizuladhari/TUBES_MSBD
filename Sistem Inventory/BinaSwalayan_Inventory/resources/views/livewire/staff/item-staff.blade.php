<div>
    <div class="row">
        <div class="col">
            <div class="demo-inline-spacing ms-5 mb-4">
                <div class="btn-group" id="dropdown-icon-demo">
                    <select class="form-control from-control-sm" wire:model="selectedCategory">
                        <option selected value=""> All Category <i class='bx bx-chevrons-down'></i></option>
                        @foreach($kategoris as $item)
                        <option value="{{$item->nama_kategori}}">{{$item->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col">
            <input type="search" wire:model="search" class="form-control mb-4" placeholder="Search Item ...">
        </div>
    </div>
    <div class="table-responsive text-nowrap">
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
                    <td>
                        @if ($barang->Status == 'Perbaikan')
                            <span class="badge bg-warning d-flex justify-content-center">{{"Repaired"}}</span>
                        @elseif ($barang->Status == 'Rusak')
                            <span class="badge bg-danger d-flex justify-content-center">{{"Damaged"}}</span>
                        @elseif ($barang->Status == 'Dipinjam')
                            <span class="badge bg-info d-flex justify-content-center">{{"Borrowed"}}</span>
                        @elseif ($barang->Status == 'Hilang')
                        <span class="badge bg-dark d-flex justify-content-center">{{"Lost"}}</span>
                        @else
                        <span class="badge bg-primary d-flex justify-content-center">{{"Good"}}</span>
                        @endif
                    </td>
                </tr>
                @endforeach

                {{-- Search if data not match --}}
                @if ($barangs->count() === 0)
                <div class="alert alert-danger mx-4" role="alert">
                    Data not found! Try another keyword
                </div>
                @endif

            </tbody>
        </table>
    </div>
    <div class="row my-4">
        <div class="d-flex justify-content-center">
            {{$barangs->Links()}}
        </div>
    </div>
</div>
