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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="living-room">Living Room</a></li>
                                <li><a class="dropdown-item" href="bed-room">Bedroom</a></li>
                                <li><a class="dropdown-item" href="kitchen">Kitchen</a></li>
                                <li><a class="dropdown-item" href="bath-room">Bathroom</a></li>
                                <li><a class="dropdown-item" href="office">Office</a></li>
                                <li><a class="dropdown-item" href="outdoor">Outdoor Space</a></li>
                            </ul>
                        </li>
                        <!-- Themes & Styles Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Themes & Styles
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="furniture">Furniture</a></li>
                                <li><a class="dropdown-item" href="lighting">Lighting</a></li>
                                <li><a class="dropdown-item" href="decor">Decor</a></li>
                                <li><a class="dropdown-item" href="rugs-carpets">Rugs & Carpets</a></li>
                                <li><a class="dropdown-item" href="art">Wall Art</a></li>
                                <li><a class="dropdown-item" href="curtains-blinds">Curtains & Blinds</a></li>
                            </ul>
                        </li>
                        <!-- Features Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Option
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="my-degisn">My Designs</a></li>
                                <li><a class="dropdown-item" href="recent-activities">Recent Activities</a></li>
                                <li><a class="dropdown-item" href="notifications">Notifications</a></li>
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
                                <li><a class="dropdown-item" href="#">Blog</a></li>
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
                        <div class="col-md-11 w-60 h-auto">
                            <form action="#" class="search d-flex">
                                <button class="search__button">
                                    <div class="search__icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                            <path d="M17.545 15.467l-3.779-3.779c0.57-0.935 0.898-2.035 0.898-3.21 0-3.417-2.961-6.377-6.378-6.377s-6.186 2.769-6.186 6.186c0 3.416 2.961 6.377 6.377 6.377 1.137 0 2.2-0.309 3.115-0.844l3.799 3.801c0.372 0.371 0.975 0.371 1.346 0l0.943-0.943c0.371-0.371 0.236-0.84-0.135-1.211zM4.004 8.287c0-2.366 1.917-4.283 4.282-4.283s4.474 2.107 4.474 4.474c0 2.365-1.918 4.283-4.283 4.283s-4.473-2.109-4.473-4.474z"></path>
                                        </svg>
                                    </div>
                                </button>
                                <input type="text" class="search__input" placeholder="Search...">
                            </form>
                        </div>

                        <!-- User Dropdown -->
                        <div class="col-md-1 mb-1">
                            <li class="nav-item dropdown list-unstyled">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user-check"></i>  @if(
                                    Auth::check()) {{ Auth::user()->name }} @else
                                        Guest @endif
                                </a>
                                <ul class="dropdown-menu text-center">
                                    @if(Auth::check())
                                        @if(Auth::user()->interiorDesigner)
                                            <li><a class="dropdown-item" href="{{ route('dashboard.designer', Auth::user()->interiorDesigner->designer_id) }}">Profile</a></li>
                                        @else
                                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                        @endif
                                            <li><a class="dropdown-item" href="/schedule">Schedule</a></li>
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
