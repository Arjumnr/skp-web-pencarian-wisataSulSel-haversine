@include('ADMIN._layouts.header')

<body>

    @include('ADMIN._layouts.preloader')

    <div id="main-wrapper">

        @include('ADMIN._layouts.headerSidebar')

        @include('ADMIN._layouts.navbar')

        @include('ADMIN._layouts.sidebar')

        <div class="content-body">
            @yield('content')
        </div>
       
        @include('ADMIN._layouts.footer')
