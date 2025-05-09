@section('sidebar')
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <img class="w-100 h-100 object-fit-cover" src="{{ asset( "img/JDF-logo.png")}}" alt="Japan Dahwa Foundation">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Campaigns
    </div>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="/adaorangbaik">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>adaorangbaik.com</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/amalsholeh">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>amalsholeh.com</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/baznasjabar">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>baznasjabar.org</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

@endsection
