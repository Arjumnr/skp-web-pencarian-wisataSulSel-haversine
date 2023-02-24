@include('ADMIN.TOURGUIDE._layouts.header')

<body>

    @include('ADMIN.TOURGUIDE._layouts.preloader')

    <div id="main-wrapper">

        @include('ADMIN.TOURGUIDE._layouts.headerSidebar')

        @include('ADMIN.TOURGUIDE._layouts.navbar')

        @include('ADMIN.TOURGUIDE._layouts.sidebar')

        <div class="content-body">
            @yield('content')
        </div>
       
        <div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Anonymous</a> 2022</p>
    </div>
</div>
</div>

   
<script src="{{ asset('templates/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('templates/js/quixnav-init.js') }}"></script>
<script src="{{ asset('templates/js/custom.min.js') }}"></script>


<!-- Vectormap -->
<script src="{{ asset('templates/vendor/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('templates/vendor/morris/morris.min.js') }}"></script>


<script src="{{ asset('templates/vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('templates/vendor/chart.js/Chart.bundle.min.js') }}"></script>

<script src="{{ asset('templates/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

<!--  flot-chart js -->
<script src="{{ asset('templates/vendor/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('templates/vendor/flot/jquery.flot.resize.js') }}"></script>

<!-- Owl Carousel -->
<script src="{{ asset('templates/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

<!-- Counter Up -->
<script src="{{ asset('templates/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('templates/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('templates/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>


{{-- <script src="{{ asset('templates/js/dashboard/dashboard-1.js') }}"></script> --}}

{{-- Data TAble --}}
<script src="{{ asset('templates/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('templates/js/plugins-init/datatables.init.js') }}"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/metismenu"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>


</body>

@yield('script')

</html>