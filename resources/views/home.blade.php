@extends('layouts.app')
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

@section('content')

<header class="p-5 mx-auto">
    <div id="particulas"></div>
    <!-- <img src="{{asset('img/logo_atena.png')}}" alt="" width="30%" class="ml-3" style="position: relative; left: -140px; opacity: 0.1;"> -->
    <h1 class="display-3 text-center text-purple p-lg-5 p-md-0 p-sm-0" id="teste">
        Uma <span class="text-dark">agência</span> diferente.
    </h1>
    <p class="lead text-center text-dark py-3 mx-auto p-md-2 p-sm-2">
        Somos mais que uma agência, somos uma equipe de soluções e resultados completos,
        onde diferentes talentos se unem conectando ideias, inspirações e conhecimentos para tocar
        as mentes e os corações de consumidores em todas as suas conexões, plataformas e estações.
    </p>
    <div class="text-center py-5">
        <a href="#" class="btn btn-purple secular-font btn-large lead navlink">
            VER MAIS
        </a>
        <a href="#" class="btn btn-link text-dark secular-font font-weight-bold btn-large lead navlink">
            LOREM IPSUM
        </a>
    </div>
</header>

<section class="bg-light section-home">
    <p class="lead text-left text-light py-3 mx-auto p-md-2 p-sm-2">
        A Atena Agência traz para você os melhores profissionais que usarão seus poderes de cavalheiros cibernéticos
        como:
        desenvolvimento web, palestras e treinamentos, marketing e mídias digitais, assessoria de imprensa, design
        gráfico,
        campanhas publicitárias, materiais gráfico e planejamento estratégico.
    </p>
</section>

<section class="bg-light section-comments">
    <div class="mx-auto">
        <p class="secular-font py-3 mx-auto p-md-2 p-sm-2 display-4 lead" style="color: purple !important; font-weight: normal !important">Depoimentos</p>
    </div>
    <p class="lead text-left text-light pt-3 py-3 mx-auto p-md-4 p-sm-3 bg-white border-purple border shadow-sm">
        "A Atena Agência traz para você os melhores profissionais que usarão seus poderes de cavalheiros cibernéticos
        como:
        desenvolvimento web, palestras e treinamentos, marketing e mídias digitais, assessoria de imprensa, design
        gráfico,
        campanhas publicitárias, materiais gráfico e planejamento estratégico."
    </p>
    <p class="lead text-light py-3 mx-auto p-md-2 p-sm-2 mt-3 text-right">
        <small>Fulano de Tal</small>
    </p>
</section>

<section>
    <div class="text-center pt-3 secular-font"><h2>Alguns de nossos clientes</h2></div>
    
    <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
        <div class="carousel-cell d-flex align-items-center justify-content-center">
            <img src="{{asset('img/logo_atena.png')}}" alt="">
        </div>
        <div class="carousel-cell d-flex align-items-center justify-content-center"> 
            <img src="{{asset('img/logo_atena.png')}}" alt="">
        </div>
        <div class="carousel-cell d-flex align-items-center justify-content-center"> 
            <img src="{{asset('img/logo_atena.png')}}" alt="">
        </div>
        <div class="carousel-cell d-flex align-items-center justify-content-center"> 
            <img src="{{asset('img/logo_atena.png')}}" alt="">
        </div>
        <div class="carousel-cell d-flex align-items-center justify-content-center"> 
            <img src="{{asset('img/logo_atena.png')}}" alt="">
        </div>
        <div class="carousel-cell d-flex align-items-center justify-content-center"> 
            <img src="{{asset('img/logo_atena.png')}}" alt="">
        </div>
    </div>
</section>


<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="{{asset('js/particulas.js')}}"></script>

<style>
    #teste_logo::before {
        content: url('../img/logo_atena.png');
        width: 10pt !important;
        height: 10pt !important;
        position: absolute;
        left: -180px;
        display: block;
        opacity: 0.1;
    }

    #particulas {
       
        z-index: -9999;
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 700px;
        opacity: 0.5;
    }

    /* 
    .carousel {
        background: #EEE;
    } */

    .carousel-cell {
        width: 25%;
        max-width: 66%;
        height: 200px;
        margin-right: 10px;
        border-radius: 5px;
    }

    .carousel-cell img {
        width: 100px;
        max-width: 66%;
    }

    /* white circles */
    .flickity-page-dots .dot {
        display: none
    }
</style>



@endsection