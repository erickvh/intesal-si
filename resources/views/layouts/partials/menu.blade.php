<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="{{ route('home') }}"">Intesal</a>
    <!-- Sidebar toggle button--><a class=" app-sidebar__toggle" href="#" data-toggle="sidebar"
        aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown">
            <a class="app-nav__item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                style="text-decoration: none">
                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</header>