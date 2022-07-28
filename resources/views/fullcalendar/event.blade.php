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
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Eventos </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>Eventos</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <a class="btn btn-info" href="{{ route('fullcalendar') }}">Gerenciar Eventos</a>
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
                        <th>Descrição</th>
                    </thead>
                    <tbody>
                    @foreach ($event as $event)
                        <tr>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->type }}</td>
                            <td>{{ $event->start }}</td>                       
                            <td>{{ $event->end }}</td>
                            <td>{{ $event->description }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>

@stop