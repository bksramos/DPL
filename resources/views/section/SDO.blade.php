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
            <h1 align="center"> Seção de Doutrina - SDO </h1>
            <br>
            <div class="panel-body">
                A Seção de Doutrina (SDO) é responsável por:
            - Manter atualizada a Doutrina de Inteligência da Aeronáutica; <br>
            - Manter atualizadas as legislações que orientam a Atividade de Inteligência no COMAER, em coordenação com as demais Divisões do CIAER;<br>
            - Preparar as legislações produzidas pelo CIAER, gerenciando todo o processo para publicação, bem como encaminhar os documentos originais para o Arquivo do CIAER;<br>
            - Manter arquivadas as cópias das legislações e as publicações normativas e doutrinárias pertinentes à Atividade de Inteligência do SINTAER, SINDE e SISBIN; e <br>
            - Coordenar e executar o Programa de Fortalecimento de Valores (PFV) do CIAER.
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
            <h3 align="center">Programa de Fortalecimento de Valores</h3>
            <a href="{{ route('pfv') }}">
                <img src="/img/sections/SDO/PFV.png" alt="PFV" width="400" height="300">
            </a>
        </div>
        <div class="col-md-6" align="center">
            <h3 align="center">Legislações</h3>
            <a href="{{ route('legislation.index') }}">
                <img src="/img/sections/SDO/LEG1.png" alt="LEG" width="400" height="300">
            </a>
        </div>
    </div>


</section>
        <!-- page end-->
@endsection
