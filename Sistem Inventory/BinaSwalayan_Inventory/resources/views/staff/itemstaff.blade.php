@extends('layout.layoutadmin')

@section('title')
    <title>Home - Admin</title>
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
  <h3 class="fw-bold py-3">List Item</h3>
  <hr class="my-4">

    <div class=" my-3">
    <div class="col-xl">
      <div class="nav-align-top">
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
              {{-- <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger">3</span> --}}
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
          {{-- <li class="nav-item">
            <button
              type="button"
              class="nav-link"
              role="tab"
              data-bs-toggle="tab"
              data-bs-target="#navs-justified-messages"
              aria-controls="navs-justified-messages"
              aria-selected="false"
            >
              <i class="tf-icons bx bx-message-square"></i> Messages
            </button>
          </li> --}}
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
            <!-- Basic Bootstrap Table -->
            {{-- dropdown kategori --}}
            <div class="mx-4 mb-3">
              <button
                type="button"
                class="btn btn-outline-secondary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >
                Kategori
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:void(0);">Elektronik</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Elektronik</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
              </ul>
            </div>
            {{-- end dropdown kategori --}}

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
    <!--/ Basic Bootstrap Table -->
          </div>


          <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
            <div class="table-responsive text-nowrap">
              <!-- Basic Bootstrap Table -->
            {{-- dropdown kategori --}}
            <div class="mx-4 mb-3">
              <button
                type="button"
                class="btn btn-outline-secondary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >
                Kategori
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:void(0);">Elektronik</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Elektronik</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
              </ul>
            </div>
            {{-- end dropdown kategori --}}

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
          {{-- <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
            <p>
              Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
              cupcake gummi bears cake chocolate.
            </p>
            <p class="mb-0">
              Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
              roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
              jelly-o tart brownie jelly.
            </p>
          </div> --}}
        </div>
      </div>
    </div>
    </div>


@endsection

@section('script')

@endsection