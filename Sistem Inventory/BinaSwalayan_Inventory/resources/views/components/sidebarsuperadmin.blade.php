<!-- Sidebar -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
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
        <li class="menu-item active">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Items</span>
        </li>
        <!-- Update Item -->
        <li class="menu-item">
            <a href="/viewBarang" class="menu-link">
                <i class="menu-icon tf-icons bx bx-edit bxs-like bx-tada"></i>
                <div data-i18n="Analytics">Update Item</div>
            </a>
        </li>

        <!-- Approvement -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-list-check bxs-like bx-tada"></i>
                <div data-i18n="Layouts">Approvement</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="tes.php" class="menu-link">
                        <div data-i18n="Without menu">Shifting Items</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="tes.php" class="menu-link">
                        <div data-i18n="Without navbar">Damaged Items</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="tes.php" class="menu-link">
                        <div data-i18n="Container">Incoming Items</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Users</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top bxs-like bx-tada"></i>
                <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="tes.php" class="menu-link">
                        <div data-i18n="Account">Account</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="tes.php" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="tes.php" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<!-- / Sidebar -->