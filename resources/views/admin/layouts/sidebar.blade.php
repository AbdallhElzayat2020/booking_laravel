<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard.index') }}">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard.index') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Starter</li>
            <li class="{{setSidebarActive(['admin.dashboard.index'])}}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="far fa-square"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="dropdown {{setSidebarActive(['admin.hero.index'])}}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Sections</span></a>
                <ul class="dropdown-menu">
                    <li class="{{setSidebarActive(['admin.hero.*'])}}"><a class="nav-link" href="{{ route('admin.hero.index') }}">Hero</a></li>
                    <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>

        </ul>


    </aside>
</div>