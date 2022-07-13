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
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Cursos </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>Legislações</li>
                    <li><i class="fa fa-file-text-o"></i>Adicionar Legislação</li>
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
                                	{!! Form::open(array('route' => 'legislation.store', 'files' => true)) !!}
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

                                		{{ Form::submit('Adicionar Legislação', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top 20px')) }}
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