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
                                            <form action="" class="container-fluid">
                                                <h5 class="card-title">Item Requested</h5>

                                                      @foreach ($needItems as $items)
                                                        <p>{{$items->nama_barang}}</p>
                                                        <p>Category :{{$items->kategori}}</p>
                                                        <p>User     :{{$items->USER}}</p>
                                                        <p>Outlet   :{{$items->outlet}} - {{$items->gudang}} - {{$items->rak}}</p>





                                                      @endforeach

                                                <div class="w-48">
                                                    <label class="font-bold" for="user-name">Search Items</label>
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
                                                                    <h4>Item Details</h4>
                                                                    Item Id     : {{ $empDetails->id }}<br>
                                                                    Items Name  : {{ $empDetails->Nama }} <br>
                                                                    Outlet      : {{ $empDetails->Outlet}}<br>
                                                                    Warehouse   : {{ $empDetails->Gudang}}<br>
                                                                    Rack        : {{$empDetails->Rak}}<br>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button wire:click="submitAcc({{$empDetails}},{{$items}})" type="submit" class="btn btn-primary">Acc Request</button>
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
