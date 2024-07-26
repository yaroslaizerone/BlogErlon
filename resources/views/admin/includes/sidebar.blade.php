<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link">
            <!--begin::Brand Image--> <img src="{{ asset('dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                                           class="brand-image opacity-75 shadow"> <!--end::Brand Image-->
            <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a>
        <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->

            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                 <li class="nav-item menu-open"><a href="#" class="nav-link active"> <i
                            class="nav-icon bi bi-person"></i>
                        <p>
                            Пользователи
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('admin.user.index') }}" class="nav-link active"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Просмотр пользователей</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ route('admin.user.create') }}" class="nav-link active">
                                <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Добавление пользователей</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item menu-open"><a href="#" class="nav-link active"> <i
                            class="nav-icon bi bi-boxes"></i>
                        <p>
                            Категории
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('admin.categories.index') }}" class="nav-link active"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Просмотр категорий</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ route('admin.categories.create') }}" class="nav-link active">
                                <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Добавление категории</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item menu-open"><a href="#" class="nav-link active"> <i
                            class="nav-icon bi bi-file-post"></i>
                        <p>
                            Посты
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('admin.posts.index') }}" class="nav-link active"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Просмотр постов</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ route('admin.posts.create') }}" class="nav-link active">
                                <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Добавление поста</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item menu-open"><a href="#" class="nav-link active"> <i
                            class="nav-icon bi bi-tags-fill"></i>
                        <p>
                            Теги
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('admin.tags.index') }}" class="nav-link active"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Просмотр тегов</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ route('admin.tags.create') }}" class="nav-link active">
                                <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Добавление тега</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-header">ПАНЕЛЬ УПРАВЛЕНИЯ</li>
                <li class="nav-item"><a href="{{ route('admin.user.index') }}" class="nav-link"> <i
                            class="nav-icon bi bi-person"></i>
                        <p>Пользователи</p>
                    </a></li>
                <li class="nav-item"><a href="{{ route('admin.categories.index') }}" class="nav-link"> <i
                            class="nav-icon bi bi-boxes"></i>
                        <p>Категории</p>
                    </a></li>
                <li class="nav-item"><a href="{{ route('admin.posts.index') }}" class="nav-link"> <i
                            class="nav-icon bi bi-file-post"></i>
                        <p>Посты</p>
                    </a></li>
                <li class="nav-item"><a href="{{ route('admin.tags.index') }}" class="nav-link"> <i
                            class="nav-icon bi bi-tags-fill"></i>
                        <p>Теги</p>
                    </a></li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar--> <!--begin::App Main-->
