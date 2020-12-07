@extends('layouts.app')
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

@section('content')

<header class="p-5 mx-auto">
    <div id="particulas"></div>
    <!-- <img src="{{asset('img/logo_atena.png')}}" alt="" width="30%" class="ml-3" style="position: relative; left: -140px; opacity: 0.1;"> -->
    <h1 class="display-3 text-center text-purple p-lg-5 p-md-0 p-sm-0" id="teste">
        Uma agência <span class="text-dark">diferente</span>.
    </h1>
    <p class="lead montserrat-font text-center text-dark py-3 mx-auto p-md-2 p-sm-2" style="font-size: 15pt !important">
        Somos mais que uma agência, somos uma equipe de soluções e resultados completos,
        onde diferentes talentos se unem conectando ideias, inspirações e conhecimentos para tocar
        as mentes e os corações de consumidores em todas as suas conexões, plataformas e estações.
    </p>
    <div class="text-center py-5">
        <a href="#" class="btn btn-outline-purple rounded-circle secular-font lead navlink" style="padding: 20px;">
            <i class="fa fa-arrow-down"></i>
        </a>
    </div>
</header>

<section class="bg-light section-home" style="background:linear-gradient(0deg, rgba(128, 0, 128, 0.9), rgba(255, 0, 150, 0.3)), url('../img/creative.jpeg') no-repeat center center fixed; backgorund-size: cover">
    <h1 class="display-3 text-center text-white p-lg-5 p-md-0 p-sm-0">
        O time <i class="fa fa-plus p-2 text-warning"></i> criativo.
    </h1>
    <p class="lead text-center text-white montserrat-font py-3 mx-auto p-md-2 p-sm-2" style="font-size: 17pt !important;">
        A Atena Agência traz para você os melhores profissionais que usarão seus poderes de cavalheiros cibernéticos
        como: desenvolvimento web, palestras e treinamentos, marketing e mídias digitais, assessoria de imprensa, design
        gráfico, campanhas publicitárias, materiais gráfico e planejamento estratégico.
    </p>
    <div class="text-center py-3">
        <a href="#" class="btn btn-outline-light rounded-circle secular-font lead navlink" style="padding: 20px;">
            <i class="fa fa-star"></i>
        </a>
    </div>
</section>


