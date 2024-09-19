<x-app-layout>
    <!-- check role  -->
    @if (Auth::user()->role == 'InteriorDesigner')
        @include('dashboard.interior_design')
    @elseif(Auth::user()->role == 'Homeowner')
        @include('dashboard.homeowner')
    @else
        @include('dashboard.admin')
    @endif
</x-app-layout>


