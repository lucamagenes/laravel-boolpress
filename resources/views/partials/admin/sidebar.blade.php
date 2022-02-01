<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt fa-lg fa-fw"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.products.index') }}">
                    <i class="fas fa-shopping-bag fa-lg fa-fw"></i>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.posts.index') }}">
                    <i class="fas fa-thumbtack fa-lg fa-fw"></i>
                    Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.categories.index') }}">
                    <i class="fas fa-bookmark fa-lg fa-fw"></i>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.tags.index') }}">
                    <i class="fas fa-tags fa-lg fa-fw"></i>
                    Tags
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.contacts.index') }}">
                    <i class="fas fa-envelope fa-lg fa-fw"></i>
                    Messages
                </a>
            </li>

        </ul>


    </div>
</nav>
