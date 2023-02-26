<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.home')}}"><i class="icon-speedometer"></i> {{__('words.dashboard')}} <span class="tag tag-info">NEW</span></a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i>{{ trans('words.users') }}</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.users.index') }}"><i class="icon-star"></i>{{ trans('words.users-all') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.users.create') }}"><i class="icon-star"></i>{{ trans('words.user-add') }}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.settings')}}"><i class="icon-pie-chart"></i>{{__('words.settings')}}</a>
            </li>
            <li class="divider"></li>


        </ul>
    </nav>
</div>