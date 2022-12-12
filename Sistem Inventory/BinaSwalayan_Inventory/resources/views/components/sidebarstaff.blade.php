<!-- Sidebar -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/homestaff" class="app-brand-link">
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

    <ul class="menu-inner py-1 mt-3">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('homestaff') ? 'active' : '' }}">
            <a href="/homestaff" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Items</span>
        </li>
        <!-- Item Staff -->
        <li class="menu-item {{ Request::is('itemstaff') ? 'active' : '' }}">
            <a href="{{ route('itemstaff') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-component bx-tada"></i>
                <div data-i18n="Analytics">Items</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Authority Staff</span>
        </li>
        <li class="menu-item {{ Request::is('adddamagedstaff') ? 'active' : '' }}">
            <a href="{{ route('adddamagedstaff') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-error bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Add Damaged Item</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('reqitemstaff') ? 'active' : '' }}">
            <a href="{{ route('reqitemstaff') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-transfer-alt bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Request Item</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('reqbelistaff') ? 'active' : '' }}">
            <a href="{{ route('reqbelistaff') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cart bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Request Buy Item</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('listpinjamstaff') ? 'active' : '' }}">
            <a href="{{ route('listpinjamstaff') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul bxs-like bx-tada"></i>
                <div data-i18n="Analytics">List Borrowed Item</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Sidebar -->

