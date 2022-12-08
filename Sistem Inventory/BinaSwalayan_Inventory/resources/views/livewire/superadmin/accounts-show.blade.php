<div>
    <div class="row">
        <div class="col-4 mx-4 mb-2">
            <input type="text" wire:model="search" class="form-control mb-4" placeholder="Search Account ...">
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-responsive table-hover table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Outlet</th>
                    <th class="d-flex justify-content-center">Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)
                <tr>
                    <td><strong>{{ $user->nama }}</strong></td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->level }}</td>
                    <td>
                        @if($user->jenis_kelamin == 'P')
                            {{ "Male" }}
                        @else
                            {{ "Female" }}
                        @endif
                    </td>
                    <td>{{ $user->alamat }}</td>
                    <td>{{ $user->no_telp }}</td>
                    <td>
                        {{-- {{ $user->nama }} --}}
                        {{ $user->id_outlet }}
                    </td>
                    <td>
                        {{-- Edit --}}
                        <button wire:click="formUpdate({{ $user->id }})" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalScrollable">
                            <i class="menu-icon tf-icons bx bxs-edit"></i>Edit
                        </button>

                        {{-- Delete --}}
                        <button wire:click="id_delete({{ $user->id }})" type="button" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#modalCenter">
                            <i class="menu-icon tf-icons bx bxs-trash"></i>Delete
                        </button>

                    @endforeach

                    </td>
                </tr>

                <!-- Modal Delete User Popup -->
                <div wire:ignore.self class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="modalCenterLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterLabel">Delete Confirm</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this user?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"> Close </button>
                                <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-dismiss="modal">Yes, Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Edit User Popup -->
                <div wire:ignore.self class="modal fade" id="modalScrollable" tabindex="-1" aria-labelledby="modalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <div class="modal-header"></div>
                        <h4 class="modal-title container-fluid" id="modalScrollableTitle">Update this user</h4>
                            <div class="modal-body">
                                <form wire:submit.prevent="sendUpdate" class="container-fluid">

                                    <div class="mb-3">
                                        <label class="form-label" for="nama">Name</label>
                                        <div class="input-group input-group-merge">
                                            <span id="nama" class="input-group-text"><i class="bx bx-user"></i></span>
                                            <input wire:model.lazy="nama_update" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Name" required/>
                                            @error('nama')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="level">Level</label>
                                                    <select wire:model.lazy="level_update" id="level" class="select2 form-select">
                                                        <option value="admin">Admin</option>
                                                        <option value="staff">Staff</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="jenis_kelamin">Gender</label>
                                                <select wire:model.lazy="jenis_kelamin_update" id="jenis_kelamin" class="select2 form-select">
                                                    <option value="P">Male</option>
                                                    <option value="W">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="outlet">Address</label>
                                        <div class="input-group input-group-merge">
                                            <span id="alamat" class="input-group-text"><i class="bx bx-store"></i></span>
                                            <input wire:model.lazy="alamat_update" type="text" class="form-control @error('alamat') is-invalid @enderror" placeholder="Address" required/>
                                            @error('alamat')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="id_outlet">Outlet</label>
                                                <select wire:model.lazy="id_outlet_update" id="id_outlet" class="select2 form-select">
                                                @foreach($outlets as $outlet)
                                                <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="phone">Phone Number</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text">ID (+62)</span>
                                                    <input wire:model.lazy="no_telp_update" type="text" class="form-control @error('no_telp') is-invalid @enderror" required/>
                                                    @error('no_telp')
                                                        <span class="invalid-feedback">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                    </div>
                </div>

                {{-- Search if data not match --}}
                @if ($users->count() === 0)
                <div class="alert alert-danger mx-4" role="alert">
                    Data not found!
                </div>
                @endif
            </tbody>
        </table>
    </div>
    <div class="row my-4">
        <div class="d-flex justify-content-center">
            {{ $users->Links() }}
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
