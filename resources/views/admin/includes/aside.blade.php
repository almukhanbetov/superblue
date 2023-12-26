<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="ti-shield menu-icon"></i>
                <span class="menu-title">Главная страница</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-team menu-icon"></i>
                <span class="menu-title">Категории</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.group.index')}}">Категории</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.group.create')}}">Добавить категорию</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-team menu-icon"></i>
                <span class="menu-title">Продукты</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.product.index')}}">Все продукты</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.product.create')}}">Добавить</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
