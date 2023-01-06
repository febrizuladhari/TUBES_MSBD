<!-- Sidebar -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/homeadmin" class="app-brand-link">
        {{-- <span class="app-brand-logo demo"> --}}
            <img src="{{ asset('img/favicon/bina logo.png') }}" width="30%" alt="Logo Bina Swalayan">
            <h4 class="my-3 mx-1 animate__animated animate__lightSpeedInRight"><strong> Bina Swalayan</strong></h4>
        {{-- </span> --}}
        {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Bina Swalayan</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 mt-3">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('homeadmin') ? 'active' : '' }}">
            <a href="/homeadmin" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Items</span>
        </li>
        <!-- Update Item -->
        <li class="menu-item {{ Request::is('itemadmin') ? 'active' : '' }}">
            <a href="{{ route('itemadmin') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-component bx-tada"></i>
                <div data-i18n="Analytics">Items</div>
            </a>
        </li>

        <!-- Approvement -->
        <li class="menu-item {{ Request::is('accshifting') ? 'active' : '' }} {{ Request::is('accdamaged') ? 'active' : '' }} {{ Request::is('accincoming') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-list-check bxs-like bx-tada"></i>
                <div data-i18n="Layouts">Approvement</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('accshifting') ? 'active' : '' }}">
                    <a href="{{ route('accshifting') }}" class="menu-link">
                        <div data-i18n="Without menu">Shifting Items</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('accdamaged') ? 'active' : '' }}">
                    <a href="{{ route('accdamaged') }}" class="menu-link">
                        <div data-i18n="Without navbar">Damaged Items</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('accincoming') ? 'active' : '' }}">
                    <a href="{{ route('accincoming') }}" class="menu-link">
                        <div data-i18n="Container">Incoming Items</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Authority Admin</span>
        </li>
        <li class="menu-item {{ Request::is('additem') ? 'active' : '' }}">
            <a href="{{ route('additem.edit') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-message-alt-add bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Add Item</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('listperbaikan') ? 'active' : '' }}">
            <a href="{{ route('listrusakadmin') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog bx-tada"></i>
                <div data-i18n="Analytics">Finish Repaired</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('lostitem') ? 'active' : '' }}">
            <a href="{{ route('lostitemadmin') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-error bx-tada"></i>
                <div data-i18n="Analytics">Lost Items</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Sidebar -->
