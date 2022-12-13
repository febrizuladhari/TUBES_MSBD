<div>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
            <!-- List Itemms -->
            <div class="card">
                <h5 class="card-header">List Selected QR Items</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-responsive table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Rack</th>
                                <th>Warehouse</th>
                                <th>Outlet</th>
                                <th>Suppilers</th>
                                <th>QR Item</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                    @foreach($datas as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td><strong>{{ $barang->nama }}</strong></td>
                        <td>{{ $barang->Kategori }}</td>
                        <td>{{ $barang->Rak }}</td>
                        <td>{{ $barang->Gudang }}</td>
                        <td>{{ $barang->Outlet }}</td>
                        <td>{{ $barang->Supplier }}</td>
                        <td>
                            {!! QrCode::generate($barang->id); !!}
                            {{-- {!! QrCode::format('png')->merge(public_path('img/favicon/bina logo.png'), .3, true)->generate($barang->id); !!} --}}
                        </td>
                    </tr>
                    @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
