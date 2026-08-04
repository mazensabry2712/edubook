<!doctype html>
<html class="no-js" lang="zxx">


{{-- @yield('header') --}}
@include('website.layouts.header')
<body>

@include('website.layouts.preloader')

   @include('website.layouts.navbar')


   @include('website.layouts.main')


    @include('website.layouts.footer')

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

  @include('website.layouts.script')

</body>

</html>
