<div>
    <div class="card">
        <div class="container">
            <div class="row mt-3">
                <div class="col-8">
                    <h5 class="card-header">List of shifting items pending approval</h5>
                </div>
                <div class="col-4">
                    <div class="demo-inline-spacing d-flex justify-content-end">
                        @if ($pinjams->count() === 0)
                            <div></div>
                        @else
                            @if(auth()->user()->level == 'admin')
                                <a href="{{ url('cetakrequestperpindahan') }}">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><i class='bx bxs-file-pdf me-1'></i>Print PDF</button>
                                </a>
                            @elseif(auth()->user()->level == 'superadmin')
                                <a href="{{ url('cetakrequestperpindahan_sa') }}">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><i class='bx bxs-file-pdf me-1'></i>Print PDF</button>
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>

            <div class="table-responsive text-nowrap mb-4">
                <br>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Outlet</th>
                            <th>Location</th>
                            <th>Requester</th>
                            <th class="d-flex justify-content-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        {{-- If data empty --}}
                        @if ($pinjams->count() === 0)
                        <div class="alert alert-danger mx-4" role="alert">
                            Data is empty!
                        </div>
                        @else

                        @foreach($pinjams as $pinjam)
                        <tr>
                            <td>{{$pinjam->id}}</td>
                            <td><strong>{{$pinjam->nama_barang}}</strong></td>
                            <td>{{$pinjam->kategori}}</td>
                            <td>{{$pinjam->outlet}}</td>
                            <td>{{$pinjam->gudang}}</td>
                            <td>{{$pinjam->USER}}</td>
                            <td class="d-flex justify-content-center">
                                <!-- Modal Confirm Button -->
                                <button wire:click="onAcc({{$pinjam->id}})" type="button" class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#basicModal1">
                                    <i class="menu-icon tf-icons bx bxs-badge-check"></i>Confirm
                                </button>

                                <!-- Modal Reject Button -->
                                <button wire:click="confirmDelete({{$pinjam->id}})" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal2">
                                    <i class="menu-icon tf-icons bx bx-error-alt"></i>Reject
                                </button>
                        @endforeach

                                <!-- Modal Reject Popup -->
                                <div wire:ignore.self class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
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
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                                                <button wire:click.prevent="delete()" type="button" class="btn btn-danger">Reject</button>
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

                                {{-- Style Confirm --}}
                                <style type="text/css">
                                    .search-box .clear{
                                        clear:both;
                                        margin-top: 20px;
                                    }

                                    .search-box ul{
                                        list-style: none;
                                        padding: 0px;
                                        width: 80%;
                                        position: absolute;
                                        margin: 0;
                                        background: white;
                                    }

                                    .search-box ul li{
                                        background: rgb(255, 255, 255);
                                        color: rgb(0, 0, 0);
                                        padding: 4px;
                                        margin-bottom: 1px;
                                    }

                                    .search-box ul li:nth-child(even){
                                        background: rgb(255, 255, 255);
                                        color: rgb(0, 0, 0);
                                    }

                                    .search-box ul li:hover{
                                        cursor: pointer;
                                    }

                                    .search-box input[type=text]{
                                        padding: 5px;
                                        width: 100%;
                                        letter-spacing: 1px;
                                    }

                                </style>

                                <!-- Modal Confirm Popup -->
                                <div wire:ignore.self class="modal fade" id="basicModal1" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <form action="" class="container-fluid">
                                                    <h5 class="card-header d-flex justify-content-center">Item Requested to Shift</h5>

                                                        @foreach ($needItems as $items)
                                                            <div class="mb-3">
                                                                <label class="form-label" for="nama_barang">Item</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span id="nama_barang" class="input-group-text"><i class="bx bx-package"></i></span>
                                                                    <input type="text" class="form-control" id="nama_barang" value="{{$items->nama_barang}}" disabled="disabled"/>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="kategori">Category</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span id="kategori" class="input-group-text"><i class='bx bx-category-alt'></i></span>
                                                                    <input type="text" class="form-control" id="kategori" value="{{$items->kategori}}" disabled="disabled"/>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="USER">Requester</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span id="USER" class="input-group-text"><i class="bx bx-user"></i></span>
                                                                    <input type="text" class="form-control" id="USER" value="{{$items->USER}}" disabled="disabled"/>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="outlet">Outlet</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span id="outlet" class="input-group-text"><i class='bx bx-store'></i></span>
                                                                    <input type="text" class="form-control" id="outlet" value="{{$items->outlet}}" disabled="disabled"/>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gudang">Warehouse</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span id="gudang" class="input-group-text"><i class='bx bx-building-house'></i></span>
                                                                    <input type="text" class="form-control" id="gudang" value="{{$items->gudang}}" disabled="disabled"/>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="rak">Rack</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span id="rak" class="input-group-text"><i class="bx bx-list-ul"></i></span>
                                                                    <input type="text" class="form-control" id="rak" value="{{$items->rak}}" disabled="disabled"/>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                        {{-- Search Requested Item --}}
                                                        {{-- <div class="mb-3">
                                                            <label class="form-label" for="search">Search Requested Item</label>
                                                            <div class="input-group input-group-merge">
                                                                <span id="search" class="input-group-text"><i class="bx bx-package"></i></span>
                                                                <input type="text" class="form-control" id="search" wire:model="search" wire:keyup="searchResult"/>
                                                                <!-- Search result list -->
                                                                @if(!empty($records))
                                                                    <ul>
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
                                                                            Items Name  : {{ $empDetails->Nama }}<br>
                                                                            Outlet      : {{ $empDetails->Outlet }}<br>
                                                                            Warehouse   : {{ $empDetails->Gudang }}<br>
                                                                            Rack        : {{ $empDetails->Rak }}<br>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div> --}}

                                                        {{-- <div class="search-box">
                                                            <input type='text' wire:model="search" wire:keyup="searchResult">

                                                            <!-- Search result list -->
                                                            @if(!empty($records))
                                                                <ul>
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
                                                                        Items Name  : {{ $empDetails->Nama }}<br>
                                                                        Outlet      : {{ $empDetails->Outlet }}<br>
                                                                        Warehouse   : {{ $empDetails->Gudang }}<br>
                                                                        Rack        : {{ $empDetails->Rak }}<br>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div> --}}

                                                        <div class="mb-3">
                                                            <label class="font-bold" for="user-name">Search Item Requested</label>
                                                            <div class="search-box">
                                                                <input type='text' wire:model="search" wire:keyup="searchResult">

                                                                <!-- Search result list -->
                                                                @if(!empty($records))
                                                                    <ul >
                                                                        @foreach($records as $record)
                                                                            <li wire:click="fetchItemDetail({{ $record->id }})">{{ $record->Nama }}&nbsp;-&nbsp;{{ $record->Outlet }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif

                                                                <div class="clear"></div>
                                                                <div >
                                                                    @if(!empty($empDetails))
                                                                        <div>
                                                                            <div class="card border-success shadow-lg p-3 mb-5 bg-body rounded my-3">
                                                                                <div class="container-fluid">
                                                                                    <div class="card-body">
                                                                                        <h4 class="d-flex justify-content-center">Item to be Shift</h4>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label" for="nama_barang">Item</label>
                                                                                            <div class="input-group input-group-merge">
                                                                                                <input type="text" class="form-control" id="nama_barang" value="{{ $empDetails->Nama }}" disabled="disabled"/>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label" for="kategori">Category</label>
                                                                                            <div class="input-group input-group-merge">
                                                                                                <input type="text" class="form-control" id="kategori" value="{{ $empDetails->Kategori }}" disabled="disabled"/>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label" for="outlet">Outlet</label>
                                                                                            <div class="input-group input-group-merge">
                                                                                                <input type="text" class="form-control" id="outlet" value="{{ $empDetails->Outlet }}" disabled="disabled"/>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label" for="gudang">Warehouse</label>
                                                                                            <div class="input-group input-group-merge">
                                                                                                <input type="text" class="form-control" id="gudang" value="{{ $empDetails->Gudang }}" disabled="disabled"/>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label" for="rak">Rack</label>
                                                                                            <div class="input-group input-group-merge">
                                                                                                <input type="text" class="form-control" id="rak" value="{{ $empDetails->Rak }}" disabled="disabled"/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button wire:click="submitAcc({{$empDetails}},{{$items}})" type="submit" class="btn btn-primary">Confirm Request</button>
                                                        </div>
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
                    {{$pinjams->Links()}}
                </div>
            </div>
        </div>
    </div>
</div>
