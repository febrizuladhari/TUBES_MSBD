<div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-8">
                <h5 class="card-header">Approve Incoming Items</h5>
            </div>
            <div class="col-4">
                <div class="demo-inline-spacing d-flex justify-content-end">

                    @if(auth()->user()->level == 'admin')
                        <a href="{{ url('cetakrequestbeli') }}">
                            <button type="button" class="btn btn-outline-primary btn-lg"><i class='bx bxs-file-pdf me-1'></i>Print PDF</button>
                        </a>
                    @elseif(auth()->user()->level == 'superadmin')
                        <a href="{{ url('cetakrequestbeli_sa') }}">
                            <button type="button" class="btn btn-outline-primary btn-lg"><i class='bx bxs-file-pdf me-1'></i>Print PDF</button>
                        </a>
                    @endif

                </div>
            </div>
        </div>

        <div class="table-responsive text-nowrap mb-4">
            <br>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Item</th>
                        <th>Category</th>
                        <th>Requester</th>
                        <th>Origin Outlet</th>
                        <th class="d-flex justify-content-center">Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    {{-- If data empty --}}
                    @if ($incomings->count() === 0)
                    <div class="alert alert-danger mx-4" role="alert">
                        Data is empty!
                    </div>
                    @else

                    @foreach($incomings as $incoming)
                    <tr>
                        <td>{{$incoming->id}}</td>
                        <td><strong>{{$incoming->nama_barang}}</strong></td>
                        <td>{{$incoming->nama_kategori}}</td>
                        <td>{{$incoming->nama_user}}</td>
                        <td>{{$incoming->nama_outlet}}</td>
                        <td class="d-flex justify-content-center">

                            {{-- Confirm --}}
                            <button wire:click="confirmBuyRequest({{$incoming->id}})" type="button" class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                <i class="menu-icon tf-icons bx bxs-badge-check"></i>Confirm
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
                                            <p>Are you sure you want to reject this request?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                                            <button type="button" wire:click.prevent="reject()" class="btn btn-danger close-modal" data-dismiss="modal">Reject</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Mengubah Disable Background  --}}
                            <style>
                                input[type=text]:enabled {
                                    background: #ffffff;
                                    color: black;
                                }
                                input[type=text]:disabled {
                                    background: #ffffff;
                                    color: black;
                                }
                            </style>

                            {{-- Modal Pop Up Confirm --}}
                            <div wire:ignore.self class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <form wire:submit.prevent="submitConfirmIncoming" action="" method="post" class="container-fluid">
                                            {{-- @foreach ($incomings as $incoming) --}}
                                                <div class="mb-3" hidden>
                                                    <div class="input-group input-group-merge">
                                                        <span id="id" class="input-group-text"><i class="bx bx-package"></i></span>
                                                        <input wire:model.lazy="selectedID" type="text" class="form-control" id="id" name="id" value="{{$incoming->id}}" disabled="disabled"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="id_barang">ID</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="id_barang" class="input-group-text"><i class="bx bx-package"></i></span>
                                                        <input wire:model.lazy="selectedIDBarang" type="text" class="form-control" id="id_barang"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="nama_barang">Item</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="nama_barang" class="input-group-text"><i class="bx bx-package"></i></span>
                                                        <input wire:model.lazy="selectedNamaBarang" type="text" class="form-control" id="nama_barang" placeholder="{{$incoming->nama_barang}}" disabled="disabled"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="id_kategori">Category</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="id_kategori" class="input-group-text"><i class="bx bx-category-alt"></i></span>
                                                        <input wire:model.lazy="selectedNamaKategori" type="text" class="form-control" id="id_kategori" placeholder="{{$incoming->nama_kategori}}" disabled="disabled"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="id_outlet">Outlet</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="id_outlet" class="input-group-text"><i class="bx bx-store"></i></span>
                                                        <input wire:model.lazy="selectedOutlet" type="text" class="form-control" id="id_outlet" placeholder="{{$incoming->nama_outlet}}" disabled="disabled"/>
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
                                                    <button type="submit" class="btn btn-primary">Confirm Incoming</button>
                                                </div>
                                                {{-- @endforeach --}}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row my-4">
            <div class="d-flex justify-content-center">
                {{$incomings->Links()}}
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

        window.addEventListener('show-confirm-damaged-modal', event =>{
            $('#modalCenter').modal('show');
        });

        window.addEventListener('show-delete-confirmation-modal', event =>{
            $('#basicModal').modal('show');
        });
    </script>
@endpush
</div>
