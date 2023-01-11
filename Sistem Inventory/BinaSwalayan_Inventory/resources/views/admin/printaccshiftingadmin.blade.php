@if(auth()->user()->level == 'admin')
    @extends('layout.layoutadmin')
@elseif(auth()->user()->level == 'superadmin')
    @extends('layout.layoutsuperadmin')
@endif

@section('title')
    @if(auth()->user()->level == 'admin')
        <title>Print Request Shifting Items - Admin</title>
    @elseif(auth()->user()->level == 'superadmin')
        <title>Print Request Shifting Items - Super Admin</title>
    @endif

@endsection

@section('content')
@livewireStyles
    <!-- Konten -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h3 class="fw-bold py-3">Print Request Shifting Items</h3>
            <hr class="my-4">


            <!-- Form Print Request Shifting Items -->
            <div class="card">
                @if(auth()->user()->level == 'admin')
                    <h5 class="card-header">Print Request Shifting Items With Admin Authority</h5>
                @elseif(auth()->user()->level == 'superadmin')
                    <h5 class="card-header">Print Request Shifting Items With Super Admin Authority</h5>
                @endif

                <div class="container-fluid">

                    <div class="row my-4">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="startDate">Start Date</label>
                                <div class="input-group input-group-merge">
                                    {{-- <span id="startDate" class="input-group-text"><i class="bx bx-package"></i></span> --}}
                                    <input type="datetime-local" name="startDate" id="startDate" class="form-control @error('startDate') is-invalid @enderror" required/>
                                    @error('startDate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="endDate">End Date</label>
                                <div class="input-group input-group-merge">
                                    {{-- <span id="endDate" class="input-group-text"><i class="bx bx-package"></i></span> --}}
                                    <input type="datetime-local" name="endDate" id="endDate" class="form-control @error('endDate') is-invalid @enderror" required/>
                                    @error('endDate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col my-4">
                                @if(auth()->user()->level == 'admin')
                                    <a href="" onclick="this.href='/printaccshiftingpdf/' + document.getElementById('startDate').value + '/' + document.getElementById('endDate').value" target="_blank">
                                        <button class="btn btn-primary d-grid w-100 fw-bold" type="button">Print Report</button>
                                    </a>
                                @elseif(auth()->user()->level == 'superadmin')
                                    <a href="" onclick="this.href='/printaccshiftingpdf_sa/' + document.getElementById('startDate').value + '/' + document.getElementById('endDate').value" target="_blank">
                                        <button class="btn btn-primary d-grid w-100 fw-bold" type="button">Print Report</button>
                                    </a>
                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>

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
