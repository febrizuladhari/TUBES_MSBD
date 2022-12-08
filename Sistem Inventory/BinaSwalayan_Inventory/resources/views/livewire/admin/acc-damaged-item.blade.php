<div>
    <div class="table-responsive text-nowrap">
        <br>
        <table class="table table-responsive table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item</th>
                    <th>Category</th>
                    <th>Rack</th>
                    <th>Warehouse</th>
                    <th>Outlet</th>
                    <th class="d-flex justify-content-center">Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($damages as $damage)
                <tr>
                    <td><strong>{{ $damage->id }}</strong></td>
                    <td>{{ $damage->nama_barang }}</td>
                    <td>{{ $damage->kategori }}</td>
                    <td>{{ $damage->rak }}</td>
                    <td>{{ $damage->gudang }}</td>
                    <td>{{ $damage->nama }}</td>
                    <td>
                        
                        {{-- Edit --}}                       
                        <button wire:click="confirmDamage({{$damage->id}})" type="button" class="btn btn-info me-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                            <i class="menu-icon tf-icons bx bxs-edit"></i>Confirm
                        </button>

                        {{-- Delete --}}
                        {{-- <a href="{{ route('destroy', $damage->id) }}"> --}}
                            <button type="button" wire:click="destroyer({{$damage->id}})" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal2">
                                <i class="menu-icon tf-icons bx bx-error-alt"></i>Reject
                            </button>
                        </a>
                        @endforeach
                        

                        {{-- Modal Pop Up Edit --}}
                        <div wire:ignore.self class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <form wire:submit.prevent="submitConfirmDamage" action="" method="post" class="container-fluid">
                                            <div class="mb-3" hidden>
                                                <div class="input-group input-group-merge">
                                                    <span id="id_barang" class="input-group-text"><i class="bx bx-package"></i></span>
                                                    <input wire:model.lazy="updatedID" type="text" class="form-control" id="id_barang" name="id_barang" value="{{$damage->nama_barang}}" disabled/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="nama">Item</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="nama_barang" class="input-group-text"><i class="bx bx-package"></i></span>
                                                    <input wire:model.lazy="updatedNamaBarang" type="text" class="form-control" id="nama_barang" placeholder="{{$damage->nama_barang}}" disabled/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="id_kategori">Category</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="id_kategori" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input wire:model.lazy="updatedKategori" type="text" class="form-control" placeholder="{{$damage->kategori}}" disabled/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="rak">Rack</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="rak" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input wire:model.lazy="updatedRak" type="text" class="form-control" placeholder="{{$damage->rak}}" disabled/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="gudang">Warehouse</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="gudang" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input wire:model.lazy="updatedWarehouse" type="text" class="form-control" placeholder="{{$damage->gudang}}" disabled/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="outlet">Outlet</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="nama" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input type="text" wire:model.lazy="updatedOutlet" class="form-control" placeholder="{{$damage->nama}}" disabled/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="catatan">Notes</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="catatan" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input type="text" wire:model.lazy="updatedCatatan" class="form-control" disabled/>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="keluar">Out Date</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="keluar" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input type="datetime-local" class="form-control" wire:model="updatedKeluar" name="keluar" required/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="kembali">Back Date</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="kembali" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input type="datetime-local" class="form-control" wire:model="updatedKembali" name="kembali" required/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="lokasi">Repair Location</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="lokasi" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input type="text" class="form-control" wire:model.lazy="updatedLokasi" name="lokasi" required/>
                                                </div>
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