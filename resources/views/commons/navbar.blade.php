<header>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <ul class="navbar-nav">
            @if (Auth::check())
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i>MENU</i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <i>
                        <li class="dropdown-item"><a href="{{ url('/') }}">TOP</a></li>
                        <li class="dropdown-item"><a href="{{ url('/mypage') }}">MyPage</a></li>
                        <li class="dropdown-item"><a href="{{ url('/portfolio') }}">Portofolio</a></li>
                        <li class="dropdown-item"><a href="{{ url('/future') }}">Future</a></li>
                        <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </i>
                    </ul>
                </li>
            @else
            @endif
        </ul>
    </nav>
</header>