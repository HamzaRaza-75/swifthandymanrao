<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preclinic.dreamstechnologies.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2023 16:15:28 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dasassets/img/favicon.png') }}">
    <title> {{ __('Login || RNMC-HOSPITAL') }} </title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/dasassets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('public/dasassets/plugins/feather/feather.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('public/dasassets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dasassets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/dasassets/css/style.css') }}">

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="px-0 container-fluid">
            <div class="row">

                <!-- Login logo -->
                <div class="col-lg-6 login-wrap">
                    <div class="login-sec">
                        <div class="log-img">
                            <img class="img-fluid" src="{{ asset('public/dasassets/img/login-02.png') }}"
                                alt="Logo">
                        </div>
                    </div>
                </div>
                <!-- /Login logo -->

                <!-- Login Content -->
                <div class="col-lg-6 login-wrap-bg">
                    <div class="login-wrapper">
                        <div class="loginbox">
                            <div class="login-right">
                                <div class="login-right-wrap">
                                    <div class="account-logo">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('public/dasassets/img/logo.png') }}" alt=""
                                                style="width: 90px; "></a>
                                    </div>
                                    <h2>Login</h2>
                                    <!-- Form -->
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        @if (Session::has('error'))
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-danger">
                                                        <div class="text-dark">{{ Session::get('error') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label>Email <span class="login-danger">*</span></label>
                                            <input class="form-control" name="email" type="text" required>

                                        </div>
                                        <div class="form-group">
                                            <label>Password <span class="login-danger">*</span></label>
                                            <input class="form-control pass-input" name="password" type="password"
                                                required>
                                            <span class="profile-views feather-eye-off toggle-password"></span>
                                        </div>

                                        <div class="form-group login-btn">
                                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                                        </div>
                                    </form>
                                    {{-- Form --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /Login Content -->

            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('public/dasassets/js/jquery-3.6.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('public/dasassets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Feather Js -->
    <script src="{{ asset('public/dasassets/js/feather.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('public/dasassets/js/app.js') }}"></script>

</body>

</html>
