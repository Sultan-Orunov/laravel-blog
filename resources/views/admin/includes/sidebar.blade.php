<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">

            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>
                        Пользователи
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link">
                            <i class="fas fa-angle-right nav-icon"></i>
                            <p>Показать Все</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.users.create') }}" class="nav-link">
                            <i class="fas fa-angle-right nav-icon"></i>
                            <p>Добавить</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fa fa-clipboard"></i>
                    <p>
                        Статьи
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('admin.posts.index') }}" class="nav-link">
                            <i class="fas fa-angle-right nav-icon"></i>
                            <p>Показать Все</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.posts.create') }}" class="nav-link">
                            <i class="fas fa-angle-right nav-icon"></i>
                            <p>Добавить</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fa fa-list"></i>
                    <p>
                        Категории
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('admin.categories.index') }}" class="nav-link">
                            <i class="fas fa-angle-right nav-icon"></i>
                            <p>Показать Все</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.categories.create') }}" class="nav-link">
                            <i class="fas fa-angle-right nav-icon"></i>
                            <p>Добавить</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fa fa-tags"></i>
                    <p>
                        Тэги
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('admin.tags.index') }}" class="nav-link">
                            <i class="fas fa-angle-right nav-icon"></i>
                            <p>Показать Все</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.tags.create') }}" class="nav-link">
                            <i class="fas fa-angle-right nav-icon"></i>
                            <p>Добавить</p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
