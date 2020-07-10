@extends('layouts.app')

<style>
    #teste_logo::before{
        content: url('../img/logo_atena.png');
        width: 10pt !important;
        height: 10pt !important;
        position: absolute;
        left: -180px;
        display: block;
        opacity: 0.1;
    }
</style>
@section('content')

<header class="p-5 mx-auto">
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

<section class="p-5 bg-light mx-auto">
    <h3 class="display-4 text-dark secular-font p-lg-5 p-md-0 p-sm-0" id="teste_logo">
        Lorem Ipsum
    </h3>
    <p class="lead text-left text-dark py-3 mx-auto p-md-2 p-sm-2">
        Somos mais que uma agência, somos uma equipe de soluções e resultados completos, 
        onde diferentes talentos se unem conectando ideias, inspirações e conhecimentos para tocar 
        as mentes e os corações de consumidores em todas as suas conexões, plataformas e estações.
    </p>
</section>

<footer>

</footer>
@endsection
