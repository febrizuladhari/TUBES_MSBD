<!-- Sidebar -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/homesuperadmin" class="app-brand-link">
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
        <li class="menu-item {{ Request::is('homesuperadmin') ? 'active' : '' }}">
            <a href="/homesuperadmin" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Items</span>
        </li>
        <!-- Update Item -->
        <li class="menu-item {{ Request::is('itemsuperadmin') ? 'active' : '' }}">
            <a href="{{ route('itemsuperadmin') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-component bx-tada"></i>
                <div data-i18n="Analytics">Items</div>
            </a>
        </li>

        <!-- Approvement -->
        <li class="menu-item {{ Request::is('accshifting_sa') ? 'active' : '' }} {{ Request::is('accdamaged_sa') ? 'active' : '' }} {{ Request::is('accincoming_sa') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-list-check bxs-like bx-tada"></i>
                <div data-i18n="Layouts">Approvement</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('accshifting_sa') ? 'active' : '' }}">
                    <a href="{{ route('accshifting_sa') }}" class="menu-link">
                        <div data-i18n="Without menu">Shifting Items</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('accdamaged_sa') ? 'active' : '' }}">
                    <a href="{{ route('accdamaged_sa') }}" class="menu-link">
                        <div data-i18n="Without navbar">Damaged Items</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('accincoming_sa') ? 'active' : '' }}">
                    <a href="{{ route('accincoming_sa') }}" class="menu-link">
                        <div data-i18n="Container">Incoming Items</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Account -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Authority Super Admin</span>
        </li>
        <li class="menu-item {{ Request::is('accounts') ? 'active' : '' }}">
            <a href="{{ route('accounts_show') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-detail bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Accounts</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('additem_sa') ? 'active' : '' }}">
            <a href="{{ route('additem_sa.edit') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-message-alt-add bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Add Item</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('editenvironment') ? 'active' : '' }}">
            <a href="{{ route('editenvironment') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-edit bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Edit Environment</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Sidebar -->
