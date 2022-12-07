<div>
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
                    <td>{{ $user->jenis_kelamin }}</td>
                    <td>{{ $user->alamat }}</td>
                    <td>{{ $user->no_telp }}</td>
                    <td>{{ $user->id_outlet }}</td>
                    <td>
                        {{-- Edit --}}
                        <a href="{{ route('accounts_edit', $user->id) }}">
                            <button type="button" class="btn btn-info me-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                <i class="menu-icon tf-icons bx bxs-edit"></i>Edit
                            </button>
                        </a>

                        {{-- Delete --}}
                        <button wire:click="destroy({{ $user->id }})" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal">
                            <i class="menu-icon tf-icons bx bxs-trash"></i>Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row my-4">
        <div class="d-flex justify-content-center">
            {{$users->Links()}}
        </div>
    </div>

</div>
