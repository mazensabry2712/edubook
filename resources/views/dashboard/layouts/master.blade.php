<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.header')

<body>
    <div id="overlay" class="overlay"></div>
    <!-- TOPBAR -->
  @include('dashboard.layouts.navbar')


  @include('dashboard.layouts.sidebar')


  @include('dashboard.layouts.main')

    <!-- Bootstrap JS -->
    <script src="{{ asset('Admin/src/assets/js/main.js') }}" type="module"></script>



</body>

</html>
