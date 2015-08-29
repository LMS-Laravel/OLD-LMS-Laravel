<!-- Header -->
<header class="navbar navbar-default">
    <!-- Left Header Navigation -->
    <ul class="nav navbar-nav-custom">
        <!-- Main Sidebar Toggle Button -->
        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                <i class="fa fa-bars fa-fw"></i>
            </a>
        </li>
        <!-- END Main Sidebar Toggle Button -->

    </ul>
    <!-- END Left Header Navigation -->

    <!-- Search Form -->
    <form action="{{route('learning') }}" method="get" class="navbar-form-custom" role="search">
       <!--<div class="form-group">
            <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Buscar..">
        </div>-->
    </form>
    <!-- END Search Form -->

    <!-- Right Header Navigation -->
    <ul class="nav navbar-nav-custom pull-right">

        <!-- User Dropdown -->
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ Gravatar::src($user->email) }}" alt="avatar"> <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                <li class="dropdown-header text-center">Cuenta</li>
                <li>
                    <a href="{{ route('profile', $user->id) }}">
                        <i class="fa fa-user fa-fw pull-right"></i>
                        Perfil
                    </a>
                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                    <a href="#modal-user-settings" data-toggle="modal">
                        <i class="fa fa-cog fa-fw pull-right"></i>
                        Ajustes
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"><i class="fa fa-ban fa-fw pull-right"></i> Salir</a>
                </li>
            </ul>
        </li>
        <!-- END User Dropdown -->
    </ul>
    <!-- END Right Header Navigation -->
</header>
<!-- END Header -->