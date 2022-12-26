<div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-8">
                <h5 class="card-header">Damaged Items Request List</h5>
            </div>
            <div class="col-4">
                <div class="demo-inline-spacing d-flex justify-content-end">

                    @if(auth()->user()->level == 'admin')
                        <a href="{{ url('cetaklaporanrusak') }}">
                            <button type="button" class="btn btn-outline-primary btn-lg"><i class='bx bxs-file-pdf me-1'></i>Print PDF</button>
                        </a>
                    @elseif(auth()->user()->level == 'superadmin')
                        <a href="{{ url('cetaklaporanrusak_sa') }}">
                            <button type="button" class="btn btn-outline-primary btn-lg"><i class='bx bxs-file-pdf me-1'></i>Print PDF</button>
                        </a>
                    @endif

                </div>
            </div>
        </div>

        <div class="table-responsive text-nowrap mb-4">
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
                    {{-- If data empty --}}
                    @if ($damages->count() === 0)
                    <div class="alert alert-danger mx-4" role="alert">
                        Data is empty!
                    </div>
                    @else

                    @foreach ($damages as $damage)
                    <tr>
                        <td><strong>{{ $damage->id }}</strong></td>
                        <td>{{ $damage->nama_barang }}</td>
                        <td>{{ $damage->kategori }}</td>
                        <td>{{ $damage->rak }}</td>
                        <td>{{ $damage->gudang }}</td>
                        <td>{{ $damage->nama }}</td>
                        <td class="d-flex justify-content-center">

                            {{-- Confirm --}}
                            <button wire:click="confirmDamage({{$damage->id}})" type="button" class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                <i class="menu-icon tf-icons bx bxs-badge-check"></i>Confirm
                            </button>

                            {{-- Delete --}}
                                <button type="button" wire:click="destroy({{ $damage->id }})" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal2">
                                    <i class="menu-icon tf-icons bx bx-error-alt"></i>Reject
                                </button>
                            </a>
                    @endforeach

                            <!-- Modal Delete Popup -->
                            <div wire:ignore.self class="modal fade" id="basicModal2" tabindex="-1" role="dialog" aria-labelledby="modalCenterLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterLabel">Delete Confirm</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to reject this item?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"> No </button>
                                            <button type="button" wire:click.prevent="destroyer()" class="btn btn-danger close-modal" data-dismiss="modal">Reject</button>
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

                            {{-- Modal Confirm --}}
                            <div wire:ignore.self class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <form wire:submit.prevent="submitConfirmDamage" action="" method="post" class="container-fluid">
                                            {{-- @foreach ($damages as $damage) --}}
                                            <div class="mb-3" hidden>
                                                    <div class="input-group input-group-merge">
                                                        <span id="id_barang" class="input-group-text"><i class="bx bx-package"></i></span>
                                                        <input wire:model.lazy="updatedID" type="text" class="form-control" id="id_barang" name="id_barang" value="{{$damage->nama_barang}}" disabled="disabled"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="nama">Item</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="nama_barang" class="input-group-text"><i class="bx bx-package"></i></span>
                                                        <input wire:model.lazy="updatedNamaBarang" type="text" class="form-control" id="nama_barang" placeholder="{{$damage->nama_barang}}" disabled="disabled"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="id_kategori">Category</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="id_kategori" class="input-group-text"><i class="bx bx-category-alt"></i></span>
                                                        <input wire:model.lazy="updatedKategori" type="text" class="form-control" placeholder="{{$damage->kategori}}" disabled="disabled"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="rak">Rack</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="rak" class="input-group-text"><i class="bx bx-list-ol"></i></span>
                                                        <input wire:model.lazy="updatedRak" type="text" class="form-control" placeholder="{{$damage->rak}}" disabled="disabled"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="gudang">Warehouse</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="gudang" class="input-group-text"><i class="bx bx-building-house"></i></span>
                                                        <input wire:model.lazy="updatedWarehouse" type="text" class="form-control" placeholder="{{$damage->gudang}}" disabled="disabled"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="outlet">Outlet</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="nama" class="input-group-text"><i class="bx bx-store"></i></span>
                                                        <input type="text" wire:model.lazy="updatedOutlet" class="form-control" placeholder="{{$damage->nama}}" disabled="disabled"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="catatan">Notes</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="catatan" class="input-group-text"><i class="bx bx-note"></i></span>
                                                        <input type="text" wire:model.lazy="updatedCatatan" class="form-control" disabled="disabled"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="keluar">Out Date</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="keluar" class="input-group-text"><i class='bx bx-calendar-exclamation' ></i></span>
                                                        <input type="datetime-local" class="form-control" wire:model="updatedKeluar" name="keluar" required/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="kembali">Back Date</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="kembali" class="input-group-text"><i class='bx bx-calendar-check' ></i></span>
                                                        <input type="datetime-local" class="form-control" wire:model="updatedKembali" name="kembali" required/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="lokasi">Repair Location</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="lokasi" class="input-group-text"><i class='bx bx-location-plus' ></i></span>
                                                        <input type="text" class="form-control" wire:model.lazy="updatedLokasi" name="lokasi" required/>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Confirm Damaged</button>
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
                {{$damages->Links()}}
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
