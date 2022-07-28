@extends('layouts.master')
@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >

<section id="main-content">
    <div class="row">
        <div class="col-md-2">
            <section class="wrapper">
                <img src="/img/ciaer.jpg" alt="Logo">
            </section>
        </div>
        <div class="col-md-8">
            <section class="wrapper">
            <h1 align="center"> ESTATÍSTICA E GESTÃO DE DADOS </h1>
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
        <div class="col-md-6" align="center">
            <h3 align="center">PLAMENS</h3>
            <a href="{{ route('education-form.index') }}">
                <img src="/img/sections/SED/PLAMENS.png" alt="PLAMENS" width="400" height="300">
            </a>
        </div>
        <div class="col-md-6" align="center">
            <h3 align="center">PLAMTAX</h3>
            <a href="{{ route('technical-form.index') }}">
                <img src="/img/sections/SED/PLAMTAX.png" alt="PLAMTAX" width="400" height="300">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" align="center">
            <h3 align="center">FPAB</h3>
            <a href="#">
                <img src="/img/sections/SED/FPAB1.jpg" alt="FPAB" width="400" height="300">
            </a>            
        </div>
        <div class="col-md-6" align="center">
            <h3 align="center">CURSOS</h3>
            <a href="{{ route('course.index') }}">
                <img src="/img/sections/SED/CURSOS.png" alt="CURSOS" width="400" height="300">
            </a>            
        </div>
    </div>


</section>
        <!-- page end-->
@endsection
