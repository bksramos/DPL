@extends('layouts.master')

@section('content')
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Secretaria DPL </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>Banco de Metas</li>
                    <li><i class="fa fa-file-text-o"></i>Criar Item Banco de Metas</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="card">
                                	{!! Form::open(array('route' => 'goal.store', 'files' => true)) !!}
                                		{{ Form::label('division', 'Sigla da Divisão:') }}
                                		{{ form::text('division', null, array('class' => 'form-control')) }}

                                		{{ Form::label('urgency', 'Urgência:') }}
                                		{{ form::text('urgency', null, array('class' => 'form-control')) }}

                                        {{ Form::label('priority', 'Prioridade:') }}
                                        {{ form::text('priority', null, array('class' => 'form-control')) }}

                                        {{ Form::label('description', 'Descrição:') }}
                                        {{ form::text('description', null, array('class' => 'form-control')) }}

                                        {{ Form::label('unity', 'Unidade:') }}
                                        {{ form::text('unity', null, array('class' => 'form-control')) }}

                                        {{ Form::label('quantity', 'Quantidade:') }}
                                        {{ form::number('quantity', null, array('class' => 'form-control')) }}

                                        {{ Form::label('unitary_value', 'Valor Unitário:') }}
                                        {{ form::number('unitary_value', null, array('class' => 'form-control', 'step'=>'any')) }}

                                        {{ Form::label('amount', 'Valor Total:') }}
                                        {{ form::number('amount', null, array('class' => 'form-control', 'step'=>'any')) }}

                                        {{ Form::label('year', 'Ano:') }}
                                        {{ form::number('year', null, array('class' => 'form-control')) }}

                                		{{ Form::submit('Criar Item', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top 20px')) }}
                                	{!! Form::close()!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
@endsection