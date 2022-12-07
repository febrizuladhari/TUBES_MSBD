<div>
    <div class="row">
        <div class="col-4 mx-4 mb-2">
            <input type="search" wire:model="search" class="form-control mb-4" placeholder="Search Account ...">
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
                            {{ "Pria" }}
                        @else
                            {{ "Wanita" }}
                        @endif
                    </td>
                    <td>{{ $user->alamat }}</td>
                    <td>{{ $user->no_telp }}</td>
                    <td>
                        {{ $user->id_outlet }}
                    </td>
                    <td>
                        {{-- Edit --}}
                        <button wire:click="{{ route('accounts_edit', $user->id) }}" type="button" class="btn btn-info">
                            <i class="menu-icon tf-icons bx bxs-edit"></i>Edit
                        </button>
                        {{-- <a href="{{ route('accounts_edit', $user->id) }}">
                            <button type="button" class="btn btn-info me-3">
                                <i class="menu-icon tf-icons bx bxs-edit"></i>Edit
                            </button>
                        </a> --}}

                        {{-- Delete --}}
                        <button wire:click="destroy({{ $user->id }})" type="button" class="btn btn-danger">
                            <i class="menu-icon tf-icons bx bxs-trash"></i>Delete
                        </button>
                    </td>
                </tr>
                @endforeach
                {{-- Search if not match --}}
                @if ($users->count() == 0)
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
