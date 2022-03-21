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
                <li><i class="fa fa-file-text-o"></i>Editar Seções</li>
            </ol>
        </div>
    </div>

    <div class="row">
    <div class="col-md-12">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
               <form action="{{ route('section.update', ['section'=> $section->id]) }}" method="post">
                        @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="sectionName" value="{{$section->name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Sigla</label>
                        <input type="text" name="sectionInitials" value="{{$section->initials}}" class="form-control">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/section/create" type="submit" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
            <!-- page end-->
</section>
</section>
@endsection
