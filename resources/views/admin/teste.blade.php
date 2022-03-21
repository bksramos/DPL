@extends('layouts.master')

@section('content')

    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i> Indicadores </h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                        <li><i class="icon_document_alt"></i>Indicadores</li>
                        <li><i class="fa fa-file-text-o"></i>Geral</li>
                    </ol>
                </div>
            </div>
            {{--            <div class="row">--}}
            {{--                <div class="col-lg-12">--}}
            {{--                    <section class="panel">--}}
            {{--                        <header class="panel-heading">--}}
            {{--                            Indicador Geral--}}
            {{--                        </header>--}}
            {{--                        <div class="container">--}}
            {{--                            <div class="row">--}}
            {{--                                <div class="col-lg-12">--}}
            {{--                                    <div class="card">--}}
            {{--                        Início do Conteúdo da Página--}}


            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <i class="fa fa-cloud-download"></i>
                        <div class="count">6.674</div>
                        <div class="title">Download</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="count">7.538</div>
                        <div class="title">Purchased</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box dark-bg">
                        <i class="fa fa-thumbs-o-up"></i>
                        <div class="count">4.362</div>
                        <div class="title">Order</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">
                        <i class="fa fa-cubes"></i>
                        <div class="count">1.426</div>
                        <div class="title">Stock</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="row">
                    <div class="col-lg-9 col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2><i class="fa fa-map-marker red"></i><strong>GRÁFICO 1</strong></h2>
                            </div>
                            {{--                                        <div class="row mt-3">--}}
                            {{--                                            <div class="col-md-9">--}}
                            {{--                                                <div class="row">--}}
                        </div>
                        {{--INÍCIO GRAFICO 1--}}
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <canvas id="myChart" ></canvas>
                                </div>
                            </div>
                        </div>
                        {{--FIM GRÁFICO 1--}}
                    </div>

                    {{--INÍCIO LISTA 1--}}
                    <div class="col-lg-3 col-md-6">
                        LISTA 1
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h6 class="mt-2">Lista 1</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-sm table table-striped" id="table_1"></table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--FIM LISTA 1--}}


                        <div class="row-mt-3">
                            /GRAF2
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="mt-2">Gráfico2</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart2"></canvas>
                                    </div>
                                </div>
                            </div>
                            {{--                                                    /GRAF3--}}
                            {{--                                                    <div class="col-md-3">--}}
                            {{--                                                        <div class="card">--}}
                            {{--                                                            <div class="card-header">--}}
                            {{--                                                                <div class="row">--}}
                            {{--                                                                    <div class="col-md-6">--}}
                            {{--                                                                        <h5 class="mt-2">Gráfico3</h5>--}}
                            {{--                                                                    </div>--}}
                            {{--                                                                        <div class="col-md-6">--}}
                            {{--                                                                            <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">--}}
                            {{--                                                                                <li class="nav-item">--}}
                            {{--                                                                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>--}}
                            {{--                                                                                </li>--}}
                            {{--                                                                                <li class="nav-item">--}}
                            {{--                                                                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>--}}
                            {{--                                                                                </li>--}}
                            {{--                                                                                <li class="nav-item">--}}
                            {{--                                                                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>--}}
                            {{--                                                                                </li>--}}
                            {{--                                                                            </ul>--}}
                            {{--                                                                        </div>--}}
                            {{--                                                                </div>--}}
                            {{--                                                            </div>--}}
                            {{--                                                            <div class="card-body">--}}
                            {{--                                                                <canvas id="myChart3"></canvas>--}}
                            {{--                                                            </div>--}}
                            {{--                                                        </div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}



                            {{--                                                --}}{{--LISTA 2--}}
                            {{--                                                <div class="row mt-3">--}}
                            {{--                                                    <div class="col-md-12">--}}
                            {{--                                                        <div class="card">--}}
                            {{--                                                            <div class="card-header">--}}
                            {{--                                                                <div class="row">--}}
                            {{--                                                                    <div class="col-md-4">--}}
                            {{--                                                                        <h6 class="mt-2">Lista 2</h6>--}}
                            {{--                                                                    </div>--}}
                            {{--                                                                    <div class="col-md-8">--}}
                            {{--                                                                        <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">--}}
                            {{--                                                                            <li class="nav-item">--}}
                            {{--                                                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>--}}
                            {{--                                                                            </li>--}}
                            {{--                                                                            <li class="nav-item">--}}
                            {{--                                                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>--}}
                            {{--                                                                            </li>--}}
                            {{--                                                                            <li class="nav-item">--}}
                            {{--                                                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>--}}
                            {{--                                                                            </li>--}}
                            {{--                                                                        </ul>--}}
                            {{--                                                                    </div>--}}
                            {{--                                                                </div>--}}
                            {{--                                                            </div>--}}
                            {{--                                                            <div class="card-body">--}}
                            {{--                                                                <table class="table table-sm table-striped" id="table_2"></table>--}}
                            {{--                                                            </div>--}}
                            {{--                                                        </div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                </div>--}}
                            {{--                                                --}}{{--LISTA 2--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}




                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        </div>
        </div>
        <!-- page end-->
    </section>
    </section>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="{{asset('js/gauge.min.js')}}"></script>
    <script src="{{asset('js/geral.js')}}"></script>
@endsection


{{--EXEMPLO DE DIV PARA 3 BOTÕES INTERATIVOS--}}
{{--<div class="col-md-6">--}}
{{--    <ul class="nav nav-pills align-content-end" id="pills-tab" role="tablist">--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link align-content-end" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}
<table class="table table-striped w-auto">
    <thead>
    <tr>
        <th style="text-align:center">OM</th>
        <th style="text-align:center">Quantidade</th>
    </tr>
    </thead>
    <tbody>

    @foreach($datas as $data)
        <tr>
            <td style="vertical-align: middle">{{$data->nome}}</td>
            <td style="vertical-align: middle">{{$data->visits}}</td>
            <td style="vertical-align: middle">
            </td>
        </tr>
@endforeach
