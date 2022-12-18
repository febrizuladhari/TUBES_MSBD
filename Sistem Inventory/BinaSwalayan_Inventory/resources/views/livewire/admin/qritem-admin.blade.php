<div>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
            <!-- List Items -->
            <div class="card">
                <div class="container">

                    <div class="row mt-3">
                        <div class="col-8">
                            <h5 class="card-header">List Items With QR Code</h5>
                        </div>
                        <div class="col-4">
                            <div class="demo-inline-spacing d-flex justify-content-end">
                                <a href="{{ url('cetakqrcodebarang') }}">
                                    <button type="button" class="btn btn-outline-primary data-bs-dismiss="modal"><i class='bx bxs-file-pdf me-1'></i>Print PDF</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mt-4 d-flex justify-content-end">
                            <div class="demo-inline-spacing">
                                <input type="search" wire:model="searchadmin" class="form-control mb-4" placeholder="Search Item ..." style="width:300px;">
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive text-nowrap mt-4">
                        <br>
                        <table class="table table-responsive table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Rack</th>
                                    <th>Warehouse</th>
                                    <th>Outlet</th>
                                    <th>QR Item</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                            @foreach($datas as $barang)
                            <tr>
                                <td>{{ $barang->id }}</td>
                                <td><strong>{{ $barang->Nama }}</strong></td>
                                <td>{{ $barang->Kategori }}</td>
                                <td>{{ $barang->Rak }}</td>
                                <td>{{ $barang->Gudang }}</td>
                                <td>{{ $barang->Outlet }}</td>
                                <td>
                                    {{-- {!! QrCode::generate($barang->id); !!} --}}
                                    {{-- {!! QrCode::format('png')->merge(public_path('logo.png'), 0.3, true)->generate($barang->id); !!} --}}
                                    {{-- <img src="{!! QrCode::size(300)->generate($barang->id) !!}"> --}}
                                    {{-- <img src="{!! QrCode::format('png')->size(300)->generate($barang->id) !!}"> --}}
                                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge(public_path('logo.png'), 0.4, true)->size(150)->errorCorrection('H')->generate($barang->id)) !!} ">
                                    {{-- <img src="data:image/png;base64, {!! base64_encode($image) !!} "> --}}

                                </td>
                            </tr>
                            @endforeach

                                {{-- Search if data not match --}}
                                @if ($datas->count() === 0)
                                <div class="alert alert-danger mx-4" role="alert">
                                    Data not found! Try another keyword
                                </div>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <div class="row my-4">
                        <div class="d-flex justify-content-center">
                            {{$datas->Links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
