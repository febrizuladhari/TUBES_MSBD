<div>
    <div class="table-responsive text-nowrap my-4">
        <table class="table table-responsive table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Outlet</th>
                    <th>Category</th>
                    <th>Warehouse</th>
                    <th>Rack</th>
                    <th>Lost Date</th>
                    <th>Reporter</th>
                    <th class="d-flex justify-content-center">Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($losts as $lost)
                <tr>
                    <td>{{$lost->id}}</td>
                    <td>{{$lost->nama_barang}}</td>
                    <td>{{$lost->nama}}</td>
                    <td>{{$lost->kategori}}</td>
                    <td>{{$lost->gudang}}</td>
                    <td>{{$lost->rak}}</td>
                    <td>{{$lost->tanggal_hilang}}</td>
                    <td>{{$lost->nama_user}}</td>
                    <td class="d-flex justify-content-center">
                        <!-- Pengembalian Button -->
                        <button wire:click="return({{$lost}})" type="button" class="btn btn-info me-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                            <i class="menu-icon tf-icons bx bx-left-arrow-circle"></i>Found This Item
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
