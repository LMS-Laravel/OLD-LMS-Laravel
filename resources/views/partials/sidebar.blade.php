<!-- left side start-->
<div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <a><img src="{{ asset('themes/admin/images/logo.png')  }}" alt=""></a>
    </div>

    <div class="left-side-inner">

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            @if(Auth::check())
            <li class="active"><a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i> <span>{{ trans('ui.sidebar.dashboard') }}</span></a></li>
            @endif

            @if(Auth::check() && Auth::user()->hasRole('admin'))
                <li class="menu-list"><a href=""><i class="fa fa-user"></i> <span>{{ trans('ui.sidebar.admin_users') }}</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ url('auth/user') }}"> <i class="fa fa-male"></i><span>{{ trans('ui.sidebar.users') }}</span></a></li>
                        <li><a href="{{ url('auth/role') }}"> <i class="fa fa-legal"></i><span>{{ trans('ui.sidebar.roles') }}</span></a></li>
                        <li><a href="{{ url('auth/permission') }}"><i class="fa fa-key"></i> <span>{{ trans('ui.sidebar.permissions') }}</span></a></li>
                    </ul>
                </li>
            @endif

        </ul>
        <!--sidebar nav end-->

    </div>
</div>