@extends('layouts.master')
@section('content')

    <section id="main-content">
        <section class="wrapper">
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h3 class="page-header"><i class="fa fa-file-text-o"></i> Indicadores </h3>--}}
{{--                    <ol class="breadcrumb">--}}
{{--                        <li><i class="fa fa-home"></i><a href="/Home">Início</a></li>--}}
{{--                        <li><i class="icon_document_alt"></i>Indicadores</li>--}}
{{--                        <li><i class="fa fa-file-text-o"></i>Conhecimentos</li>--}}
{{--                    </ol>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
{{--                        <header class="panel-heading">--}}
{{--                            Indicador Por Conhecimento--}}
{{--                        </header>--}}
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="card">
                                        {{--                        Início do Conteúdo da Página--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
        </section>
        </div>
        </div>
        <!-- page end-->
    </section>
    </section>
@endsection



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
