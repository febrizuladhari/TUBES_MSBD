<div>
    <div class="table-responsive text-nowrap">
        <br>
        <a href="{{ url('cetakrequestbeli') }}">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"> Ie, chigaimasu </button>
        </a>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Item</th>
                    <th>Category</th>
                    <th>Requester</th>
                    <th>From</th>
                    <th class="d-flex justify-content-center">Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($incomings as $incoming)
                <tr>
                    <td>{{$incoming->id}}</td>
                    <td><strong>{{$incoming->nama_barang}}</strong></td>
                    <td>{{$incoming->nama_kategori}}</td>
                    <td>{{$incoming->nama_user}}</td>
                    <td>{{$incoming->nama_outlet}}</td>
                    <td>

                        {{-- Edit --}}                       
                        <button wire:click="confirmBuyRequest({{$incoming->id}})" type="button" class="btn btn-info me-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                            <i class="menu-icon tf-icons bx bxs-edit"></i>Confirm
                        </button>

                        {{-- Delete --}}
                            <button type="button" wire:click="rejectConfirm({{ $incoming->id }})" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal2">
                                <i class="menu-icon tf-icons bx bx-error-alt"></i>Reject
                            </button>
                        </a>
                @endforeach
    
                        <!-- Modal Delete Popup -->
                        <div wire:ignore.self class="modal fade" id="basicModal2" tabindex="-1" role="dialog" aria-labelledby="modalCenterLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterLabel">Reject Confirm</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Reject This Request ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="button" wire:click.prevent="reject()" class="btn btn-danger close-modal" data-dismiss="modal">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Modal Pop Up Edit --}}
                        <div wire:ignore.self class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <form wire:submit.prevent="submitConfirmIncoming" action="" method="post" class="container-fluid">
                                            <div class="mb-3" hidden>
                                                <div class="input-group input-group-merge">
                                                    <span id="id" class="input-group-text"><i class="bx bx-package"></i></span>
                                                    <input wire:model.lazy="selectedID" type="text" class="form-control" id="id" name="id" value="{{$incoming->id}}" disabled/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="nama_barang">Item</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="nama_barang" class="input-group-text"><i class="bx bx-package"></i></span>
                                                    <input wire:model.lazy="selectedNamaBarang" type="text" class="form-control" id="nama_barang" placeholder="{{$incoming->nama_barang}}"/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="id_kategori">Category</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="id_kategori" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input wire:model.lazy="selectedNamaKategori" type="text" class="form-control" id="id_kategori" placeholder="{{$incoming->nama_kategori}}" disabled/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="id_outlet">Outlet</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="id_outlet" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input wire:model.lazy="selectedOutlet" type="text" class="form-control" id="id_outlet" placeholder="{{$incoming->nama_outlet}}" disabled/>
                                                </div>
                                            </div>      
                                            <div class="mb-3">
                                                <label for="id_gudang" class="form-label">Warehouse</label>
                                                    <select wire:model="selectedWarehouse" id="id_gudang" class="select2 form-select">
                                                        <option selected>Choose Warehouse</option>
                                                        @foreach($gudangs as $gudang)
                                                        <option value="{{$gudang->id}}">{{$gudang->gudang}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="id_rak" class="form-label">Rack</label>
                                                    <select wire:model="selectedRack" id="id_rak" class="select2 form-select">
                                                        <option selected>Choose Rack</option>
                                                        @foreach($raks as $rak)
                                                        <option value="{{$rak->id}}">{{$rak->rak}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="id_supplier" class="form-label">Supplier</label>
                                                    <select wire:model.lazy="selectedSupplier" id="id_supplier" class="select2 form-select">
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
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('close-modal', event =>{
            $('#modalCenter').modal('hide');
            $('#basicModal').modal('hide');
        });

        window.addEventListener('show-confirm-damaged-modal', event =>{
            $('#modalCenter').modal('show');
        });

        window.addEventListener('show-delete-confirmation-modal', event =>{
            $('#basicModal').modal('show');
        });
    </script>
@endpush
</div>