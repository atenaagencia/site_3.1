@extends('layouts.app')
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
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
    #particulas{
        position:absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height:700px;
        opacity: 0.5;
    }
</style>
@section('content')

<header class="p-5 mx-auto" >
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

<section class="bg-light mx-auto">
    <p class="lead text-left text-light py-3 mx-auto p-md-2 p-sm-2">
        A Atena Agência traz para você os melhores profissionais que usarão seus poderes de cavalheiros cibernéticos como: 
        desenvolvimento web, palestras e treinamentos, marketing e mídias digitais, assessoria de imprensa, design gráfico, 
        campanhas publicitárias, materiais gráfico e planejamento estratégico.
    </p>
</section>

<footer>

</footer>

<script>
    particlesJS("particulas", {
    "particles":{
    "number":{
    "value":150,
    "density":{
    "enable":true,
    "value_area":800
    }
    },
    "color":{
    "value":"#800080"
    },
    "shape":{
    "type":"triangle",
    "stroke":{
    "width":0,
    "color":"#000000"
    },
    "polygon":{
    "nb_sides":5
    },
    "image":{
    "src":"img/github.svg",
    "width":100,
    "height":100
    }
    },
    "opacity":{
    "value":0.5,
    "random":false,
    "anim":{
    "enable":false,
    "speed":1,
    "opacity_min":0.1,
    "sync":false
    }
    },
    "size":{
    "value":3,
    "random":true,
    "anim":{
    "enable":false,
    "speed":40,
    "size_min":0.1,
    "sync":false
    }
    },
    "line_linked":{
    "enable":true,
    "distance":150,
    "color":"#800080",
    "opacity":0.4,
    "width":1
    },
    "move":{
    "enable":true,
    "speed":6,
    "direction":"none",
    "random":false,
    "straight":false,
    "out_mode":"out",
    "bounce":false,
    "attract":{
    "enable":false,
    "rotateX":600,
    "rotateY":1200
    }
    }
    },
    "interactivity":{
    "detect_on":"canvas",
    "events":{
    "onhover":{
    "enable":true,
    "mode":"repulse"
    },
    "onclick":{
    "enable":true,
    "mode":"push"
    },
    "resize":true
    },
    "modes":{
    "grab":{
    "distance":400,
    "line_linked":{
    "opacity":1
    }
    },
    "bubble":{
    "distance":400,
    "size":40,
    "duration":2,
    "opacity":8,
    "speed":3
    },
    "repulse":{
    "distance":200,
    "duration":0.4
    },
    "push":{
    "particles_nb":4
    },
    "remove":{
    "particles_nb":2
    }
    }
    },
    "retina_detect":true
    });
</script>
@endsection
