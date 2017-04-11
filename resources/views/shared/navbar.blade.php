<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="/" class="logo">
                <i class="zmdi zmdi-toys icon-c-logo"></i><span>Theo's <span>Newsroom</span></span>
                <!--<span><img src="assets/images/logo.png" alt="logo" style="height: 20px;"></span>-->
            </a>
        </div>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button class="button-menu-mobile open-left waves-effect waves-light">
                        <i class="zmdi zmdi-menu"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>




                <ul class="nav navbar-nav navbar-right pull-right">
                    <li>
                        <!-- Notification -->
                        {{--<div class="notification-box">--}}
                            {{--<ul class="list-inline m-b-0">--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);" class="right-bar-toggle">--}}
                                        {{--<i class="zmdi zmdi-notifications-none"></i>--}}
                                    {{--</a>--}}
                                    {{--<div class="noti-dot">--}}
                                        {{--<span class="dot"></span>--}}
                                        {{--<span class="pulse"></span>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        <!-- End Notification bar -->
                    </li>

                    <li class="dropdown user-box">
                        <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                            <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                        </a>

                        <ul class="dropdown-menu">
                            @if(!Auth::guest())
                            <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> {{Auth::user()->name}}</a></li>
                            @endif
                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                            <li><a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off m-r-5"></i> Logout
                                    </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
