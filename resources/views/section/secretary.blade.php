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
            <h1 align="center"> Secretaria DPL </h1>
            <br>
            <div class="panel-body">
                A secretaria (SEC) é responsável por: <br>
            - executar atividades internas de expediente e suporte administrativo à Divisão;<br>
            - interagir com a DAD nos assuntos orçamentários, financeiros, patrimoniais e administrativos da Divisão; e <br>
            - elaborar e atualizar os atos normativos internos da Divisão em coordenação com as demais Seções da DPL.
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
            <h3 align="center">Banco de Metas</h3>
            <a href="{{ route('goal.index') }}">
                <img src="/img/sections/SEC/BD.png" alt="BD" width="400" height="300">
            </a>
        </div>
        <div class="col-md-6" align="center">
            <h3 align="center">NPA - DPL</h3>
            <a href="{{ route('legislation.npa') }}">
                <img src="/img/sections/SEC/LEG.png" alt="LEG" width="400" height="300">
            </a>
        </div>
    </div>
    <div class="row">
        
    </div>


</section>
        <!-- page end-->
@endsection
