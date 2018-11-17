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
                            <li><a href="{{route('admin.faq')}}">Privacy Policy</a></li>
                            <li><a href="{{route('admin.faq')}}">FAQs</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-anchor"></i> Terms and Condition <span
                                    class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="general_elements.html">Users Terms and Condition </a></li>
                            <li><a href="media_gallery.html">Site Terms and Condition </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Articles</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-inbox"></i> Posts<span
                                    class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="e_commerce.html">Add Articles</a></li>
                            <li><a href="projects.html">Edit Articles</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-tag"></i>Category<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="page_403.html">Add a Category</a></li>
                            <li><a href="pricing_tables.html">Edit Category</a></li>
                        </ul>
                    </li>
                    {{--                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                                                        class="label label-success pull-right">Coming Soon</span></a></li>--}}
                </ul>
            </div>
            <div class="menu_section">
                <h3>Settings</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Site Setting<span
                                    class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="e_commerce.html">Meta Setting</a></li>
                            <li><a href="projects.html">Contacts</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-windows"></i> Home Settings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="page_403.html">Header</a></li>
                            <li><a href="pricing_tables.html">Footer</a></li>
                        </ul>
                    </li>
                    {{--                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                                                        class="label label-success pull-right">Coming Soon</span></a></li>--}}
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
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
