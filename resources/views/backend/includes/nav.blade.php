<nav class="main-header navbar navbar-expand navbar-white navbar-light d-flex justify-content-between">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('backends/dist/img/profile.jpg') }}" alt="Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8; width: 25px !important;">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="http://server-management.local/logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>
                    Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
