<nav class="container navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="row w-100">
                <!-- Navbar Links -->
                <div class="col justify-content-center">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Categories Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="products" role="button" aria-expanded="false">
                                Product
                            </a>
                        </li>
                        <!-- Themes & Styles Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Themes & Styles
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/furniture">Furniture</a></li>
                                <li><a class="dropdown-item" href="/lighting">Lighting</a></li>
                                <li><a class="dropdown-item" href="/decor">Decor</a></li>
                                <li><a class="dropdown-item" href="/rugs-carpets">Rugs & Carpets</a></li>
                                <li><a class="dropdown-item" href="/art">Wall Art</a></li>
                                <li><a class="dropdown-item" href="/curtains-blinds">Curtains & Blinds</a></li>
                            </ul>
                        </li>
                        <!-- Features Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Option
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/my-degisn">My Designs</a></li>
                                <li><a class="dropdown-item" href="/recent-activities">Recent Activities</a></li>
                                <li><a class="dropdown-item" href="/notifications">Notifications</a></li>
                            </ul>
                        </li>
                        <!-- Info Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Info
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/about">About</a></li>
                                <li><a class="dropdown-item" href="/contact">Contact</a></li>
                                <li><a class="dropdown-item" href="/list/designer">Designer</a></li>
                                <li><a class="dropdown-item" href="/team">Team</a></li>
                                <li><a class="dropdown-item" href="/blog">Blog</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Logo -->
                <div class="col">
                    <div class="row text-center justify-content-center align-items-center ">
                        <a class="navbar-brand fs-2 logo" href="/dashboard">DecorVista</a>
                    </div>
                </div>


                <div class="col">
                    <!-- Search Bar -->
                    <div class="row text-center d-flex align-items-center justify-content-center mt-2">


                        <!-- User Dropdown -->
                        <div class="col-md-1 mt-2">
                            <li class="nav-item dropdown list-unstyled">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user-check"></i> @if(
                                    Auth::check()) {{ Auth::user()->name }} @else
                                        Guest @endif                             </a>
                                <ul class="dropdown-menu text-center">
                                    @if(Auth::check())
                                    @if(Auth::user()->interiorDesigner)
                                    <li><a class="dropdown-item" href="{{ route('dashboard.designer', Auth::user()->interiorDesigner->designer_id) }}">Profile</a></li>
                                    @else
                                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                            <li><a class="dropdown-item" href="/schedule">Schedule</a></li>
                                    @endif

                                    <li><a class="dropdown-item" href="/shopping-cart">Cart</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                                    @else
                                    <li><a class="dropdown-item" href="/shopping-cart">Cart</a></li>
                                    <li><a class="dropdown-item" href="/login">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>

                                    @endif
                                </ul>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
