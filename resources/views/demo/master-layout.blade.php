<!doctype html>
<html class="fixed">
@include('demo.master-layout-head')
<body>
<section class="body">

    <!-- start: header -->
    @include('demo.master-layout-header')
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        @include('demo.master-layout-left-sidebar')
        <!-- end: sidebar -->

       @yield('content')
    </div>
</section>

@include('demo.master-layout-script')

@yield('current-page-script')
<!-- Examples -->
</body>
</html>
