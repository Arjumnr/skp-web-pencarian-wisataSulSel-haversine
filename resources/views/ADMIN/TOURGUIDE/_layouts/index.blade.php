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
    <script src="{{ asset('templates/vendor/global/global.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset('templates/js/quixnav-init.js') }}"></script>
    {{-- <script src="{{ asset('templates/js/custom.min.js') }}"></script> --}}
    <script src="{{ asset('templates/vendor/raphael/raphael.min.js') }}"></script>


    {{-- <script src="{{ asset('templates/js/dashboard/dashboard-1.js') }}"></script> --}}

    {{-- Data TAble --}}
    <script src="{{ asset('templates/vendor/morris/morris.min.js') }}"></script>
    <script src="{{ asset('templates/vendor/circle-progress/circle-progress.min.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/metismenu"></script> --}}

    <script src="{{ asset('templates/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/vendor/gaugeJS/dist/gauge.min.js') }}"></script>
    <script src="{{ asset('templates/vendor/flot/jquery.flot.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('templates/vendor/flot/jquery.flot.resize.js') }}"></script>

    <script src="{{ asset('templates/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('templates/js/plugins-init/datatables.init.js') }}"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

     <!-- momment js is must -->
    <script src="{{ asset('templates/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('templates/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- clockpicker -->
    <script src="{{ asset('templates/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
    <!-- asColorPicker -->
    <script src="{{ asset('templates/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('templates/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('templates/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
    <!-- Material color picker -->
    <script src="{{ asset('templates/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    <!-- pickdate -->
    <script src="{{ asset('templates/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('templates/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('templates/vendor/pickadate/picker.date.js') }}"></script>



    <!-- Daterangepicker -->
    <script src="{{ asset('templates/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
    <!-- Clockpicker init -->
    <script src="{{ asset('templates/js/plugins-init/clock-picker-init.js') }}"></script>
    <!-- asColorPicker init -->
    <script src="{{ asset('templates/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
    <!-- Material color picker init -->
    <script src="{{ asset('templates/js/plugins-init/material-date-picker-init.js') }}"></script>
    <!-- Pickdate -->
    <script src="{{ asset('templates/js/plugins-init/pickadate-init.js') }}"></script>



    @yield('script')
</body>

</html>
