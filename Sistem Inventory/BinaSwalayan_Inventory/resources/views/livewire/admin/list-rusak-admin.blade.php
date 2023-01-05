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
                    <th>Back Date</th>
                    <th class="d-flex justify-content-center">Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($rusaks as $rusak)
                <tr>
                    <td>{{$rusak->id}}</td>
                    <td>{{$rusak->nama_barang}}</td>
                    <td>{{$rusak->nama}}</td>
                    <td>{{$rusak->kategori}}</td>
                    <td>{{$rusak->gudang}}</td>
                    <td>{{$rusak->rak}}</td>
                    <td>{{$rusak->tanggal_kembali}}</td>
                    <td class="d-flex justify-content-center">
                        <!-- Pengembalian Button -->
                        <button wire:click="return({{$rusak}})" type="button" class="btn btn-info me-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                            <i class="menu-icon tf-icons bx bx-left-arrow-circle"></i>Return
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>