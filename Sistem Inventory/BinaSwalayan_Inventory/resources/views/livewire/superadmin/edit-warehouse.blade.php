<div class="tab-content">
    <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
        <!-- List Itemms -->
        <div class="card">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5 class="card-header">List Warehouse</h5>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-3 ms-2 mt-4">
                        <div class="demo-inline-spacing">
                            <div class="btn-group" id="dropdown-icon-demo">
                                <select class="form-control from-control-sm" wire:model="selectedOutlet">
                                    <option selected value=""> All Outlet <i class='bx bx-chevrons-down'></i></option>
                                    @foreach($outlets as $outlet)
                                    <option value="{{$outlet->id}}">{{$outlet->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="table-responsive text-nowrap">
                    <br>
                    <table class="table table-responsive table-hover table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Outlet</th>
                                <th class="d-flex justify-content-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                            @foreach($gudangs as $barang)
                            <tr>
                                <td><input type="checkbox" value="{{$barang->id}}" wire:model="checked"></td>
                                <td>{{ $barang->id }}</td>
                                <td><strong>{{$barang->gudang}}</strong></td>
                                <td>{{$barang->nama}}</td>
                                <td class="d-flex justify-content-center">
                                    <!-- Modal Edit Button -->
                                    <button wire:click="onEdit({{$barang->id}})" type="button" class="btn btn-info me-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                        <i class="menu-icon tf-icons bx bxs-edit"></i>Edit
                                    </button>
                                    <!-- Modal Delete Button -->
                                    <button wire:click="onDelete({{$barang->id}})" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal">
                                        <i class="menu-icon tf-icons bx bxs-trash"></i>Delete
                                    </button>
                            @endforeach
                                    <!-- Modal Edit Popup -->
                                    <div wire:ignore.self class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <form wire:submit.prevent="submitEdit" action="" method="post" class="container-fluid">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="nama">Name</label>
                                                            <div class="input-group input-group-merge">
                                                                <span id="nama" class="input-group-text"><i class="bx bx-package"></i></span>
                                                                <input wire:model.lazy="updatedNama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Name" required/>
                                                                @error('nama')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="id_outlet" class="form-label">Outlet</label>
                                                                <select wire:model="updatedOutlet" id="id_iutlet" class="select2 form-select">
                                                                    <option selected>Choose Outlet</option>
                                                                    @foreach($outlets as $outlet)
                                                                    <option value="{{$outlet->id}}">{{$outlet->nama}}</option>
                                                                    @endforeach
                                                                </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Delete Popup -->
                                    <div wire:ignore.self class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Delete this item ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            Are you sure you want to delete this item ?
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close </button>
                                                    <button wire:click="deleteItem({{$idb}})" type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="row my-4">
                    <div class="d-flex justify-content-center">
                        {{ $gudangs->Links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('close-modal', event =>{
            $('#modalCenter').modal('hide');
            $('#basicModal').modal('hide');
        });

        window.addEventListener('show-edit-item-modal', event =>{
            $('#modalCenter').modal('show');
        });

        window.addEventListener('show-delete-confirmation-modal', event =>{
            $('#basicModal').modal('show');
        });

    </script>
@endpush
