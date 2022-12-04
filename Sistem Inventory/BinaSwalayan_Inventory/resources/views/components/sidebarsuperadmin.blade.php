<!-- Sidebar -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('homesuperadmin') }}" class="app-brand-link">
        {{-- <span class="app-brand-logo demo"> --}}
            <img src="{{ asset('img/favicon/bina logo.png') }}" width="30%" alt="Logo Bina Swalayan">
            <h4 class="my-3 mx-1">Bina Swalayan</h4>
        {{-- </span> --}}
        {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Bina Swalayan</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('homesuperadmin') ? 'active' : '' }}">
            <a href="{{ route('homesuperadmin') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Account -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Authority Super Admin</span>
        </li>
        <li class="menu-item {{ Request::is('accounts') ? 'active' : '' }}">
            <a href="{{ route('accounts') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-detail bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Accounts</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Sidebar -->
