@extends('layouts.master')

@section('content')
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="{{asset('css/treestyle.css')}}" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Seções </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/home">Início</a></li>
                    <li><i class="icon_document_alt"></i>Seções</li>
                    <li><i class="fa fa-file-text-o"></i>Efetivo</li>
                </ol>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="tree">
                    <ul>
                        <li> <a href="#"><img src="img/sections/1.jpg"><span>Chefia</span></a>
                        <ul>

                        <li> <a href="#"><img src="img/sections/5.jpg"><span>Secretaria</span></a>
                        <ul>
                            <li> <a href="#"><img src="img/sections/6.jpg"><span>Seção de Doutrina</span></a> </li>
                            <li> <a href="#"><img src="img/sections/2.jpg"><span>Seção de Ensino</span></a> </li>
                            <li> <a href="#"><img src="img/sections/3.jpg"><span>Seção de Recursos Humanos</span></a> </li>
                            <li> <a href="#"><img src="img/sections/7.jpg"><span>Seção de Estatística e Gestão de Dados</span></a> </li>
                        </ul>
                        </li>
                    </ul>
                    </li>
                </ul>
            </div>
            </div>
            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            <div class="row">
                <div class="tree">
                    <ul>
                        <li> <a href="#"><img src="img/sections/6.jpg"><span>Seção de Doutrina</span></a> </li>
                        <li> <a href="#"><img src="img/sections/2.jpg"><span>Seção de Ensino</span></a> </li>
                        <li> <a href="#"><img src="img/sections/3.jpg"><span>Seção de Recursos Humanos</span></a> </li>
                        <li> <a href="#"><img src="img/sections/7.jpg"><span>Seção de Estatística e Gestão de Dados</span></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>

@stop