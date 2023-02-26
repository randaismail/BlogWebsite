<header class="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
        <a class="navbar-brand" href="#"></a>

        <ul class="nav navbar-nav pull-left hidden-md-down">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="hidden-md-down">{{ auth()->user()->name }}</span>
                    <span class="hidden-md-down">({{ auth()->user()->status }})</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-xs-center">
                        <strong>{{ __('words.Account') }}</strong>
                    </div>
                    
                    <a class="dropdown-item" href="{{ route('dashboard.users.edit', auth()->user()->id) }}"><i class="fa fa-user"></i> {{ __('words.Profile') }}</a>
                    <div class="divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-shield"></i> {{ __('auth.logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </li>
            <li class="nav-item">
                
            </li>

        </ul>
    </div>
</header>