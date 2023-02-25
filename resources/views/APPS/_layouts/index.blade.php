@include('APPS._layouts.header')

<body>
    <!-- Navbar -->
    @include('APPS._layouts.navbar')

    <!-- Sidebar -->
    @include('APPS._layouts.sidebar')

    <!-- Section Header -->

    <div>
        @yield('content')
    </div>


</body>

</html>
