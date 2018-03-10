<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{asset('administrator/img/admin_default.jpg')}}"
                                 width="50px" height="50px"/>
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">

                                    </strong>
                             </span>
                                <span class="text-muted text-xs block">Developer
                                    <b class="caret"></b>
                                </span>
                            </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Профиль</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Почта</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('admin.logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Вихід
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    MT
                </div>
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Администраторы</span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{route('admins.list')}}">Список</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Пользователи </span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{route('users.list')}}">Список</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Компании</span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('companies.index')}}">Список</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('employee.index')}}"><i class="fa fa-child"></i> <span class="nav-label">Работники</span></a>
            </li>
        </ul>
    </div>
</nav>