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

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <script src="https://use.fontawesome.com/cdd53714a0.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/atena.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="row text-center text-white bg-purple pr-5 pl-5">
            <div class="col d-flex align-items-center justify-content-start secular-font">
        contato@atenaagencia.com
       
            </div>
            <div class="col d-flex align-items-center justify-content-end">
                <a href="https://www.facebook.com/atenaagencia" class="text-light" ><i class="social-media fa fa-facebook" aria-hidden="true" style="font-size: 12pt;"></i></a>
                <a href="https://www.instagram.com/atenaagencia" class="text-light"> <i class="social-media fa fa-instagram"aria-hidden="true" style="font-size: 12pt;"></i><a>
                <a href="https://wa.me/message/YXV377X54FJDO1" class="text-light"><i class="social-media fa fa-whatsapp" aria-hidden="true" style="font-size: 12pt;"></i><a>
            </div>
        
        </div>
        <nav class="navbar navbar-expand-md "> {{--navbar-light bg-white --}}
            <div class="container-fluid">
                <a class="navbar-brand py-3" href="{{ url('/') }}">
                    <img src="{{asset('img/logo_atena.png')}}" alt="" width="12%" class="ml-3">
                </a>
                <button class="navbar-toggler text-purple" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Início</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                teste <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">teste</a>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-purple p-1" style="border-top: 13px solid transparent; border-image: url(../img/color.jpeg) 30 stretch;">
            <div class="container-fluid">
                
                <div class="row text-center text-white">
                    <div class="col p-3 d-flex align-items-center justify-content-center">
                        <p class="secular-font" style="font-size: 14pt !important">Tudo que você precisa em um único lugar.
                        </p>
                    </div>
                    <div class="col p-3 d-flex align-items-center justify-content-center">
                        <img src="{{asset('img/logo_atena_branco.png')}}" alt="" width="10%" class="ml-3">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">      
                       <p class="secular-font"> 
                        Rua do Angari, Nº 26, Centro, Juazeiro-BA | (74) 98874-5337</p>
                    </div>
                 
                </div>
                
            </div>
        </footer>
    </div>
</body>

</html>