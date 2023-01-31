<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Wisata Sul-Sel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('templates/images/favicon.png') }}">
    <link href="{{ asset('templates/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Login</h4>

                                    @if (Session::has('danger'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('danger') }}
                                            @php
                                                Session::forget('danger');
                                            @endphp
                                        </div>
                                    @endif

                                    <form action="{{ route('loginPost') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username"><strong>Username</strong></label>
                                            <input type="text" id="username" class="form-control"
                                                name="username"</div>

                                            <br>
                                            <br>

                                            <div class="form-group">
                                                <label for="password"><strong>Password</strong></label>
                                                <input type="password" name="password" id="password"
                                                    class="form-control">
                                            </div>

                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif

                                            <br>
                                            <br>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                            </div>


                                            <div class="new-account mt-3">
                                                <p>Belum punya akun? <a class="text-primary"
                                                        href="{{ route('register') }}">Daftar
                                                        disini</a></p>
                                            </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="{{ asset('templates/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('templates/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('templates/js/custom.min.js') }}"></script> --}}

</body>

</html>
