<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link bg_blue_2">
        <img src="{{ asset('backends/dist/img/store.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar bg_blue_1">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('dashboard') }}" class="nav-link bg_blue_3 active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header cl_blue_7">Catalogs</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book-open px-2"></i>
                        <p class="px-2">
                            Posts
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('posts.create') }}" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>Add post</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('posts.index') }}" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>Posts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if (Auth::user()->isAdmin())
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-cart px-2"></i>
                        <p class="px-2">
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users.create') }}" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>Add product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>Products</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users px-2"></i>
                        <p class="px-2">
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users.create') }}" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>Add user</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header cl_blue_7">Settings</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-globe px-2"></i>
                        <p class="px-2">
                            Languages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/exampxes/project-detail.html" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>Khmer</p>
                            </a>
                            <a href="pages/exampxes/project-detail.html" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>English</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-map-marker-alt px-2"></i>
                        <p class="px-2">
                            Localizations
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>Cambodia</p>
                            </a>
                            <a href="#" class="nav-link">
                                <i class="fas fa-angle-double-right px-4"></i>
                                <p>England</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
