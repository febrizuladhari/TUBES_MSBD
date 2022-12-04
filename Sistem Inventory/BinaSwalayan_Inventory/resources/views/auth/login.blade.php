<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <title>Bina Swalayan - Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon.ico') }}">
    @yield('style')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendor/css/pages/page-auth.css') }}" />

    <style>
        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab, #614385);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('js/config.js') }}"></script>


</head>

<body>
    @include('sweetalert::alert')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <!-- Login -->
            <div class="card">
                <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                    <img src="{{ asset('img/favicon/bina logo.png') }}" class="img-fluid img-thumbnail mx-auto d-block" width="30%" alt="Logo">
                </div>
                <!-- /Logo -->
                    <h4 class="mb-2 mt-4 text-center">Welcome to Bina Swalayan Inventory!</h4>
                    <p class="mb-4 text-center">Please sign-in to your account and start organizing</p>
                    {{-- Error Alert --}}
                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <form method="POST" action="{{ url('proses_login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username"  name="username" placeholder="Enter your username" required autofocus />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required/>
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                        </div>
                        @error('login_gagal')
                            <br>
                            <h4 class="mytitle" style="color: red">{{ $message }}</h4>
                        @enderror
                        @error('login_error')
                            <br>
                            <h4 class="mytitle" style="color: red">{{ $message }}</h4>
                        @enderror
                    </form>

                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>


    <!-- JS -->
    <script src="{{ asset('vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/js/menu.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('script')

    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>
</html>
