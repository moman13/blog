<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('image/'.auth()->user()->user_photo)}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="#">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>Blog</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> All Posts</a></li>
                    <li><a href="/blog/create"><i class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-folder"></i> <span>Categories</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('usermanagment.index')}}"><i class="fa fa-circle-o"></i>Users</a></li>
                    <li><a href="{{route('usermanagment.roleIndex')}}"><i class="fa fa-circle-o"></i>Roles</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-comments"></i><span>Comments</span></a></li>

            <li><a href="#"><i class="fa fa-paper-plane-o"></i><span>Newsletter</span></a></li>

            <li><a href="/blog/setting"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>