<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid py-2 px-4">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('/img/edufun_logo.png') }}" alt="" class="w-25"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ request()->routeIs('home') ? 'text-decoration-underline text-info' : '' }}"  aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold dropdown-toggle {{ request()->routeIs('category') ? 'text-decoration-underline text-info' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item fw-bold" href="{{ route('category', ['category'=>'Interactive Multimedia']) }}">Interactive Multimedia</a></li>
                        <li><a class="dropdown-item fw-bold" href="{{ route('category', ['category'=>'Software Engineering']) }}">Software Engineering</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ request()-> is('writers*') ? 'text-decoration-underline text-info' : '' }}" href="{{ route('writers') }}">Writers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ request()->is('about-us') ? 'text-decoration-underline text-info' : '' }}" href="{{ route('about-us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ request()->routeIs('popular') ? 'text-decoration-underline text-info' : '' }}" href="{{ route('popular') }}">Popular</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
