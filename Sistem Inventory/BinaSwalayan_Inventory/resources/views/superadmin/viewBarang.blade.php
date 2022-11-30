@extends('layout.layoutsuperadmin')

@section('title')
    <title>View Barang - Superadmin</title>
@endsection

@section('content')

    <!-- Konten -->

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="mt-4 mx-4">
        <div class="nav-align-top mb-4">
          <ul class="nav nav-tabs nav-fill" role="tablist">
            <li class="nav-item">
              <button
                type="button"
                class="nav-link active"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-justified-home"
                aria-controls="navs-justified-home"
                aria-selected="true"
              >
                <i class="tf-icons bx bx-home"></i> Outlet 1
              </button>
            </li>
            <li class="nav-item">
              <button
                type="button"
                class="nav-link"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-justified-profile"
                aria-controls="navs-justified-profile"
                aria-selected="false"
              >
                <i class="tf-icons bx bx-user"></i> Outlet 2
              </button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
              <div class="table-responsive text-nowrap">
                <table class="table">
                  {{-- judul table --}}
                  <thead>
                    <tr>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Gudang</th>
                      <th>Lokasi</th>
                      <th>Rak</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  {{-- end judul table --}}
  
                  {{-- isi table --}}
                  <tbody class="table-border-bottom-0">
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> KD001</td>
                      <td>Rak eceknya</td>
                      <td>1</td>
                      <td>Lantai 1</td>
                      <td>rak 2</td>
                      <td><span class="badge bg-label-primary me-1">Bagus</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fab fa-react fa-lg text-info me-3"></i> KD002</td>
                      <td>Masih rak jg eceknya</td>
                      <td>1</td>
                      <td>Lantai 1 jg ges</td>
                      <td>rak 3</td>
                      <td><span class="badge bg-label-success me-1">Bagus xx</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-2"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-2"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> KD003</td>
                      <td>Komputer</td>
                      <td>2</td>
                      <td>Lantai 1</td>
                      <td>rak 1</td>
                      <td><span class="badge bg-label-info me-1">Ada rusak</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-2"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-2"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                  {{-- end isi table --}}
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
              <div class="table-responsive text-nowrap">
                <table class="table">
                  {{-- judul table --}}
                  <thead>
                    <tr>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Gudang</th>
                      <th>Lokasi</th>
                      <th>Rak</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  {{-- end judul table --}}
  
                  {{-- isi table --}}
                  <tbody class="table-border-bottom-0">
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> KD001</td>
                      <td>Rak eceknya</td>
                      <td>1</td>
                      <td>Lantai 1</td>
                      <td>rak 2</td>
                      <td><span class="badge bg-label-primary me-1">Bagus</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fab fa-react fa-lg text-info me-3"></i> KD002</td>
                      <td>Masih rak jg eceknya</td>
                      <td>1</td>
                      <td>Lantai 1 jg ges</td>
                      <td>rak 3</td>
                      <td><span class="badge bg-label-success me-1">Bagus xx</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-2"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-2"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> KD003</td>
                      <td>Komputer</td>
                      <td>2</td>
                      <td>Lantai 1</td>
                      <td>rak 1</td>
                      <td><span class="badge bg-label-info me-1">Ada rusak</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-2"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-2"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                  {{-- end isi table --}}
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
  


    <!-- Konten -->

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

@endsection
