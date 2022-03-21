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
                    <li><i class="icon_document_alt"></i>Cursos</li>
                    <li><i class="fa fa-file-text-o"></i>{{ $course->initials }} - {{ $course->class }}</li>

                </ol>
            </div>
        </div>

        <div class="row">
                <div class="col-md-8">
                    
                    <h1 align="center">{{ $course->title }} - {{ $course->initials }} </h1>

                    <hr>

                    <div class="col-md-6" align="center">
                       <a href="{{ route('course.report', $course->id) }}" class="btn btn-lg btn-info" style="width: 250px; height:150px">
                        <i class="icon-ok" style="font-size:90px; vertical-align: middle;"></i>
                                <span class="glyphicon glyphicon-list-alt"></span> Relatório
                        </a>
                    </div>

                    <div class="col-md-6" align="center">
                       <a href="{{ route('course.dashboard', $course->id) }}" class="btn btn-lg btn-success height-30"  style="width: 250px; height:150px">
                        <i class="icon-ok" style="font-size:90px; vertical-align: middle;"></i>
                                <span class="glyphicon glyphicon-list-alt " align="center"></span> Dashboard
                        </a>
                    </div>


                </div>

                <div class="col-md-4">
                    <div class="well">
        {{--                 <dl class="dl-horizontal">
                            <label>Url:</label>
                            <p><a href="{{ url('blog', $post->slug) }}">{{ url('blog', $post->slug)}}</a></p>
                        </dl>
         --}}
                        <dl class="dl-horizontal">
                            <label>Curso:</label>
                            <p>{{ $course->title }}</p>
                        </dl>

                        <dl class="dl-horizontal">
                            <label>Criado em:</label>
                            <p>{{ date( 'M j, Y H:i', strtotime($course->created_at)) }}</p>
                        </dl>

                        <dl class="dl-horizontal">
                            <label>Atualizado em:</label>
                            <p>{{date( 'M j, Y H:i', strtotime($course->updated_at)) }}</p>
                        </dl>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                {!! Html::linkRoute('course.edit', 'Edit', array($course->id), array('class' => 'btn btn-primary btn-block'))  !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::open(['route' => ['course.destroy', $course->id], 'method' => 'DELETE']) !!}

                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                                {!! Form::close() !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                {{ Html::linkRoute('course.index', '<< Ver todos Cursos', [], ['class' => 'btn btn-default btn-block btn-1-spacing']) }}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
</section>

@endsection
