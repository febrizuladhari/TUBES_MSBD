<div>
    {{-- <div class="row">
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
    </div> --}}
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
                    <th class="d-flex justify-content-center">Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <!--  Pengembalian Button -->
                    <button type="button" class="btn btn-info me-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                        <i class="menu-icon tf-icons bx bxs-edit"></i>Return
                    </button>
                </td>
            </tbody>
        </table>
    </div>
    <div class="row my-4">
        <div class="d-flex justify-content-center">

        </div>
    </div>
</div>
