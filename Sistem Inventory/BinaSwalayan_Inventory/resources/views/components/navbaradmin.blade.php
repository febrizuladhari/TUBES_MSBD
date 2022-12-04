<?php
    use App\Models\User;
    $id = auth()->user()->id;
?>
<!-- Navbar -->

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bxs-like bx-tada-hover bx-sm"></i>
    </a>
    </div>
        @if (auth()->user()->role === 'superadmin')
            <?php
                $nama = User::select('nama')->where('id', $id)->get()[0]['nama'];
            ?>
        @elseif (auth()->user()->role === 'admin')
            <?php
                $nama = User::select('nama')->where('id', $id)->get()[0]['nama'];
            ?>
        @else
            <?php
                $nama = User::select('nama')->where('id', $id)->get()[0]['nama'];
            ?>
        @endif
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        {{-- <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search-alt bxs-like bx-flashing-hover fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
            </div>
        </div> --}}
        <!-- /Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <h3 class="my-auto">Bina Swalayan Inventory</h3>
            </div>
        </div>

        <ul class="navbar-nav flex-row align-items-center ms-auto">

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ asset('img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle bxs-like bx-tada-hover" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                    <img src="{{ asset('img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <span class="fw-semibold d-block">{{ $nama }}</span>
                                <small class="text-muted">{{ auth()->user()->level }}</small>
                            </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ url('logout') }}">
                            <i class="bx bx-power-off bxs-like bx-flashing text-danger me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
