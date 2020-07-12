<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Atena Agencia</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/cdd53714a0.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/atena.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md "> {{--navbar-light bg-white --}}
            <div class="container-fluid">
                <a class="navbar-brand py-3" href="{{ url('/') }}">
                    <img src="{{asset('img/logo_atena.png')}}" alt="" width="12%" class="ml-3">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">teste</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                teste <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">teste</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-purple p-3">
            <div class="container-fluid">
                <div class="row text-center text-white">
                    <div class="col d-flex align-items-center justify-content-center">
                        <p class="text-center secular-font" style="font-size: 1.5vw;">Tudo que você precisa em um único lugar.
                        </p>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="{{asset('img/logo_atena_branco.png')}}" alt="" width="18%" class="ml-3">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <i class="social-media fa fa-facebook" aria-hidden="true"></i>
                        <i class="social-media fa fa-instagram" aria-hidden="true"></i>
                        <i class="social-media fa fa-whatsapp" aria-hidden="true"></i>
                    </div>


                </div>
            </div>
        </footer>
    </div>
</body>

</html>