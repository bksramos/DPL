@extends('layouts.master')

@section('content')
<head>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
</head>


<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Cursos </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>Cursos</li>
                    <li><i class="fa fa-file-text-o"></i>Editar Cursos</li>
                </ol>
            </div>
        </div>
			 <div class="row">
			        {!! Form::model($goalForms, ['route' => ['goal.update', $goalForms->id], 'method' => 'PUT']) !!}
			        <div class="col-md-8">
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
			        </div>

			        <div class="col-md-4">
			            <div class="well">
			                <dl class="dl-horizontal">
			                    <dt>Created At:</dt>
			                    <dd>{{ date( 'M j, Y H:i', strtotime($goalForms->created_at)) }}</dd>
			                </dl>

			                <dl class="dl-horizontal">
			                    <dt>Last Updated:</dt>
			                    <dd>{{date( 'M j, Y H:i', strtotime($goalForms->updated_at)) }}</dd>
			                </dl>
			                <hr>
			                <div class="row">
			                    <div class="col-sm-6">
			                        {!! Html::linkRoute('goal.index', 'Cancel', array($goalForms->id), array('class' => 'btn btn-danger btn-block'))  !!}
			                    </div>
			                    <div class="col-sm-6">
			                        {{ Form::submit('Salvar Alterações', ['class' => 'btn btn-success btn-block']) }}
			                    </div>
			                </div>
			            </div>
			        </div>
			        {!! Form::close() !!}
			    </div> <!-- end of the .row (end of the form) -->
			    </section>
        <!-- page end-->
    </section>

@stop