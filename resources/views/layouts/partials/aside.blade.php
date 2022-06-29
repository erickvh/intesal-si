<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{ asset('template/images/user.png') }}"
            width="35px" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"> {{ Auth::user()->name }}</p>
            <p class="app-sidebar__user-designation" style="margin-top: 0.5em">
                Super Admin
            </p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item @if (Request::is('/')) {{ 'active' }} @endif" href="{{ route('home') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Home</span>
            </a>
        </li>
        {{-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-archive"></i><span class="app-menu__label">PRUEBA
                </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item " href="#"><i class="app-menu__icon fa fa-product-hunt"></i>
                        PRUEBA
                    </a>
                </li>
                <li>
                    <a class="treeview-item " href="#"><i class="app-menu__icon fa fa-product-hunt"></i>
                        PRUEBA
                    </a>
                </li>
            </ul>
        </li> --}}

    </ul>
</aside>