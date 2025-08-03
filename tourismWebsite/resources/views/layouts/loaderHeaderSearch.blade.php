<!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
<!-- Page Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img class="d-inline-block align-text-top" src="/img/tourismoLogo.png" alt="Tourismo Porto Logo" width="100" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-1" aria-current="page" href="{{ route('places.byCategory', ['category' => 'To-Do']) }}">To-Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-2" href="{{ route('places.byCategory', ['category' => 'Historical']) }}">Historical</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-3" href="{{ route('places.byCategory', ['category' => 'Restaurant']) }}">Restaurant</a>
                    </li>
                @if (auth()->guard('admin')->check())
                    <li class="nav-item">
                        <a class="nav-link nav-link-5" href="{{ url('/admin') }}"><i class="fa-solid fa-database"></i></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link nav-link-5" href="{{ url('/admin-access') }}"><i class="fa-solid fa-user-secret"></i></a>
                    </li>
                @endif
            </ul>
            </div>
        </div>
    </nav>
<!-- Search box with cover -->
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{ asset('img/ponteluis2400x1000.jpg') }}">
        <form class="d-flex tm-search-form" action="{{ route('place.search') }}" method="GET">
            <input name="query" class="form-control tm-search-input" type="search" placeholder="e.g. Historical, To-Do, Restaurant" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>