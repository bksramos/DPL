@extends('layouts.master')

@section('content')

<section id="main-content">
<section class="wrapper">
     <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Controle de Usuários</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/home">Início</a></li>
                <li><i class="icon_document_alt"></i>Usuários</li>
                <li><i class="fa fa-file-text-o"></i>Editar Usuários</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <h4>Editar Usuário: {{$user->name}}</h4>
        <div class="col-md-12">
        <br>
        <div class="card-body">
            <form action="{{ route('admin.users.update', ['user'=> $user->id]) }}" method="post">
                    @csrf
                {{ method_field('PUT') }}
            <div class="col-md-3">
                @foreach($roles as $role)
                <div class="form-check">
                    <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                    {{ $user->hasAnyRole($role->name)?'checked':'' }}>
                        <label>{{ $role->name }}</label>
                </div>
                @endforeach
            </div>
            <div class="col-md-3">
                Status Usuário:
                @if($user->status == '0')
                    Ativo
                @elseif($user->status == '1')
                    Inativo
                @endif
                <div class="form-group">
                    <select name="status" class="form-control">
                        <option value="">--Selecione o Status--</option>
                        <option value="1">Inativo</option>
                        <option value="0">Ativo</option>                        
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                @foreach($sections as $section)
                <div class="form-check">
                    <input type="checkbox" name="sections[]" value="{{ $section->id }}"
                    {{ $user->hasAnySection($section->name)?'checked':'' }}>
                        <label>{{ $section->name }}</label>
                </div>
                @endforeach
            </div>
                <br>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>
            </form>
        </div>
        
        </div>
    </div>
            <!-- page end-->
</section>
</section>
@endsection
