<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <!-- Spinner Start -->
            @include('dashboard.homeowner.components.Spinner')
            <!-- Spinner End -->

            <!-- Topbar Start -->
            @include('dashboard.homeowner.components.Topbar')
            <!-- Topbar End -->

            <!-- Navbar Start -->
            @include('dashboard.homeowner.components.Navbar')
            <!-- Navbar End -->

            <!-- Carousel Start -->
            @include('dashboard.homeowner.components.Carousel')
            <!-- Carousel End -->

            <!-- Feature Start -->
            @include('dashboard.homeowner.components.Feature')
            <!-- Feature End -->

            <!-- About Start -->
            @include('dashboard.homeowner.components.About')
            <!-- About End -->

            <!-- Service Start -->
            @include('dashboard.homeowner.components.Service')
            <!-- Service End -->

            <!-- Features Start -->
            @include('dashboard.homeowner.components.Features')
            <!-- Features End -->

            <!-- Projects Start -->
            @include('dashboard.homeowner.components.Projects')
            <!-- Projects End -->

            <!-- Quote Start -->
            @include('dashboard.homeowner.components.Quote')
            <!-- Quote End -->

            <!-- Team Start -->
            @include('dashboard.homeowner.components.Team')
            <!-- Team End -->

            <!-- Testimonial Start -->
            @include('dashboard.homeowner.components.Testimonial')
            <!-- Testimonial End -->

            <!-- Footer Start -->
            @include('dashboard.homeowner.components.Footer')
            <!-- Footer End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-dark btn-lg-square rounded-0 back-to-top"><i class="fa-solid fa-arrow-up"></i></a>

        </div>
    </div>
</div>
</x-app-layout>
