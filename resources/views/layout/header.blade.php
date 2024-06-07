    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">WEB-8</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
           <!-- Nav Item - Home -->
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link @if(Request::segment(2) == '/') active @endif">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <!-- Nav Item - Ticket -->
            <li class="nav-item">
                <a href="{{ url('form/ticket') }}" class="nav-link @if(Request::segment(2) == 'ticket') active @endif">
                    <i class="fas fa-fw fa-ticket-alt"></i>
                    <span>Ticket</span>
                </a>
            </li>
            <!-- Nav Item - About -->
            <li class="nav-item">
                <a href="{{ url('form/about') }}" class="nav-link @if(Request::segment(2) == 'about') active @endif">
                    <i class="fas fa-fw fa-info-circle"></i>
                    <span>About Me</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
    </div>
    <!-- End of Page Wrapper -->
