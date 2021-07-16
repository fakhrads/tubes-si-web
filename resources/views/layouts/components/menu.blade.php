<div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template-dark/index.html">
                <div class="brand-logo"></div>
                <h2 class="brand-text mb-0">Vuexy</h2>
            </a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
    </ul>
</div>
<!-- Horizontal menu content-->
<div class="navbar-container main-menu-content" data-menu="menu-container">
    <!-- include ../../../includes/mixins-->
    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item"><a class="nav-link" href="/"><i class="feather icon-home"></i><span data-i18n="Dashboard">Halaman Utama</span></a></li>
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-package"></i><span data-i18n="Apps">Buku/Rak Buku</span></a>
            <ul class="dropdown-menu">
                <li data-menu=""><a class="dropdown-item" href="{{ route('buku') }}" data-toggle="dropdown" data-i18n="Books"><i class="feather icon-book"></i>Data Buku</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="{{ route('rak_buku') }}" data-toggle="dropdown" data-i18n="Racks"><i class="feather icon-server"></i>Data Rak Buku</a>
                </li>
            </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('anggota') }}"><i class="feather icon-user"></i><span data-i18n="Dashboard">Manajemen Anggota</span></a></li>
    </ul>
</div>