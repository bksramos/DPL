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
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th style="text-align:center">Nome</th>
                    <th style="text-align:center">Email</th>
                    <th style="text-align:center">Status</th>
                    <th style="text-align:center">Função</th>
                    <th style="text-align:center">Seção</th>
                    <th style="text-align:center">Actions</th>
                </tr>
                </thead>
     
                <tbody>
     
                @foreach($users as $user)
                <tr>
                    <td style="text-align:center">{{ $user->name }}</td>
                    <td style="text-align:center">{{ $user->email }}</td>
                    <td style="text-align:center">
                        @if($user->status == '0')
                            Ativo
                        @elseif($user->status == '1')
                            Inativo
                        @endif
                    </td>
                    <td style="text-align:center">{{ implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                    <td style="text-align:center">{{ implode(', ', $user->sections()->get()->pluck('initials')->toArray())}}</td>
                    <td style="text-align:center">
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" class="btn">
                            @csrf 
                            {{ method_field('DELETE') }} 
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                </tr> 
                @endforeach
                
                </tbody>
            </table>
            {{ $users->links() }}
            {{-- </div> --}}
        </div>
    </div>
</section>
</section>
@endsection
