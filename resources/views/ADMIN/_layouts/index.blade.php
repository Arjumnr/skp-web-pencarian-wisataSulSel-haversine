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


    <!-- Counter Up -->
    <script src="{{ asset('templates/js/quixnav-init.js') }}"></script>
    {{-- <script src="{{ asset('templates/js/custom.min.js') }}"></script> --}}
    <script src="{{ asset('templates/vendor/raphael/raphael.min.js') }}"></script>


    {{-- <script src="{{ asset('templates/js/dashboard/dashboard-1.js') }}"></script> --}}

    {{-- Data TAble --}}
    <script src="{{ asset('templates/vendor/morris/morris.min.js') }}"></script>
    <script src="{{ asset('templates/vendor/circle-progress/circle-progress.min.js') }}"></script>


    <script src="{{ asset('templates/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/vendor/gaugeJS/dist/gauge.min.js') }}"></script>
    <script src="{{ asset('templates/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('templates/vendor/flot/jquery.flot.resize.js') }}"></script>

    <script src="{{ asset('templates/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('templates/js/plugins-init/datatables.init.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    {{-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> --}}

    <!-- momment js is must -->
    <script src="{{ asset('templates/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('templates/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- clockpicker -->
    <script src="{{ asset('templates/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>


    <script
        src="{{ asset('templates/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>
    <!-- pickdate -->
    <script src="{{ asset('templates/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('templates/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('templates/vendor/pickadate/picker.date.js') }}"></script>



    <!-- Daterangepicker -->
    <script src="{{ asset('templates/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
    <!-- Clockpicker init -->
    <script src="{{ asset('templates/js/plugins-init/clock-picker-init.js') }}"></script>
    <!-- asColorPicker init -->
    <!-- Material color picker init -->
    <script src="{{ asset('templates/js/plugins-init/material-date-picker-init.js') }}"></script>
    <!-- Pickdate -->
    <script src="{{ asset('templates/js/plugins-init/pickadate-init.js') }}"></script>


</body>

@yield('script')

</html>
