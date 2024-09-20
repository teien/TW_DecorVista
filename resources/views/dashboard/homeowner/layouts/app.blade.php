<!DOCTYPE html>
<html>
<head>
    <title>My Laravel App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon" type="image/x-icon">

    <!-- Libraries Stylesheets -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


    <!-- CSS -->
    <link href="{{ asset('css/homeowner.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstraphomeowner.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

</head>
<body>
    <header>
        <!-- Header Content Here -->
        @include('dashboard.homeowner.components.TopBar')
        @include('dashboard.homeowner.components.NavBar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer Content Here -->
        @include('dashboard.homeowner.components.Footer')

    </footer>

     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    
    <!-- js homeowner -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
