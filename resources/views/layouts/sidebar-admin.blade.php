<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-black);">
    <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"></div>
            <div class="sidebar-brand-text mx-3" style="font-size: 22px;"><span class="text-warning">Admin</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item">
                <a class="nav-link text-center link-warning" href="{{ route('dashboard') }}">
                    <i class="material-icons text-warning" style="font-size: 13px;">dashboard</i>
                    <span class="text-warning" style="font-weight: bold;">Dashboard</span>
                </a>
            </li>
            <li class="nav-item"></li>
            <li class="nav-item">
                <a class="nav-link text-center link-warning" href="{{ route('listOrder') }}" style="font-weight: bold;">
                    <i class="fas fa-table text-warning"></i>
                    <span style="font-weight: bold;">List Order</span>
                </a>
                <a class="nav-link text-center link-warning active" href="{{ route('listProduct') }}">
                    <i class="fas fa-table text-warning"></i>
                    <span style="font-weight: bold;">List Product</span>
                </a>
                <a class="nav-link text-center link-warning" href="{{ route('listArtikelAdmin') }}" style="font-weight: bold;">
                    <i class="fas fa-table text-warning"></i>
                    <span style="font-weight: bold;">List Artikel</span>
                </a>
                <a class="nav-link text-center link-warning" href="{{ route('listResepAdmin') }}">
                    <i class="fas fa-table text-warning"></i>
                    <span style="font-weight: bold;">List Resep</span>
                </a>
            </li>
        </ul>
        <button class="btn rounded-circle border-0" id="sidebarToggle" type="button">
        </button>
    </div>
</nav>