<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('dashboard') }}">
                    <i data-feather="home"></i>   
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">
                    <i data-feather="list"></i>
                    Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">
                    <i data-feather="list"></i>
                    Categories
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-success">
            <span>Create</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.create') }}">
                    <i data-feather="plus-circle"></i>
                    New Post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.create') }}">
                    <i data-feather="plus-circle"></i>
                    New Category
                </a>
            </li>
        </ul>
    </div>
</nav>