<x-app-layout>
    <!-- check role  -->
    @if (Auth::user()->role == 'InteriorDesigner')
        @include('dashboard.homeowner')

    @elseif(Auth::user()->role == 'Homeowner')
        @include('dashboard.homeowner')
    @else
        @include('dashboard.admin')
    @endif
</x-app-layout>


