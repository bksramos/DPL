@extends('layouts.master')

@section('content')
<head>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
    <link href="{{asset('css/treestyle.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
</head>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Seções </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/home">Início</a></li>
                    <li><i class="icon_document_alt"></i>Seções</li>
                    <li><i class="fa fa-file-text-o"></i>Efetivo</li>
                </ol>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="tree">
                    <ul>
                        <li> <a href="{{ route('section.headship') }}">
                            @foreach($users as $user)
                                @if($user->hasAnySection('DPL') and $user->hasAnyRole('Chefe'))
                            <img src="{{URL::to('/photos/'.$user->user_photo)}}">
                                @endif
                            @endforeach
                            <span>Chefe DPL</span></a>
                        <ul>

                        <li> <a href="{{ route('section.secretary') }}">
                            @foreach($users as $user)
                                @if($user->hasAnySection('SEC') and $user->hasAnyRole('Chefe'))
                            <img src="{{URL::to('/photos/'.$user->user_photo)}}">
                                @endif
                            @endforeach
                            <span>Chefe da Secretaria</span></a>
                        <ul>
                            <li> <a href="{{ route('section.SDO') }}">
                                @foreach($users as $user)
                                    @if($user->hasAnySection('SDO') and $user->hasAnyRole('Chefe'))
                                <img src="{{URL::to('/photos/'.$user->user_photo)}}">
                                    @endif
                                @endforeach
                                <span>Chefe de Doutrina</span></a>
                            </li>
                            <li> <a href="{{ route('section.SEN') }}">
                                @foreach($users as $user)
                                    @if($user->hasAnySection('SEN') and $user->hasAnyRole('Chefe'))
                                <img src="{{URL::to('/photos/'.$user->user_photo)}}">
                                    @endif
                                @endforeach
                                <span>Chefe de Ensino</span></a>
                            </li>
                            <li> <a href="{{ route('section.SRH') }}">
                                @foreach($users as $user)
                                    @if($user->hasAnySection('SRH') and $user->hasAnyRole('Chefe'))
                                <img src="{{URL::to('/photos/'.$user->user_photo)}}">
                                    @endif
                                @endforeach
                                <span>Chefe de Recursos Humanos</span></a>
                            </li>
                            <li> <a href="{{ route('section.SED') }}">
                                @foreach($users as $user)
                                    @if($user->hasAnySection('SED') and $user->hasAnyRole('Chefe'))
                                <img src="{{URL::to('/photos/'.$user->user_photo)}}">
                                    @endif
                                @endforeach
                                <span>Chefe de Estatística e Gestão de Dados</span></a>
                            </li>
                        </ul>
                        </li>
                    </ul>
                    </li>
                </ul>
            </div>
            </div>
            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            <div class="row">
                <div class="tree">
                    <ul>
                        
                        <li> <a href="{{ route('section.SDO') }}">
                            @foreach($users as $user)
                                @if($user->hasAnySection('SDO') and $user->hasAnyRole('Auxiliar'))
                            <img src="{{URL::to('/photos/'.$user->user_photo)}}">
                                @endif
                            @endforeach
                            <span>Aux. Doutrina</span></a>
                        </li>
                        
                        <li> <a href="{{ route('section.SEN') }}">
                            @foreach($users as $user)
                                @if($user->hasAnySection('SEN') and $user->hasAnyRole('Auxiliar'))
                            <img src="{{URL::to('/photos/'.$user->user_photo)}}">
                                @endif
                            @endforeach
                            <span>Aux. Ensino</span></a>
                        </li>
                        <li> <a href="{{ route('section.SRH') }}">
                            @foreach($users as $user)
                                @if($user->hasAnySection('SRH') and $user->hasAnyRole('Auxiliar'))
                            <img src="{{URL::to('/photos/'.$user->user_photo)}}">
                                @endif
                            @endforeach
                            <span>Aux. Recursos Humanos</span></a>
                        </li>
                        <li> <a href="{{ route('section.SED') }}">
                            @foreach($users as $user)
                                @if($user->hasAnySection('SED') and $user->hasAnyRole('Auxiliar'))
                            <img src="{{URL::to('/photos/'.$user->user_photo)}}">
                                @endif
                            @endforeach
                            <span>Aux. Estatística e Gestão de Dados</span></a>
                        </li>
                        <li> <a href="{{ route('section.secretary') }}">
                            @foreach($users as $user)
                                @if($user->hasAnySection('SEC') and $user->hasAnyRole('Auxiliar'))
                            <img src="{{URL::to('/photos/'.$user->user_photo)}}">
                                @endif
                            @endforeach
                            <span>Aux. Secretaria</span></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>

@stop