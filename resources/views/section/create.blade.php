@extends('layouts.master')

@section('content')

<section id="main-content">
<section class="wrapper">
     <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Controle de Seções</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/home">Início</a></li>
                <li><i class="icon_document_alt"></i>Seções</li>
                <li><i class="fa fa-file-text-o"></i>Criar Seção</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h1>Seções</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Sigla</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($sections as $section)
                    <tr>
                        <th>{{ $section->id }}</th>
                        <td>{{ $section->name }}</td>
                        <td>{{ $section->initials }}</td>
                        <td style="text-align:center">
                            <a href="{{ route('section.edit', $section->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('section.destroy', $section->id) }}" method="post" class="btn">
                                @csrf 
                                {{ method_field('DELETE') }} 
                                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- end of col md-8 -->

        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route' => 'section.store', 'method' => 'POST']) !!}
                    <h2>Nova Seção</h2>
                    {{ Form::label('name', 'Nome:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                    {{ Form::label('initials', 'Sigla:') }}
                    {{ Form::text('initials', null, ['class' => 'form-control']) }}
                    {{ Form::submit('Criar Nova Seção', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
                {!! Form::close() !!}

            </div>
        </div>
    </div>

</section>
</section>

@endsection