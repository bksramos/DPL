@extends('layouts.master')
@extends('partials._messages')
@section('content')

<section id="main-content">
    <div class="row">
        <div class="col-md-2">
            <section class="wrapper">
                <img src="/img/ciaer.jpg" alt="Logo">
            </section>
        </div>
        <div class="col-md-8">
            <section class="wrapper">
            <h1 align="center"> Seção de Ensino - SEN </h1>
            <br>
            <div class="panel-body">
                A Divisão de Planejamento (DPL) do Centro de Inteligência da Aeronáutica (CIAER) é responsável por orientar, coordenar e controlar estudos e propor medias que visem ao desenvolvimento e ao fortalecimento da atividade de Inteligência no COMAER;
                Através de atividades que envolvem planejamento, execução e avaliação de Cursos na área de Inteligência, orientações psicológicas, análises estatísticas, agendamentos de briefings para missões no exterior e constante atualizações de normas e regimentos a DPL como apoio para Produção e Proteção do Conhecimento acessorando a toamda de decisão no CIAER e no SINTAER.
            </div>
            </section>
        </div>
        <div class="col-md-2">
            <section class="wrapper">
                <img src="/img/ciaer.jpg" alt="Logo">
            </section>
        </div>        
    </div>
        <div class="row">
        <div class="col-md-4" align="center">
            <h3 align="center">Perfis Profissiográficos</h3>
            <a href="{{ route('psycho.profile') }}">
                <img src="/img/sections/SGP/PSICO.png" alt="PSICO" width="400" height="300">
            </a>
        </div>
        <div class="col-md-4" align="center">
            <h3 align="center">SGC</h3>
            <a href="#">
                <img src="/img/sections/SGP/SGC.png" alt="SGC" width="400" height="300">
            </a>
        </div>
        <div class="col-md-4" align="center">
            <h3 align="center">Avaliações Psicológicas</h3>
            <a href="{{ route('psycho.evaluation') }}">
                <img src="/img/sections/SGP/AVL.png" alt="AVL" width="400" height="300">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" align="center">
            <h3 align="center">Briefings</h3>
            <a href="#">
                <img src="/img/sections/SGP/BRIEFING.jpg" alt="BRIEFING" width="400" height="300">
            </a>            
        </div>
        <div class="col-md-6" align="center">
            <h3 align="center">ADIDOS</h3>
            <a href="#">
                <img src="/img/sections/SGP/ADIDOS.png" alt="ADIDOS" width="400" height="300">
            </a>            
        </div>
    </div>


</section>
        <!-- page end-->
@endsection
