<div>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>User</th>
                    <th>Outlet</th>
                    <th class="d-flex justify-content-center">Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($incomings as $incoming)
                <tr>
                    <td>{{$incoming->id}}</td>
                    <td><strong>{{$incoming->nama_barang}}</strong></td>
                    <td>{{$incoming->kategori}}</td>
                    <td>{{$incoming->user}}</td>
                    <td>{{$incoming->asal}}</td>
                    <td>
                        <!-- Modal Confirm Button -->
                        <a href="#">
                        <button type="button" class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#basicModal1">
                            <i class="menu-icon tf-icons bx bxs-badge-check"></i>Confirm
                        </button>
                        </a>
    
                        <!-- Modal Reject Button -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal2">
                            <i class="menu-icon tf-icons bx bx-error-alt"></i>Reject
                        </button>
    
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
                                        <button wire:click="destroy({{ $incoming->id }})" type="submit" class="btn btn-warning">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
