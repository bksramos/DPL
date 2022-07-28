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
                    <li><i class="fa fa-file-text-o"></i>Criar Cursos</li>
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
                                	{!! Form::open(array('route' => 'course.store', 'files' => true)) !!}
                                		{{ Form::label('title', 'Nome:') }}
                                		{{ form::text('title', null, array('class' => 'form-control')) }}

                                		{{ Form::label('initials', 'Sigla:') }}
                                		{{ form::text('initials', null, array('class' => 'form-control')) }}

                                        {{ Form::label('class', 'Turma:') }}
                                        {{ form::text('class', null, array('class' => 'form-control')) }}

                                        {{ Form::label('dateline_start', 'Data de Início do Curso:') }}
                                            <div class="form-group input-group date">
                                                {{ form::text('dateline_start', null, array('class' => 'form-control')) }}
                                                 <span class="input-group-addon">
                                                     <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                  
                                                  
                                                  @error('dateline_start')
                                                      <small class="text-danger" role='alert'>{{ $message }}</small>
                                                  @enderror
                                            </div>
                                                    <script type="text/javascript">
                                                        $('.date').datepicker({
                                                            autoclose:true,
                                                            format: 'yyyy-mm-dd'
                                                        });
                                                    </script>


                                        {{ Form::label('featured_dashboard', 'Adicionar Dashboard do Curso:') }}
                                        {{ form::file('featured_dashboard') }}

                                        {{ Form::label('featured_report', 'Adicionar Relatório Estatístico do Curso') }}
                                        {{ form::file('featured_report') }}

                                		{{ Form::submit('Criar curso', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top 20px')) }}
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