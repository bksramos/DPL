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
                A seção de Ensino (SEN) compete <br>
            - Elaborar e atualizar o calendário das atividades de ensino a serem desenvolvidas pelo CIAER, considerando os dias letivos, os feriados, datas comemorativas e outros;<br>
            - Elaborar e atualizar os Currículos Mínimos, os Planos de Unidade Didática e os Planos de Avaliação, referentes à ação educativa dos cursos presenciais e à distância, ministrados pelo CIAER;<br>
            - Planejar e coordenar a execução dos cursos presenciais e à distância, ministrados pelo CIAER;<br>
            - Elaborar e atualizar a matriz curricular dos cursos presenciais e à distância, ministrados pelo CIAER;<br>
            - Supervisionar a plataforma de ensino;<br>
            - Verificar e solicitar a disponibilidade dos instrutores internos e externos ao CIAER;<br>
            - Analisar, mediante coleta de informações extraídas dos cursos, o resultado da pesquisa de satisfação dos alunos nos cursos presenciais e a distância, divulgá-la aos instrutores para ajustes, caso seja necessário; e<br>
            - Atualizar, anualmente, a Tabela do Comando da Aeronáutica (TCA) que dispõe sobre as atividades de ensino do CIAER.
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
            <a href="{{ route('legislation.cm') }}">
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
