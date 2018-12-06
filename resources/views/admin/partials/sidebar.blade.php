<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Real Estate</a>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
                <img alt="image" src="{{asset('dist/img/avatar/avatar-1.jpeg')}}">
            </div>
            <div class="sidebar-user-details">
                <div class="user-name">{{Auth::user()->name}}</div>
                <div class="user-role">
                    Administrator
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
                <a href="{{route('admin.main')}}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Components</li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Homes</span></a>
                <ul class="menu-dropdown">
                    <li><a href="{{route('homes.index')}}"><i class="ion ion-ios-circle-outline"></i> All homes</a></li>
                    <li><a href="{{route('homes.create')}}"><i class="ion ion-ios-circle-outline"></i> Add home</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Regions</span></a>
                <ul class="menu-dropdown">
                    <li><a href="{{route('regions.index')}}"><i class="ion ion-ios-circle-outline"></i> All regions</a></li>
                    <li><a href="{{route('regions.create')}}"><i class="ion ion-ios-circle-outline"></i> Add region</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>