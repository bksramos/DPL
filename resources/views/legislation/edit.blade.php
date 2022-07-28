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
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Legislações </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>Legislações</li>
                    <li><i class="fa fa-file-text-o"></i>Editar Legislações</li>
                </ol>
            </div>
        </div>
			 <div class="row">
			        {!! Form::model($legislation, ['route' => ['legislation.update', $legislation->id], 'method' => 'PUT', 'files' => true]) !!}
			        <div class="col-md-8">
						{{ Form::label('title', 'Título:') }}
                		{{ form::text('title', null, array('class' => 'form-control')) }}

                		{{ Form::label('type', 'tipo:') }}
                		{{ form::text('type', null, array('class' => 'form-control')) }}

                        {{ Form::label('number', 'Número:') }}
                        {{ form::number('number', null, array('class' => 'form-control')) }}

                        {{ Form::label('digit_initials', 'Dígito / Sigla:') }}
                        {{ form::text('digit_initials', null, array('class' => 'form-control')) }}

                        {{ Form::label('year', 'Ano:') }}
                        {{ form::number('year', null, array('class' => 'form-control')) }}

                        {{ Form::label('publish_date', 'Data de Publicação:') }}
                            <div class="form-group input-group date">
                                {{ form::text('publish_date', null, array('class' => 'form-control')) }}
                                 <span class="input-group-addon">
                                     <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                                                                    
                                  @error('publish_date')
                                      <small class="text-danger" role='alert'>{{ $message }}</small>
                                  @enderror
                            </div>
                                    <script type="text/javascript">
                                        $('.date').datepicker({
                                            autoclose:true,
                                            format: 'yyyy-mm-dd'
                                        });
                                    </script>

                        {{ Form::label('featured_file', 'Adicionar Legislação:') }}
                        {{ form::file('featured_file') }}
			        </div>

			        <div class="col-md-4">
			            <div class="well">
			                <dl class="dl-horizontal">
			                    <dt>Created At:</dt>
			                    <dd>{{ date( 'M j, Y H:i', strtotime($legislation->created_at)) }}</dd>
			                </dl>

			                <dl class="dl-horizontal">
			                    <dt>Last Updated:</dt>
			                    <dd>{{date( 'M j, Y H:i', strtotime($legislation->updated_at)) }}</dd>
			                </dl>
			                <hr>
			                <div class="row">
			                    <div class="col-sm-6">
                                    {!! Form::open(['route' => ['legislation.destroy', $legislation->id], 'method' => 'DELETE']) !!}

                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                                    {!! Form::close() !!}
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