<section class="bg-white section-ourjob p-5 text-purple">
    <div class="container">
        <h1 class="display-4 text-center py-4">
            O que nós <span class="">fazemos</span>
        </h1>
    </div>
    <div class="container pt-4 pb-0 text-light">
        <!--first line of posts-->
        <div class="row py-4">
            <div class="col-md-3">
                <div class="card h-100 border-0 p-5" style="display: flex; align-items: center; justify-content: center; background: url('https://images.pexels.com/photos/3981477/pexels-photo-3981477.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat center center fixed; background-size: cover;">
                    <h2 class="montserrat-font">Marketing Digital</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 p-5" style="display: flex; align-items: center; justify-content: center; background: url('https://images.pexels.com/photos/3981477/pexels-photo-3981477.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat center center fixed; background-size: cover;">
                    <h2 class="montserrat-font text-center">Publicidade e Propaganda</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 p-5" style="display: flex; align-items: center; justify-content: center; background: url('https://images.pexels.com/photos/3981477/pexels-photo-3981477.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat center center fixed; background-size: cover;">
                    <h2 class="montserrat-font">Identidade Visual</h2>
                </div>
            </div>
        </div><!--end first line of posts-->

        <!--second line of posts-->
        <div class="row pb-3">
            <div class="col-md-4">
                <div class="card h-100 border-0 p-5" style="display: flex; align-items: center; justify-content: center; background: url('https://images.pexels.com/photos/3981477/pexels-photo-3981477.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat center center fixed; background-size: cover;">
                    <h2 class="montserrat-font">Lorem Ipsum</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 p-5" style="display: flex; align-items: center; justify-content: center; background: url('https://images.pexels.com/photos/3981477/pexels-photo-3981477.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat center center fixed; background-size: cover;">
                    <h2 class="montserrat-font">Desenvolvimento Web</h2>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card h-100 border-0 p-5" style="display: flex; align-items: center; justify-content: center; background: url('https://images.pexels.com/photos/3981477/pexels-photo-3981477.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat center center fixed; background-size: cover;">
                    <h2 class="montserrat-font">Lorem Ipsum</h2>
                </div>
            </div>
        </div><!--end second line of posts-->
    </div>

    <div class="container py-5">
        <p class="lead text-center montserrat-font mx-auto p-md-2 p-sm-2" style="font-size: 17pt !important;">
            A Atena Agência traz para você os melhores profissionais que usarão seus poderes de cavalheiros cibernéticos
            como: desenvolvimento web, palestras e treinamentos, marketing e mídias digitais, assessoria de imprensa, design
            gráfico, campanhas publicitárias, materiais gráfico e planejamento estratégico.
        </p>
    </div>
    <div class="text-center py-3">
        <a href="#" class="btn btn-purple rounded-circle secular-font lead navlink" style="padding: 20px;">
            <i class="fa fa-arrow-down"></i>
        </a>
    </div>
</section>


<section class="bg-light section-comments">
    <div class="mx-auto">
        <p class="secular-font text-center py-3 mb-5 p-md-2 p-sm-2 display-4 lead" style="color: purple !important; font-weight: normal !important">Depoimentos</p>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-12 mx-auto">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p class="lead text-left text-dark pt-3 py-3 mx-auto p-md-5 p-sm-3 bg-white shadow-sm" style="font-size: 17pt !important; border-top: 8px solid transparent; border-image: url(../img/color.jpeg) 30 stretch;">
                    Magnam cupiditate omnis praesentium eius hic facere ducimus adipisci voluptatibus iure enim ipsum dignissimos nihil quis ab, nesciunt ipsa recusandae dicta illo.
                </p>
                <p class="lead text-dark font-weight-bold py-3 mx-auto p-md-2 p-sm-2 mt-3 text-right" style="font-size: 17pt !important;">
                    <small>Fulano de Tal</small>
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p class="lead text-left text-dark pt-3 py-3 mx-auto p-md-5 p-sm-3 bg-white shadow-sm" style="font-size: 17pt !important; border-top: 8px solid transparent; border-image: url(../img/color.jpeg) 30 stretch;">
                    Magnam cupiditate omnis praesentium eius hic facere ducimus adipisci voluptatibus iure enim ipsum dignissimos nihil quis ab, nesciunt ipsa recusandae dicta illo.
                </p>
                <p class="lead text-dark font-weight-bold py-3 mx-auto p-md-2 p-sm-2 mt-3 text-right" style="font-size: 17pt !important;">
                    <small>Fulano de Tal</small>
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p class="lead text-left text-dark pt-3 py-3 mx-auto p-md-5 p-sm-3 bg-white shadow-sm" style="font-size: 17pt !important; border-top: 8px solid transparent; border-image: url(../img/color.jpeg) 30 stretch;">
                    Magnam cupiditate omnis praesentium eius hic facere ducimus adipisci voluptatibus iure enim ipsum dignissimos nihil quis ab, nesciunt ipsa recusandae dicta illo.
                </p>
                <p class="lead text-dark font-weight-bold py-3 mx-auto p-md-2 p-sm-2 mt-3 text-right" style="font-size: 17pt !important;">
                    <small>Fulano de Tal</small>
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p class="lead text-left text-dark pt-3 py-3 mx-auto p-md-5 p-sm-3 bg-white shadow-sm" style="font-size: 17pt !important; border-top: 8px solid transparent; border-image: url(../img/color.jpeg) 30 stretch;">
                    Magnam cupiditate omnis praesentium eius hic facere ducimus adipisci voluptatibus iure enim ipsum dignissimos nihil quis ab, nesciunt ipsa recusandae dicta illo.
                </p>
                <p class="lead text-dark font-weight-bold py-3 mx-auto p-md-2 p-sm-2 mt-3 text-right" style="font-size: 17pt !important;">
                    <small>Fulano de Tal</small>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="p-5">
    <div class="mx-auto">
        <h1 class="lead secular-font py-3 mx-auto p-md-2 p-sm-2 text-purple display-4">Alguns de nossos clientes</h1>
    </div>
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
</section> -->


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