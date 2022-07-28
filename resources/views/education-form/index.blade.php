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
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> PLAMENS </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>PLAMENS</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <a class="btn btn-info" href="/education-form/create">Criar FPM PLAMENS</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Curso</th>
                        <th>Estabelecimento</th>
                        <th>País</th>
                        <th>Duração</th>
                        <th>Data da Criação</th>
                        <th></th>
                    </thead>
                    <tbody>
                    @foreach ($educationForms as $educationForm)
                        <tr>
                            <th>{{ $educationForm->id }}</th>
                            <td>{{ $educationForm->title }}</td>
                            <td>{{ $educationForm->establishment }}</td>
                            <td>{{ $educationForm->country }}</td>
                            <td>{{ $educationForm->duration }}</td>
                            <td>{{ date( 'M j, Y', strtotime($educationForm->created_at)) }}</td>
                            <td><a href="{{ route('education-form.show', $educationForm->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('education-form.edit', $educationForm->id) }}" class="btn btn-default btn-sm">Edit</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>

@stop