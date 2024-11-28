<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Dashboard</li>

                <li><a href="#"><i class="bx bx-food-menu"></i><span>Dashboard</span></a></li>
                <li><a href="{{route('admin.skills')}}"><i class="bx bx-menu-alt-left"></i><span>Skills</span></a></li>
                <li><a href="{{route('admin.requests')}}"><i class="bx bx-menu-alt-left"></i><span>Verify Request</span></a></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-image"></i>
                        <span key="t-dashboards">Posts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.posts.index')}}" key="t-default">All Posts</a></li>
                    </ul>
                </li>
                {{-- <li><a href="#"><i class="bx bxs-message-alt"></i><span>Contacts</span></a></li> --}}
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
