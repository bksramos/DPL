@extends('layouts.master')
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
            <h3 align="center">Calendário DPL</h3>
            <a href="{{ route('fullcalendar') }}">
                <img src="/img/sections/SEN/CALENDAR.png" alt="CALENDAR" width="400" height="300">
            </a>
        </div>
        <div class="col-md-4" align="center">
            <h3 align="center">Currículos Mínimos</h3>
            <a href="#">
                <img src="/img/sections/SEN/CURRICULUM.png" alt="CURRICULUM" width="400" height="300">
            </a>
        </div>
        <div class="col-md-4" align="center">
            <h3 align="center">TCA</h3>
            <a href="{{ route('legislation.tca') }}">
                <img src="/img/sections/SEN/TCA.png" alt="TCA" width="400" height="300">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>


</section>
        <!-- page end-->
@endsection
