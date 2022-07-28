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
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Análises Psicológicas </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>Análises Psicológicas</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>Tipo</th>
                        <th>Assunto</th>
                        <th>Número</th>
                        <th>Ano</th>
                        <th>Data da Criação</th>
                        <th></th>
                    </thead>
                    <tbody>
                    @foreach ($psychoEvaluations as $psychoEvaluation)
                        <tr>
                            <td>{{ $psychoEvaluation->type }}</td>
                            <td>{{ $psychoEvaluation->title }}</td>
                            <td>{{ $psychoEvaluation->number }}psychoEvaluation
                            <td>{{ $psychoEvaluation->year }}</td>
                            <td>{{ date( 'M j, Y', strtotime($psychoEvaluation->created_at)) }}</td>
                            <td><a href="{{ route('psycho.file', $psychoEvaluation->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('psycho.edit', $psychoEvaluation->id) }}" class="btn btn-default btn-sm">Edit</a> </td>
                            </td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>

@stop