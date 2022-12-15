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
                    <div>
                        
                            <!-- CSS -->
    <style type="text/css">
        .search-box .clear{
            clear:both;
            margin-top: 20px;
        }
    
        .search-box ul{
            list-style: none;
            padding: 0px;
            width: 250px;
            position: absolute;
            margin: 0;
            background: white;
        }
    
        .search-box ul li{
            background: lavender;
            padding: 4px;
            margin-bottom: 1px;
        }
    
        .search-box ul li:nth-child(even){
            background: cadetblue;
            color: white;
        }
    
        .search-box ul li:hover{
            cursor: pointer;
        }
    
        .search-box input[type=text]{
            padding: 5px;
            width: 250px;
            letter-spacing: 1px;
        }
        </style>               
                            <!-- Modal Confirm Popup -->
                            <div wire:ignore.self class="modal fade" id="basicModal1" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <form wire:submit.prevent="submitEdit" action="" method="post" class="container-fluid">
                                                <h5 class="card-title">Item Requested</h5>
                                                <div class="card" style="width: 16rem;">
                                                    <div class="card-body">
                                                      
                                                      @foreach ($needItems as $items)
                                                        <p>{{$items->nama_barang}}</p>
                                                      @endforeach
                                                      <p class="card-text"></p>
                                                    </div>
                                                </div>
                                                  
                                                <div class="w-48">
                                                    <label class="font-bold" for="user-name">Search for User</label>
                                                    <div class="search-box">
                                                        <input type='text' wire:model="search" wire:keyup="searchResult">
                                                
                                                        <!-- Search result list -->
                                                        @if(!empty($records))
                                                            <ul >
                                                                
                                                                    @foreach($records as $record)
                                                
                                                                         <li wire:click="fetchItemDetail({{ $record->id }})">{{ $record->Nama}}-{{$record->Outlet}}</li>
                                                
                                                                    @endforeach
                                                                
                                                            </ul>
                                                        @endif
                                                
                                                        <div class="clear"></div>
                                                        <div >
                                                            @if(!empty($empDetails))
                                                                <div>
                                                                     Name : {{ $empDetails->Nama }} <br>
                                                                     Email : {{ $empDetails->id }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                {{-- {{$selectedUser}}
                                                {{$selectedOutlet}}
                                                {{$selectedWarehouse}}
                                                {{$selectedRack}}
                                                {{$selectedTanggal}} --}}
                                                

                                                {{-- @if(!is_null($gudangs))
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
                                                </div> --}}
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
