<div>
    <div class="table-responsive text-nowrap my-4">
        <table class="table table-responsive table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Outlet</th>
                    <th>Warehouse</th>
                    <th>Rack</th>
                    <th class="d-flex justify-content-center">Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($pinjams as $pinjam)
                <tr>
                    <td>{{$pinjam->id_barang}}</td>
                    <td>{{$pinjam->nama_barang}}</td>
                    <td>{{$pinjam->outlet_asal}}</td>
                    <td>{{$pinjam->gudang_asal}}</td>
                    <td>{{$pinjam->rak_asal}}</td>
                    <td class="d-flex justify-content-center">
                        <!-- Pengembalian Button -->
                        <button wire:click="return({{$pinjam}})" type="button" class="btn btn-info me-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                            <i class="menu-icon tf-icons bx bx-left-arrow-circle"></i>Return
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row my-4">
        <div class="d-flex justify-content-center">
            {{ $pinjams->Links() }}
        </div>
    </div>
</div>
