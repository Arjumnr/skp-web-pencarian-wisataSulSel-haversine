<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wisata Sul-Sel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('templates/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('templates/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('templates/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet') }}">
    <link href="{{ asset('templates/css/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/metismenu/dist/metisMenu.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link href="{{ asset('templates/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('templates/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{ asset('templates/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{ asset('templates/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{ asset('templates/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('templates/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/vendor/pickadate/themes/default.date.css') }}">
</head>