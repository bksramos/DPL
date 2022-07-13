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
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> PLAMTAX </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>PLAMTAX</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <a class="btn btn-info" href="/technical-form/create">Criar FPM PLAMTAX</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Evento</th>
                        <th>Estabelecimento</th>
                        <th>País</th>
                        <th>Duração</th>
                        <th>Data da Criação</th>
                        <th></th>
                    </thead>
                    <tbody>
                    @foreach ($technicalForms as $technicalForm)
                        <tr>
                            <th>{{ $technicalForm->id }}</th>
                            <td>{{ substr($technicalForm->title, 0, 30) }}</td>
                            <td>{{ substr($technicalForm->establishment, 0 ,30) }}</td>
                            <td>{{ $technicalForm->country }}</td>
                            <td>{{ $technicalForm->event_duration }}</td>
                            <td>{{ date( 'M j, Y', strtotime($technicalForm->created_at)) }}</td>
                            <td><a href="{{ route('technical-form.show', $technicalForm->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('technical-form.edit', $technicalForm->id) }}" class="btn btn-default btn-sm">Edit</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>

@stop