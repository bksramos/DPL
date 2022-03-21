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
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Banco de Metas </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>Banco de Metas</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <a class="btn btn-dark" href="/goal/create">Criar Banco de Metas</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>Divisão</th>
                        <th>Descrição</th>
                        <th>Unidade</th>
                        <th>Quantidade</th>
                        <th>Valor Unitário</th>
                        <th>Valor Total</th>
                        <th>Data da Criação</th>
                        <th></th>
                    </thead>
                    <tbody>
                    @foreach ($goalForms as $goalForm)
                        <tr>
                            <td>{{ $goalForm->division }}</td>
                            <td>{{ $goalForm->description }}</td>
                            <td>{{ $goalForm->unity }}</td>
                            <td>{{ $goalForm->quantity }}</td>
                            <td>{{ $goalForm->unitary_value }}</td>
                            <td>{{ $goalForm->amount }}</td>
                            <td>{{ date( 'M j, Y', strtotime($goalForm->created_at)) }}</td>
                            <td><a href="{{ route('goal.show', $goalForm->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('goal.edit', $goalForm->id) }}" class="btn btn-default btn-sm">Edit</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>

@stop