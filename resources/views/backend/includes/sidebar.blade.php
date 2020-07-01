<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="{{ route('admin.dashboard') }}" class="site_title">
           <span> Gizzabre</span>
        </a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
            <img src="{{ asset('admin/build/images/user.png') }}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2>{{ auth()->user()->name }}</h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Home </a>
                </li>
                @if (auth()->user()->hasPermissionTo('administrators-management'))
                    <li>
                        <a href="{{ route('admin.administrators.index') }}"><i class="fa fa-user"></i> Administrators </a>
                    </li>
                @endif
                @if (auth()->user()->hasPermissionTo('users-management'))
                    <li>
                        <a href="{{ route('admin.users.index') }}"><i class="fa fa-users"></i> Users </a>
                    </li>
                @endif
                <li>
                    <a href="{{ route('admin.orders.index') }}"><i class="fa fa-shopping-basket"></i> Orders </a>
                </li>
                <li>
                    <a href="{{ route('admin.categories.index') }}"><i class="fa fa-tasks"></i> Categories </a>
                </li>
                @if (auth()->user()->hasPermissionTo('privilege-management'))
                    <li>
                        <a href="{{ route('admin.role.index') }}"><i class="fa fa-lock"></i> Roles & Permission </a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="menu_section">
            <h3>More</h3>
            <ul class="nav side-menu">
                @if(auth()->user()->hasPermissionTo('cms-management'))
                    <li>
                        <a href="#"><i class="fa fa-sticky-note"></i> CMS <span class="fa fa-chevron-down"></a>
                        <ul class="nav child_menu">
                            @if (auth()->user()->hasPermissionTo('posts-management'))
                                <li><a href="{{ route('admin.posts.index') }}">Posts</a></li>
                            @endif
                            @if (auth()->user()->hasPermissionTo('pages-management'))
                                <li><a href="{{ route('admin.pages.index') }}">Pages</a> </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if(auth()->user()->hasPermissionTo('faqs-management'))
                    <li>
                        <a href="{{ route('admin.faqs.index') }}"><i class="fa fa-question-circle"></i> FAQ </a>
                    </li>
                @endif
                @if(auth()->user()->hasPermissionTo('testimonies-management'))
                    <li>
                        <a href="{{ route('admin.testimonies.index') }}"><i class="fa fa-comment-o"></i> Testimonies </a>
                    </li>
                @endif
                <li>
                    <a href="{{ route('admin.logout') }}"><i class="fa fa-power-off"></i> Log Out </a>
                </li>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('admin.logout') }}">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>
