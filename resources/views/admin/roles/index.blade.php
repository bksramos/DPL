@extends('layouts.master')

@section('content')

<section id="main-content">
<section class="wrapper">
     <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Controle de Funções</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/home">Início</a></li>
                <li><i class="icon_document_alt"></i>Funções</li>
                <li><i class="fa fa-file-text-o"></i>Criar Funçâo</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h1>Funções</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <th>{{ $role->id }}</th>
                        <td>{{ $role->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- end of col md-8 -->

        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route' => 'admin.roles.store', 'method' => 'POST']) !!}
                    <h2>Nova Função</h2>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                    {{ Form::submit('Criar Nova Função', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
                {!! Form::close() !!}

            </div>
        </div>
    </div>

</section>
</section>

@endsection