<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title">
            <a href="/admin" class="site_title"><i class="fa fa-paw"></i> <span>blueSky</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i> Home </a></li>
                    <li><a href="{{route('admin.users')}}"><i class="fa fa-users"></i> Users</a></li>
                    <li><a href="{{route('admin.pages')}}"><i class="fa fa-file-text-o"></i> Pages</a>
                    </li>
                    <li><a><i class="fa fa-life-saver"></i> Help Center<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.helpcenter.detail','privacy-policy')}}">Privacy Policy</a></li>
                            <li><a href="{{route('admin.helpcenter.detail','faqs')}}">FAQs</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-anchor"></i> Terms and Condition <span
                                    class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.terms.detail','use-term-condition')}}">Users Terms and
                                    Condition </a></li>
                            <li><a href="{{route('admin.terms.detail','site-term-condition')}}">Site Terms and
                                    Condition </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Articles</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-book"></i> Article<span
                                    class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.articles.index')}}">All Articles</a></li>
                            <li><a href="{{route('admin.articles.create')}}">Add Article</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-tag"></i>Category<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.category.index')}}">All Categories</a></li>
                            <li><a href="{{route('admin.category.add')}}">Add a Category</a></li>
                        </ul>
                    </li>
                    {{--                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                                                        class="label label-success pull-right">Coming Soon</span></a></li>--}}
                </ul>
            </div>
            <div class="menu_section">
                <h3>Settings</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-cog"></i> Settings<span
                                    class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.setting.site')}}">Site Setting</a></li>
                        </ul>
                    </li>
                </ul>
                <h3>Home Setting</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-cog"></i> Home Setting<span
                                    class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.setting.home')}}">Home Setting</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <!-- /menu footer buttons -->
    </div>
</div>
