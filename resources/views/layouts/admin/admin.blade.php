@include('layouts.admin.meta')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.admin.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.admin.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.admin.footer')