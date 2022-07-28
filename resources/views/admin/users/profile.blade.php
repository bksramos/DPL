@extends('layouts.master')

@section('content')
<head>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
{{--     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet"> --}}
    <script src="{{asset('js/jquery.js')}}"></script>
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> --}}
</head>

    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Perfil</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_documents_alt"></i>Usuários</li>
              <li><i class="fa fa-user-md"></i>Perfil</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4>{{$user->name}}</h4>
                  <div class="follow-ava">
                    <embed src="{{URL::to('/photos/'.Auth::user()->user_photo)}}" width="150" height="150" ></embed>
                  </div>
                  @foreach($user->roles as $role)
                    @foreach($user->sections as $section)
                      <h6>{{$role->name}} - {{$section->initials}}</h6>
                    @endforeach
                  @endforeach
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">
                  {{-- <p>{{substr($user->about, 0,40)}}</p>
                  <p>@ {{$user->name}}</p>
                  <p><i class="fa fa-linkedin">{{$user->name}}</i></p>
                  <h6>
                      <span><i class="icon_clock_alt"></i>11:05 AM</span>
                      <span><i class="icon_calendar"></i>25.10.13</span>
                      <span><i class="icon_pin_alt"></i>NY</span>
                  </h6> --}}
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#profile">
                        <i class="icon-user"></i>
                        Perfil
                    </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                        <i class="icon-envelope"></i>
                        Editar Perfil
                    </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <!-- profile -->
                  <div id="profile" class="tab-pane active">
                    <section class="panel">
                      <div class="bio-graph-heading">
                        {{$user->about}}
                      </div>
                      <div class="panel-body bio-graph-info">
                        <h1>Biografia</h1>
                        <div class="row">
                          <div class="bio-row">
                            <p><span> Nome Completo </span>: {{$user->name}} </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Nome de Guerra </span>: {{$user->war_name}}</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Nascimento</span>: {{$user->birthday}}</p>
                          </div>
                          <div class="bio-row">
                            @foreach($user->sections as $section)
                              <p><span>Divisão </span>: {{$section->initials}}</p>
                            @endforeach
                          </div>
                          <div class="bio-row">
                            @foreach($user->roles as $role)
                              <p><span>Função </span>: {{$role->name}}</p>
                            @endforeach
                          </div>
                          <div class="bio-row">
                            <p><span>Email </span>:{{$user->email}}</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Celular </span>: {{$user->cell_phone}}</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Ramal </span>: {{$user->phone}}</p>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Editar Perfil</h1>
                        <form action="{{ route('update.profile', ['user'=> $user->id]) }}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                              @csrf
                          {{ method_field('PUT') }}
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nome Completo</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" name="name" value= "{{old('name', $user->name)}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nome de Guerra</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" name="war_name" value="{{old('war_name', $user->war_name)}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Data de Aniversário</label>
                            <div class="col-lg-6">
                              <input class="set-due-date form-control" name="birthday" type="date" value="{{old('birthday', $user->birthday)}}" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Sobre</label>
                            <div class="col-lg-10">
                              <textarea id="about" class="form-control" name="about" cols="30" rows="5">
                                {!! old('about') ?? $user->about !!}
                              </textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Celular</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" name="cell_phone" value="{{old('cell_phone', $user->cell_phone)}}">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Ramal</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" name="phone" value="{{old('phone', $user->phone)}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" name="email" value= "{{old('email', $user->email)}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Upload de Foto</label>
                            <div class="col-lg-6">
                              <div class="custom-file">
                                  <input type="file" name="featured_photo" class="custom-file-input" value= "{{old('featured_photo', $user->user_photo)}}">
                                  <label class="custom-file-label" for="featured_photo">Select file</label>
                              </div>
                            </div>
                          </div>


                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary">Save</button>
                              <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
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
