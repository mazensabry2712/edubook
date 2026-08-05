<!DOCTYPE html>
<html lang="en">


@include('dashboard.layouts.header')


<body>
    <div class="admin-shell">
        <div class="sidebar-backdrop" data-sidebar-close></div>

        @include('dashboard.layouts.sidebar')

        <div class="admin-main">

            @include('dashboard.layouts.navbar')

            {{-- @include('dashboard.layouts.main') --}}

            @yield('content')

            @include('dashboard.layouts.footer')



        </div>
    </div>

    <script src="{{ asset('Admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/js/main.js') }}"></script>
</body>

</html>
