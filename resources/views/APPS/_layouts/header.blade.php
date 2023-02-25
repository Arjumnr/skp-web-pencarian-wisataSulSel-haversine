<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bavel - Bali Travel Time</title>
    <link rel="icon" type="image/png" href="{{ asset('theme/img/icon/bavel.png') }}">

    <!-- Meta Description -->
    <meta name="description" content="Bali Travel Time">
    <meta name="keywords" content="Travel, Bali, Tourism">
    <meta name="robots" content="index, nofollow">
    <meta name="web_author" content="Yogi Prasertawan">
    <meta name="language" content="Indonesian">

    <!-- Import Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/ionicons.min.css') }}">

    <!-- Import Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> --}}
    {{-- <script src="http://maps.googleapis.com/maps/api/js"></script> --}}
    {{-- <style>
        #map {
            height: 100%;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style> --}}

    <style>
        
        #container {
            height: 100%;
            display: flex;
            justify-content: center;

        }

        #sidebar {
            flex-basis: 15rem;
            flex-grow: 1;
            padding: 1rem;
            max-width: 30rem;
            height: 100%;
            box-sizing: border-box;
            overflow: auto;
        }

        #map {
            /* flex-basis: 0;
            flex-grow: 4; */
            height: 500px;
            width: 50%;
        }
    </style>

</head>
