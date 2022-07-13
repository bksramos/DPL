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
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Eventos </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>Eventos</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Início</th>
                        <th>Término</th>
                        <th>Criado em</th>
                    </thead>
                    <tbody>
                    @foreach ($event as $event)
                        <tr>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->type }}</td>
                            <td>{{ $event->start }}</td>                       
                            <td>{{ $event->end }}</td>
                            <td>{{ date( 'M j, Y', strtotime($event->created_at)) }}</td>
                            <td><a href="{{ route('event-edit.edit', $event->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('event-edit.edit', $event->id) }}" class="btn btn-default btn-sm">Edit</a> </td>
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