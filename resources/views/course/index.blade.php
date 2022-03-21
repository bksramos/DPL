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
                    <li><i class="fa fa-file-text-o"></i>Criar Cursos</li>
                </ol>
            </div>
        </div>


        <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>Curso</th>
                            <th>Turma</th>
                            <th>Data da Criação</th>
                            <th></th>
                        </thead>

                        <tbody>

                        @foreach ($courses as $course)

                            <tr>
                                <th>{{ $course->id }}</th>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->class }}
                                <td>{{ date( 'M j, Y', strtotime($course->created_at)) }}</td>
                                <td><a href="{{ route('course.show', $course->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('course.edit', $course->id) }}" class="btn btn-default btn-sm">Edit</a> </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
        {{--             <div class="text-center">
                        {!! $posts->links(); !!}
                    </div> --}}
                </div>
            </div>
    </section>
</section>

@stop