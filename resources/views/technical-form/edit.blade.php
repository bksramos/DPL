@extends('layouts.master')

@section('content')
<head>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
    <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet">
    <link href="{{asset('css/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-colorpicker.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> PLAMTAX </h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
            <li><i class="icon_document_alt"></i>PLAMTAX</li>
            <li><i class="fa fa-file-text-o"></i>Editar PLAMTAX</li>
        </ol>
      </div>
      <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
<form action="{!! route('technical-form.update', $technical_form->id) !!}" method = "post" name="technical-form" id="technical-form">
  {{ method_field('PUT') }}
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading" >
          <center>FICHA-PROPOSTA DE MISSÃO - FPM - PLAMTAX</center>
        </header>
        <div class="panel-body">
      </section>
    </div>
    <div class="col-md-12">
      <section class="panel">
        <header class="panel-heading">
          1. FICHA-PROPOSTA DE MISSÃO
        </header>
        <div class="panel-body">
          <div class="col-md-12">
            <div class="form-group">
              <label class="col-md-1 control-label">FPM N°</label>
                <div class="col-md-1">
                  <input type="text" class="form-control" style="text-transform:uppercase" maxlength="2" name="mission_number" value= "{{old('mission_number', $technical_form->mission_number)}}">
                </div>
              <label class="col-md-1 control-label">FPAB</label>  
                <div class="col-md-1">          
                  <input type="radio" name="bilateral_activity" id="bilateral_activity" value="SIM" {{$technical_form->bilateral_activity == "SIM" ? 'checked' : '' }}>
                   SIM 
                   <br>       
                  <input type="radio" name="bilateral_activity" id="bilateral_activity" value="NÃO" {{$technical_form->bilateral_activity == "NÃO" ? 'checked' : '' }}>
                   NÃO
                </div>
              <label class="col-md-1 control-label">FPAB n°</label>
                <div class="col-md-1">
                  <input type="text" class="form-control" style="text-transform:uppercase" maxlength="13" name="fpab_number">
                </div> 
              <label class="col-md-2 control-label">ÔNUS DA MISSÃO</label>  
                <div class="col-md-4">          
                  <input type="radio" name="mission_burden" id="mission_burden" value="SIM" {{$technical_form->mission_burden == "SIM" ? 'checked' : '' }}>
                   ÔNUS       
                  <input type="radio" name="mission_burden" id="mission_burden" value="LIMITADO" {{$technical_form->mission_burden == "LIMITADO" ? 'checked' : '' }}>
                   ÔNUS LIMITADO
                  <input type="radio" name="mission_burden" id="mission_burden" value="NÃO" {{$technical_form->mission_burden == "NÃO" ? 'checked' : '' }}>
                   SEM ÔNUS
                </div>              
            </div>
          </div>
        </div>
      </section>
    </div>
   </div> 
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            2. DESCRIÇÃO OU TÍTULO DO EVENTO PROPOSTO
          </header>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="title" value= "{{old('title', $technical_form->title)}}">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Estabelecimento</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="establishment" value= "{{old('establishment', $technical_form->establishment)}}">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Endereço</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="address" value= "{{old('address', $technical_form->address)}}">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Cidade</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="city" value= "{{old('city', $technical_form->city)}}">
                      </div>
                      <label class="col-md-2 control-label">País</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="country" value= "{{old('country', $technical_form->country)}}">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-3 control-label">Período de Realização</label>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="input-group date" id="dateline_start">
                              <span class="input-group-addon" id="addon-event">De:</span>
                              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                              <input class="set-due-date form-control" id="dateline_start" name="dateline_start" type="date" value= "{{old('dateline_start', $technical_form->dateline_start)}}" />
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="input-group date" id="dateline_finish">
                              <span class="input-group-addon" id="addon-event">Até:</span>
                              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                              <input class="set-due-date form-control" id="dateline_finish" name="dateline_finish" type="date" value= "{{old('dateline_finish', $technical_form->dateline_finish)}}" />
                            </div>
                          </div>
                        </div>
                    </div>                                        
                </div>
              </div>
          </div>
        </section>          
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            3. DURAÇÃO DA MISSÃO
          </header>
          <div class="row">
            <div class="col-lg-4">
              <div class="panel-body">
                <div class="form-group text-center">
                  <label class="col-md-4 control-label text-center" >EVENTO</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" maxlength="2" name="event_duration" value= "{{old('event_duration', $technical_form->event_duration)}}">
                    </div>
                </div>              
              </div>                  
            </div>
            <div class="col-lg-4">
              <div class="panel-body">
                <div class="form-group text-center">
                  <label class="col-md-5 control-label text-center" >TRÂNSITO IDA</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" maxlength="2" name="outward_transit" value= "{{old('outward_transit', $technical_form->outward_transit)}}">
                    </div>
                  <label class="col-md-5 control-label text-center" >TRÂNSITO VOLTA</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" maxlength="2" name="back_transit" value= "{{old('back_transit', $technical_form->back_transit)}}">
                    </div>
                </div>              
              </div>                  
            </div>
            <div class="col-lg-4">
              <div class="panel-body">
                <div class="form-group text-center">
                  <label class="col-md-5 control-label text-center" >MISSÃO</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" maxlength="2" name="mission_duration" value= "{{old('mission_duration', $technical_form->mission_duration)}}">
                    </div>
                </div>              
              </div>                  
            </div>
          </div>                  
        </section>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            4. PESSOAL A SER DESIGNADO (QUANTITATIVO DEFINIDO POR CÍRCULO / NÍVEL)
          </header>
          <div class="row">
            <div class="col-lg-4">
              <div class="panel-body">
                <div class="table-responsive">
                  <form action="technical-form/create-form" method = "post" name="dynamic_oficial" id="dynamic_oficial">
                    <span id="result_of"></span>
                      <table class="table table-bordered table table-striped" id="table">
                        <h4 style='text-align:center; vertical-align:middle'>OFICIAIS</h4>
                        <thead>
                          
                          <tr>
                            <th style='text-align:center; vertical-align:middle'>
                             Quantidade 
                            </th>
                            <th style='text-align:center; vertical-align:middle'>
                             Posto 
                            </th>
                          </tr>
                        </thead>

                        <tbody id="tbody_oficial">
                          
                        </tbody>
                        <tfoot>

                        </tfoot>
                      </table>
                  {{-- </form>                       --}}
                </div>              
              </div>                  
            </div>
            <div class="col-lg-4">
              <div class="panel-body">
                <div class="table-responsive">
                  <form action="technical-form/create-form" method = "post" name="dynamic_graduate" id="dynamic_graduate">
                    <span id="result_gd"></span>
                      <table class="table table-bordered table table-striped" id="table">
                        <h4 style='text-align:center; vertical-align:middle'>GRADUADOS</h4>
                        <thead>
                          
                          <tr>
                            <th style='text-align:center; vertical-align:middle'>
                             Quantidade 
                            </th>
                            <th style='text-align:center; vertical-align:middle'>
                             Graduação 
                            </th>
                          </tr>
                        </thead>

                        <tbody id="tbody_graduate">
                          
                        </tbody>
                        <tfoot>

                        </tfoot>
                      </table>
                  {{-- </form>   --}}                    
                </div>              
              </div>                  
            </div>
            <div class="col-lg-4">
              <div class="panel-body">
                <div class="table-responsive">
                  <form action="technical-form/create-form" method = "post" name="dynamic_civil" id="dynamic_civil">
                    <span id="result"></span>
                      <table class="table table-bordered table table-striped" id="table">
                        <h4 style='text-align:center; vertical-align:middle'>CIVIS</h4>
                        <thead>
                          
                          <tr>
                            <th style='text-align:center; vertical-align:middle'>
                             Quantidade 
                            </th>
                          </tr>
                        </thead>

                        <tbody id="tbody_civil">
                          
                        </tbody>
                        <tfoot>

                        </tfoot>
                      </table>
                  {{-- </form>                       --}}
                </div>              
              </div>                  
            </div>
          </div>                  
        </section>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            5. CUSTO DA PROPOSTA
          </header>
          <div class="row">
            <div class="col-lg-3">
              <div class="panel-body">
                <h4 style='text-align:center; vertical-align:middle'>Serviço de Terceiros</h4>
                <div class="form-group text-center">
                  <label class="col-md-2 control-label text-center" >US$</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="third_party_service" value= "{{old('third_party_service', $technical_form->third_party_service)}}">
                    </div>
                </div>              
              </div>                  
            </div>
            <div class="col-lg-3">
              <div class="panel-body">
                <h4 style='text-align:center; vertical-align:middle'>Diárias</h4>
                <div class="form-group text-center">
                  <label class="col-md-4 control-label text-center" >Militar</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="mi_daily" value= "{{old('mi_daily', $technical_form->mi_daily)}}">
                    </div>
                  <label class="col-md-4 control-label text-center" >Civil</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="cv_daily" value= "{{old('cv_daily', $technical_form->cv_daily)}}">
                    </div>
                </div>              
              </div>                  
            </div>
            <div class="col-lg-3">
              <div class="panel-body">
                <h4 style='text-align:center; vertical-align:middle'>Passagens E Locomoção</h4>
                <div class="form-group text-center">
                  <label class="col-md-4 control-label text-center" >Militar</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="mi_tickets" value= "{{old('mi_tickets', $technical_form->mi_tickets)}}">
                    </div>
                  <label class="col-md-4 control-label text-center" >Civil</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="cv_tickets" value= "{{old('cv_tickets', $technical_form->cv_tickets)}}">
                    </div>
                </div>              
              </div>                  
            </div>
            <div class="col-lg-3">
              <div class="panel-body">
                <h4 style='text-align:center; vertical-align:middle'>Suprimento de Fundos</h4>
                <div class="form-group text-center">
                  <label class="col-md-5 control-label text-center" >ND 33390.30</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" name="supply_30" value= "{{old('supply_30', $technical_form->supply_30)}}">
                    </div>
                  <label class="col-md-5 control-label text-center" >ND 33390.39</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" name="supply_39" value= "{{old('supply_39', $technical_form->supply_39)}}">
                    </div>
                </div>              
              </div>                  
            </div>
          </div>                  
        </section>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
          <header class="panel-heading">
           6. JUSTIFICATIVAS
          </header>
          <div class="col-lg-12">
            @csrf
            <textarea id="justifications" class="form-control ckeditor" name="justifications" cols="30" rows="5">
              {!! old('justifications') ?? $technical_form->justifications !!}
            </textarea>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
          <header class="panel-heading">
           7. OBSERVAÇÕES
          </header>
          <div class="col-lg-12">
            @csrf
            <textarea id="observations" class="form-control ckeditor" name="observations" cols="30" rows="5">
              {!! old('observations') ?? $technical_form->observations !!}
            </textarea>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
          <header class="panel-heading">
           8. QUESTIONÁRIO DA MATRIZ DE PRIORIZAÇÃO:
          </header>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Impacto</h4>    
              <input type="radio" name="impact" id="impact" value="5" {{$technical_form->impact == '5' ? 'checked' : ''}}>
               A não realização gera grandes perdas para o COMAER 
               <br>       
              <input type="radio" name="impact" id="impact" value="4" {{$technical_form->impact == '4' ? 'checked' : ''}}>
               A não realização gera perdas significativas para o COMAER
               <br>       
              <input type="radio" name="impact" id="impact" value="3" {{$technical_form->impact == '3' ? 'checked' : ''}}>
               A não realização gera perdas para o COMAER
               <br>       
              <input type="radio" name="impact" id="impact" value="2" {{$technical_form->impact == '2' ? 'checked' : ''}}>
               A não realização gera poucas perdas para o COMAER
               <br>       
              <input type="radio" name="impact" id="impact" value="1" {{$technical_form->impact == '1' ? 'checked' : ''}}>
               A não realização não gera perdas para o COMAER
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Tipo de Missão</h4>    
              <input type="radio" name="mission_type" id="mission_type" value="4" {{$technical_form->mission_type == '4' ? 'checked' : ''}}>
               Composta por mais de um módulo no qual pelo menos um dos eventos já foram acionados. 
               <br>       
              <input type="radio" name="mission_type" id="mission_type" value="3" {{$technical_form->mission_type == '3' ? 'checked' : ''}}>
               Com compromissos contratuais/offset assumidos e o não cumprimento pode acarretar prejízos ao COMAER.
               <br>       
              <input type="radio" name="mission_type" id="mission_type" value="2" {{$technical_form->mission_type == '2' ? 'checked' : ''}}>
               Relacionadas a reuniões administrativas do Contrato ou a negociações de futuros contratos.
               <br>       
              <input type="radio" name="mission_type" id="mission_type" value="1" {{$technical_form->mission_type == '1' ? 'checked' : ''}}>
               De caráter comum que não são classificadas como em andamento ou contratuais.
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Compromissos Institucionais</h4>    
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="7" {{$technical_form->institutional_commitments == '7' ? 'checked' : ''}}>
               Representando o Comandante da Aeronáutica 
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="6" {{$technical_form->institutional_commitments == '6' ? 'checked' : ''}}>
               Representando o Estado-Maior da Aeronáutica.
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="5" {{$technical_form->institutional_commitments == '5' ? 'checked' : ''}}>
               Representando o COMAER em eventos internacionais de cunho operacional.
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="4" {{$technical_form->institutional_commitments == '4' ? 'checked' : ''}}>
               Representando o COMAER em eventos internacionais.
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="3" {{$technical_form->institutional_commitments == '3' ? 'checked' : ''}}>
               Representando o COMAER, como instrutor, em atividades de ensino.
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="2" {{$technical_form->institutional_commitments == '2' ? 'checked' : ''}}>
               De caráter técnico ou operacional realizadas conforme interesse do COMAER.
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="1" {{$technical_form->institutional_commitments == '1' ? 'checked' : ''}}>
               Caracterizadas pela visita a uma organização estrangeira de interesse ou pelo intercâmbio de pessoal.
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Sistemas de Treinamento</h4>       
              <input type="radio" name="training_systems" id="training_systems" value="6" {{$technical_form->training_systems == '6' ? 'checked' : ''}}>
               Relacionada aos sistemas espaciais de emprego militar ou dual.
               <br>       
              <input type="radio" name="training_systems" id="training_systems" value="5" {{$technical_form->training_systems == '5' ? 'checked' : ''}}>
               Relacionada ao desenvolvimento e implantação dos sistemas do F-39 e do KC-390 no COMAER.
               <br>       
              <input type="radio" name="training_systems" id="training_systems" value="4" {{$technical_form->training_systems == '4' ? 'checked' : ''}}>
               Relacionada ao treinamento (formação e manutenção operacional) em sistema de treinamento de tripulação.
               <br>       
              <input type="radio" name="training_systems" id="training_systems" value="3" {{$technical_form->training_systems == '3' ? 'checked' : ''}}>
               Relacionada ao treinamento em sistema de treinamento de missão via simulação distribuída.
               <br>       
              <input type="radio" name="training_systems" id="training_systems" value="2" {{$technical_form->training_systems == '2' ? 'checked' : ''}}>
               Relacionada à outros sistemas.
               <br>       
              <input type="radio" name="training_systems" id="training_systems" value="1" {{$technical_form->training_systems == '1' ? 'checked' : ''}}>
               Não relacionada à sistemas.
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Aderência às Capacidades da Força Aérea</h4>     
              <input type="radio" name="capacity_adherence" id="capacity_adherence" value="5" {{$technical_form->capacity_adherence == '5' ? 'checked' : ''}}>
               Relacionado às capacidades da FAB de Projeção Estratégica de Poder e de Sup. nos Ambientes Espacial.
               <br>       
              <input type="radio" name="capacity_adherence" id="capacity_adherence" value="4" {{$technical_form->capacity_adherence == '4' ? 'checked' : ''}}>
               Relacionado às capacidades da FAB de Projeção Estratégica de Poder e de Sup. nos ambientes Aéreo.
               <br>       
              <input type="radio" name="capacity_adherence" id="capacity_adherence" value="3" {{$technical_form->capacity_adherence == '3' ? 'checked' : ''}}>
               Relacionado às capacidades da FAB de Comando e Controle e de Superiodidade de Informações.
               <br>       
              <input type="radio" name="capacity_adherence" id="capacity_adherence" value="2" {{$technical_form->capacity_adherence == '2' ? 'checked' : ''}}>
               Relacionado`às capacidades da FAB Sustentação Logística e de Proteção da Força.
               <br>       
              <input type="radio" name="capacity_adherence" id="capacity_adherence" value="1" {{$technical_form->capacity_adherence == '1' ? 'checked' : ''}}>
               Não relacionadas ao incremento das capacidades da Força Aérea.
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Capacitação de RH</h4>     
              <input type="radio" name="rh_training" id="rh_training" value="5" {{$technical_form->rh_training == '5' ? 'checked' : ''}}>
               De Ensino de Mestrado ou Doutorado Stricto conforme a Trilha de Capacitação
               <br>       
              <input type="radio" name="rh_training" id="rh_training" value="4" {{$technical_form->rh_training == '4' ? 'checked' : ''}}>
               De Ensino de Especializações Lato Sensu conforme a Trilha de Capacitação.
               <br>       
              <input type="radio" name="rh_training" id="rh_training" value="3" {{$technical_form->rh_training == '3' ? 'checked' : ''}}>
               De Ensino de Cursos Técnico-Operacionais inerentes às funções de carreira de interesse da FAB.
               <br>       
              <input type="radio" name="rh_training" id="rh_training" value="2" {{$technical_form->rh_training == '2' ? 'checked' : ''}}>
               Simpósios, Seminários, Congressos, Workshop e Oficinas.
               <br>       
              <input type="radio" name="rh_training" id="rh_training" value="1" {{$technical_form->rh_training == '1' ? 'checked' : ''}}>
               Não relacionadas à Capacitação de RH.
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Atividades Bilaterais</h4>           
              <input type="radio" name="bilateral" id="bilateral" value="3" {{$technical_form->bilateral == '3' ? 'checked' : ''}}>
               Há relacionamento bilateral entre o COMAER ou MD com a Força Armada estrangeira.
               <br>       
              <input type="radio" name="bilateral" id="bilateral" value="2" {{$technical_form->bilateral == '2' ? 'checked' : ''}}>
               Não há relacionamento bilateral entre o COMAER ou MD com a Força Armada estrangeira.
               <br>       
              <input type="radio" name="bilateral" id="bilateral" value="1" {{$technical_form->bilateral == '1' ? 'checked' : ''}}>
               A atividade é realizada em entidade civil, não vinculada à Força Armada estrangeira.
            </div>
        </div>
    </div>


    <tfoot>
      <tr>
        <td colspan="4" align="right">&nbsp;</td>
        <td>
          <br>
          @csrf
          <button type="submit" class="btn btn-primary btn-lg btn-block save" name="save" id="save" value="save">
            Salvar FPM
          </button>
        </td>
      </tr>
    </tfoot>
</form>

        <!-- page end-->
    </section>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.hotkeys.js')}}"></script>
    <script src="{{asset('js/jquery.mask.js')}}"></script>
    <script src="{{asset('js/moment.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
{{--     <script src="https://cdn.tiny.cloud/1/52bkebvyeqttvhy7g1slwre46g4y8pl9ej3oj2g5rcsr4gvy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
            selector:'#justifications, #observations'
      });
    </script> --}}
    <script>
      $(document).ready(function(){
          $('.phone').mask('(999)-999-9999');
          $('.mobile').mask('(999)-999-9999');
      });
    </script>

    
    <script>
      $(document).ready(function(){

        var count = 1;

        oficial_member(count);

        function oficial_member(number)
        {
          var html = '<tr>';
            @foreach($technical_form_members as $technical_form_members)
          html += '<td>  <input type="text" maxlength="2" name="of_amount[]" class="form-control" style="text-transform:uppercase" value="{{ old('of_amount') ?? $technical_form_members->of_amount }}" /></td>';
          html += '<td>  <input type="text" maxlength="2" name="of_title[]" class="form-control" style="text-transform:uppercase" value="{{ old('of_title') ?? $technical_form_members->of_title }}" id = "Totmarks"/></td>';

          if(number > 1)
          {
            html += '<td><button type="button" name="remove_of" id="remove_of" class="btn btn-danger">Remove</button></td></tr>';
            $('#tbody_oficial').append(html);
          }
          else
          {
            html += '<td><button type="button" name="add_of" id="add_of" class="btn btn-success">Add</button></td></tr>';
            $('#tbody_oficial').html(html);
          }

          $('#add_of').click(function(){
              count++;
              oficial_member(count);
          });

          $(document).on('click', '#remove_of', function(){
              count--;
              oficial_member(count);
          });
          
        }

        graduate_member(count);

        function graduate_member(number)
        {
          var html = '<tr>';
            
          html += '<td>  <input type="text" maxlength="2" name="gr_amount[]" class="form-control" style="text-transform:uppercase" value="{{ old('gr_amount') ?? $technical_form_members->gr_amount }}" /></td>';
          html += '<td>  <input type="text" maxlength="2" name="gr_title[]" class="form-control" style="text-transform:uppercase" value="{{ old('gr_title') ?? $technical_form_members->gr_title }}" id = "Totmarks"/></td>';

          if(number > 1)
          {
            html += '<td><button type="button" name="remove_gd" id="remove_gd" class="btn btn-danger">Remove</button></td></tr>';
            $('#tbody_graduate').append(html);
          }
          else
          {
            html += '<td><button type="button" name="add_gd" id="add_gd" class="btn btn-success">Add</button></td></tr>';
            $('#tbody_graduate').html(html);
          }

          $('#add_gd').click(function(){
              count++;
              graduate_member(count);
          });

          $(document).on('click', '#remove_gd', function(){
              count--;
              graduate_member(count);
          });
            
        }

        civil_member(count);

        function civil_member(number)
        {
          var html = '<tr>';
           
          html += '<td>  <input type="text" maxlength="2" name="cv_amount[]" class="form-control" style="text-transform:uppercase" value="{{ old('gr_title') ?? $technical_form_members->gr_title }}" id = "Totmarks"/></td>';

          if(number > 1)
          {
            html += '<td><button type="button" name="remove_cv" id="remove_cv" class="btn btn-danger">Remove</button></td></tr>';
            $('#tbody_civil').append(html);
          }
          else
          {
            html += '<td><button type="button" name="add_cv" id="add_cv" class="btn btn-success">Add</button></td></tr>';
            $('#tbody_civil').html(html);
          }

          $('#add_cv').click(function(){
              count++;
              civil_member(count);
          });

          $(document).on('click', '#remove_cv', function(){
              count--;
              civil_member(count);
          });
          @endforeach
        }

      });
    </script>
   

    <script>
      $(document).ready(function()
      {
          $('tr').each(function()
          {
            var totmarks = 0;
            $(this).find('.subjects').each(function()
            {
              var marks=$(this).text();
              if(marks.length!==0)
              {
                totmarks+=parseFloat(marks);
              }
            });
            $(this).find('#Totmarks').html('= '+totmarks);
          });
      });
    </script>

    <script>
      $(".save-data").click(function(event){
          event.preventDefault();

          let mission_number = $("input[name=mission_number]").val();
          let fpab_number = $("input[name=fpab_number]").val();
          let title = $("input[name=title]").val();
          let establishment = $("input[name=establishment]").val();
          let city = $("input[name=city]").val();
          let country = $("input[name=country]").val();
          let event_duration = $("input[name=event_duration]").val();
          let outward_transit = $("input[name=outward_transit]").val();
          let back_transit = $("input[name=back_transit]").val();
          let mission_duration = $("input[name=mission_duration]").val();
          let of_amount = $("input[name=of_amount]").val();
          let of_title = $("input[name=of_title]").val();
          let gr_amount = $("input[name=gr_amount]").val();
          let gr_title = $("input[name=gr_title]").val();
          let cv_amount = $("input[name=cv_amount]").val();
          let mi_daily = $("input[name=mi_daily]").val();
          let cv_daily = $("input[name=cv_daily]").val();
          let mi_tickets = $("input[name=mi_tickets]").val();
          let cv_tickets = $("input[name=cv_tickets]").val();
          let justifications = $("input[name=justifications]").val();
          let observations = $("input[name=observations]").val();
          let impact = $("input[name=impact]").val();
          let mission_type = $("input[name=mission_type]").val();
          let institutional_commitments = $("input[name=institutional_commitments]").val();
          let training_systems = $("input[name=training_systems]").val();
          let rh_training = $("input[name=rh_training]").val();
          let bilateral = $("input[name=bilateral]").val();
          let _token   = $('meta[name="csrf-token"]').attr('content');

          $.ajax({
            url: '{{ route("technical-form.store") }}',
            type:"POST",
            data:{
              mission_number:mission_number,
              fpab_number:fpab_number,
              title:title,
              establishment:establishment,
              city:city,
              country:country,
              event_duration:event_duration,
              outward_transit:outward_transit,
              back_transit:back_transit,
              mission_duration:mission_duration,
              of_amount:of_amount,
              of_title:of_title,
              gr_amount:gr_amount,
              gr_title:gr_title,
              cv_amount:cv_amount,
              mi_daily:mi_daily,
              cv_daily:cv_daily,
              mi_tickets:mi_tickets,
              cv_tickets:cv_tickets,
              justifications:justifications,
              observations:observations,
              impact:impact,
              mission_type:mission_type,
              institutional_commitments:institutional_commitments,
              training_systems:training_systems,
              rh_training:rh_training,
              bilateral:bilateral,
              _token: _token
            },
            success:function(response){
              console.log(response);
              if(response) {
                $('.success').text(response.success);
                $("#technical-form")[0].reset();
              }
            },
            error: function(error) {
             console.log(error);
              $('#mission_numberError').text(response.responseJSON.errors.mission_number);
              $('#fpab_numberError').text(response.responseJSON.errors.fpab_number);
              $('#titleError').text(response.responseJSON.errors.title);
              $('#establishmentError').text(response.responseJSON.errors.establishment);
              $('#cityError').text(response.responseJSON.errors.city);
              $('#countryError').text(response.responseJSON.errors.country);
              $('#event_durationError').text(response.responseJSON.errors.event_duration);
              $('#of_amountError').text(response.responseJSON.errors.of_amount);
              $('#of_titleError').text(response.responseJSON.errors.of_title);
              $('#gr_amountError').text(response.responseJSON.errors.gr_amount);
              $('#gr_titleError').text(response.responseJSON.errors.gr_title);
              $('#cv_amountError').text(response.responseJSON.errors.cv_amount);
              $('#mi_dailyError').text(response.responseJSON.errors.mi_daily);
              $('#cv_dailyError').text(response.responseJSON.errors.cv_daily);
              $('#mi_ticketsError').text(response.responseJSON.errors.mi_tickets);
              $('#cv_ticketsError').text(response.responseJSON.errors.cv_tickets);
              $('#justificationsError').text(response.responseJSON.errors.justifications);
              $('#observationsError').text(response.responseJSON.errors.observations);
              $('#impactError').text(response.responseJSON.errors.impact);
              $('#mission_typeError').text(response.responseJSON.errors.mission_type);
              $('#institutional_commitmentsError').text(response.responseJSON.errors.institutional_commitments);
              $('#training_systemsError').text(response.responseJSON.errors.training_systems);
              $('#rh_trainingError').text(response.responseJSON.errors.rh_training);
              $('#bilateralError').text(response.responseJSON.errors.bilateral);
            }
           });
      });  

    </script>

  </div>  

@endsection