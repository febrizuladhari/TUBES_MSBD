@extends('layout.layoutsuperadmin')

@section('title')
    <title>History Items - Super Admin</title>
@endsection

@section('content')
@livewireStyles

    <!-- Konten -->
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">History Shifting Items</h3>
            <hr class="my-3">

            <div class="nav-align-top mb-4">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                        <!-- Log Update Items -->
                        <div class="card">
                            <div class="container">
                                <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">

                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-header">History Shifting Items</h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="demo-inline-spacing d-flex justify-content-end">

                                                <a href="{{ url('exportlogupdatebarang_sa') }}">
                                                    <button type="button" class="btn btn-outline-primary data-bs-dismiss="modal"><i class='bx bxs-file me-1'></i>Export Excel</button>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <br>
                                        <table class="table table-responsive table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Items ID</th>
                                                    <th>Outlet peminjam</th>
                                                    <th>tanggal keluar</th>
                                                    <th>tanggal kembali</th>
                                                    <th>user</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @foreach ($pinjams as $rusak)
                                                <tr>
                                                    <td>{{$rusak->id}}</td>
                                                    <td>{{$rusak->id_barang}}</td>
                                                    <td>{{$rusak->id_outlet_peminjam}}</td>
                                                    <td>{{$rusak->tanggal_keluar}}</td>
                                                    <td>{{$rusak->tanggal_kembali}}</td>
                                                    <td>{{$rusak->nama}}</td>
                                                    @endforeach
                                                </tr>
                                                
                                                    
                                                {{-- @endforeach --}}
                                                {{-- @foreach ($logUpdateBarangs as $logUpdateBarang)
                                                <tr>
                                                    <td>{{ $logUpdateBarang->id_barang }}</td>
                                                    <td>{{ $logUpdateBarang->nama_updated }}</td>
                                                    <td>{{ $logUpdateBarang->nama_old }}</td>
                                                    <td>{{ $logUpdateBarang->id_kategori_updated }}</td>
                                                    <td>{{ $logUpdateBarang->id_kategori_old }}</td>
                                                    <td>{{ $logUpdateBarang->id_Rak_updated }}</td>
                                                    <td>{{ $logUpdateBarang->id_Rak_old }}</td>
                                                    <td>{{ $logUpdateBarang->id_Supplier_updated }}</td>
                                                    <td>{{ $logUpdateBarang->id_Supplier_old }}</td>
                                                    <td>{{ $logUpdateBarang->updated_at }}</td>
                                                @endforeach
                                                </tr> --}}

                                                {{-- if the data doesn't exist yet --}}
                                                @if ($pinjams->count() === 0)
                                                <div class="alert alert-danger mx-4" role="alert">
                                                    It looks like this log doesn't have any data
                                                </div>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <div class="container-xxl flex-grow-1 container-p-y">
          <h3 class="fw-bold py-3">History Broken Items</h3>
          <hr class="my-3">

          <div class="nav-align-top mb-4">
              <div class="tab-content">
                  <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                      <!-- Log Update Items -->
                      <div class="card">
                          <div class="container">
                              <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">

                                  <div class="row">
                                      <div class="col-6">
                                          <h5 class="card-header">History Items</h5>
                                      </div>
                                      <div class="col-6">
                                          <div class="demo-inline-spacing d-flex justify-content-end">

                                              <a href="{{ url('exportlogupdatebarang_sa') }}">
                                                  <button type="button" class="btn btn-outline-primary data-bs-dismiss="modal"><i class='bx bxs-file me-1'></i>Export Excel</button>
                                              </a>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="table-responsive text-nowrap">
                                      <br>
                                      <table class="table table-responsive table-hover table-striped">
                                          <thead>
                                              <tr>
                                                  <th>ID</th>
                                                  <th>id barang</th>
                                                  <th>Broken Date</th>
                                                  <th>Good Date</th>
                                                  <th>Location</th>
                                                  <th>Note</th>
                                              </tr>
                                          </thead>
                                          <tbody class="table-border-bottom-0">
                                              @foreach ($rusaks as $rusak)
                                              <tr>
                                                  <td>{{$rusak->id}}</td>
                                                  <td>{{$rusak->id_barang}}</td>
                                                  <td>{{$rusak->tanggal_rusak}}</td>
                                                  <td>{{$rusak->tanggal_bagus}}</td>
                                                  <td>{{$rusak->lokasi}}</td>
                                                  <td>{{$rusak->catatan}}</td>
                                                  @endforeach
                                              </tr>
                                              
                                                  
                                              {{-- @endforeach --}}
                                              {{-- @foreach ($logUpdateBarangs as $logUpdateBarang)
                                              <tr>
                                                  <td>{{ $logUpdateBarang->id_barang }}</td>
                                                  <td>{{ $logUpdateBarang->nama_updated }}</td>
                                                  <td>{{ $logUpdateBarang->nama_old }}</td>
                                                  <td>{{ $logUpdateBarang->id_kategori_updated }}</td>
                                                  <td>{{ $logUpdateBarang->id_kategori_old }}</td>
                                                  <td>{{ $logUpdateBarang->id_Rak_updated }}</td>
                                                  <td>{{ $logUpdateBarang->id_Rak_old }}</td>
                                                  <td>{{ $logUpdateBarang->id_Supplier_updated }}</td>
                                                  <td>{{ $logUpdateBarang->id_Supplier_old }}</td>
                                                  <td>{{ $logUpdateBarang->updated_at }}</td>
                                              @endforeach
                                              </tr> --}}

                                              {{-- if the data doesn't exist yet --}}
                                              @if ($pinjams->count() === 0)
                                              <div class="alert alert-danger mx-4" role="alert">
                                                  It looks like this log doesn't have any data
                                              </div>
                                              @endif

                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>


      </div>

    </div>

    <!-- Content wrapper -->


        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mx-auto">
                    ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    , <strong>Bina Swalayan Inventory</strong>
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->


@endsection

@section('script')
@livewireScripts

@endsection
