<div>
    <div class="card">
        <h5 class="card-header">List of shifting items pending approval</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Outlet</th>
                        <th>Location</th>
                        <th>User</th>
                        <th class="d-flex justify-content-center">Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($pinjams as $pinjam)
                    <tr>
                        <td>{{$pinjam->id}}</td>
                        <td><strong>{{$pinjam->nama_barang}}</strong></td>
                        <td>{{$pinjam->kategori}}</td>
                        <td>{{$pinjam->outlet}}</td>
                        <td>{{$pinjam->gudang}}</td>
                        <td>{{$pinjam->USER}}</td>
                        <td>
                            <!-- Modal Confirm Button -->
                            <button wire:click="onAcc({{$pinjam->id}})"type="button" class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#basicModal1">
                                <i class="menu-icon tf-icons bx bxs-badge-check"></i>Confirm
                            </button>
                            
                            <!-- Modal Reject Button -->
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal2">
                                <i class="menu-icon tf-icons bx bx-error-alt"></i>Reject
                            </button>
                    @endforeach


                            <!-- Modal Confirm Popup -->
                            <div wire:ignore.self class="modal fade" id="basicModal1" tabindex="-1" aria-hidden="true">
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
                                                    <label for="id_kategori" class="form-label">Category</label>
                                                        <select wire:model.lazy="updatedKategori" id="id_kategori" class="form-control">
                                                            <option selected>Choose Category</option>
                                                            @foreach($kategoris as $kategori)
                                                            <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                                                            @endforeach
                                                        </select>
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
                                                
                                                @if(!is_null($gudangs))
                                                <div class="mb-3">
                                                    <label for="id_gudang" class="form-label">Warehouse</label>
                                                        <select wire:model="updatedWarehouse" id="id_gudang" class="select2 form-select">
                                                            <option selected>Choose Warehouse</option>
                                                            @foreach($gudangs as $gudang)
                                                            <option value="{{$gudang->id}}">{{$gudang->gudang}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                @endif
    
                                                @if(!is_null($raks))
                                                <div class="mb-3">
                                                    <label for="id_rak" class="form-label">Rack</label>
                                                        <select wire:model="updatedRack" id="id_rak" class="select2 form-select">
                                                            <option selected>Choose Rack</option>
                                                            @foreach($raks as $rak)
                                                            <option value="{{$rak->id}}">{{$rak->rak}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                @endif
                                                <div class="mb-3">
                                                    <label for="id_supplier" class="form-label">Supplier</label>
                                                        <select wire:model.lazy="updatedSupplier" id="id_supplier" class="select2 form-select">
                                                            <option selected>Choose Supplier</option>
                                                            @foreach($suppliers as $supplier)
                                                            <option value="{{$supplier->id}}">{{$supplier->nama}}</option>
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

                            <!-- Modal Reject Popup -->
                            <div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Reject this item ?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    Are you sure you want to reject this item ?
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-warning">Reject</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
