@extends('layouts.master')

@section('content')
<head>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
    <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet">
    <link href="{{asset('css/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-colorpicker.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> PLAMENS </h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
            <li><i class="icon_document_alt"></i>PLAMENS</li>
            <li><i class="fa fa-file-text-o"></i>Adicionar PLAMENS</li>
        </ol>
      </div>
      <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
<form action="/education-form/create-form" method = "post" name="education-form" id="education-form">
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading" >
          <center>FICHA-PROPOSTA DE MISSÃO - FPM - PLAMENS</center>
          <div class="col-md-12">
            <div class="form-group">
              <div class="col-md-12" align="center">          
                <input type="radio" name="plan" id="plan" value="PLAMENS BR" unchecked>
                 PLAMENS BR                                
                <input type="radio" name="plan" id="plan" value="PLAMENS EXT" unchecked>
                 PLAMENS EXT
              </div>         
            </div>
          </div>
        </header>
        <div class="panel-body">
      </section>
    </div>
    <div class="col-md-12">
      <section class="panel">
        <header class="panel-heading">
          CAMPO I - INFORMAÇÕES INICIAIS
        </header>
        <div class="panel-body">
          <div class="col-md-12">
            <div class="form-group">
              <label class="col-md-2 control-label">N° DA MISSÃO PROPOSTA</label>
                <div class="col-md-4">
                  <input type="text" class="form-control" style="text-transform:uppercase" maxlength="2" name="mission_number">
                </div>
              <label class="col-md-2 control-label">ANO DO INÍCIO DA MISSÃO</label>  
                <div class="col-md-4">
                  <input type="text" class="form-control" style="text-transform:uppercase" maxlength="4" name="start_year">
                </div>          
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="col-md-2 control-label">ÓRGÃO PROPONENTE</label>
                <div class="col-md-4">
                  <input type="text" class="form-control" style="text-transform:uppercase" name="pronouncing_organ" value="GABAER">
                </div>
              <label class="col-md-2 control-label">OM SOLICITANTE</label>  
                <div class="col-md-4">
                  <input type="text" class="form-control" style="text-transform:uppercase" name="pronouncing_om" value="CIAER">
                </div>          
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="col-md-2 control-label">TRILHA DE CAPACITAÇÃO</label>
                <div class="col-md-10" align="center">          
                  <input type="radio" name="training_track" id="training_track" value="CP" unchecked>
                   CAPITÃO                                
                  <input type="radio" name="training_track" id="training_track" value="MJ" unchecked>
                   MAJOR
                  <input type="radio" name="training_track" id="training_track" value="TC" unchecked>
                   TENENTE CORONEL
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
            CAMPO II - INFORMAÇÕES SOBRE O CURSO / ESTÁGIO
          </header>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Título do Curso / Estágio</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="title">
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
                        <input type="text" class="form-control" style="text-transform:uppercase" name="establishment">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-1 control-label">Cidade</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="city">
                      </div>
                      <label class="col-md-1 control-label">Estado</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="state">
                      </div>
                      <label class="col-md-1 control-label">País</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="country">
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
                              <input class="set-due-date form-control" id="dateline_start" name="dateline_start" type="date" value="" />
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="input-group date" id="dateline_finish">
                              <span class="input-group-addon" id="addon-event">Até:</span>
                              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                              <input class="set-due-date form-control" id="dateline_finish" name="dateline_finish" type="date" value="" />
                            </div>
                          </div>
                        </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Duração (em dias)</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="duration">
                      </div>
                      <label class="col-md-3 control-label">Carga Horária Total (em horas)</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" name="workload">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <header class="panel-heading">
            Objetivos do Curso / Estágio
          </header>
            <div class="panel-body">
              <div class="col-lg-12">
                @csrf
                <textarea id="goals" class="form-control ckeditor" name="goals" cols="30" rows="5"></textarea>
              </div>
            </div>
          <header class="panel-heading">
            Descrição dos Assuntos Ministrados no Curso / Estágio
          </header>
            <div class="col-lg-12">
              @csrf
              <textarea id="subject_description" class="form-control ckeditor" name="subject_description" cols="30" rows="5">
                
              </textarea>
            </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-3 control-label">Área de Concentração / Linha de Pesquisa</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="research_line">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="col-md-3 control-label">Existe Curso / Estágio similar no Brasil?</label>
                  <div class="col-md-9" align="left">          
                    <input type="radio" name="similar_course" id="similar_course" value=1 unchecked>
                     SIM                                
                    <input type="radio" name="similar_course" id="similar_course" value=0 unchecked>
                     NÃO
                  </div>
                  <div class="col-md-12">
                    <input type="text" class="institution_similar_course" style="text-transform:uppercase" name="institution_similar_course">
                  </div>         
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="panel-body">
                      <div class="table-responsive">
                        <form action="education-form/create-form" method = "post" name="previous" id="previous">
                          <span id="result_of"></span>
                            <table class="table table-bordered table table-striped" id="table">
                              <h4 style='text-align:left; vertical-align:middle'>Quantidade de Missões semelhantes realizadas nos últimos 5 anos anos</h4>
                              <thead>
                                <tr>
                                  <th width="15%" style='text-align:center; vertical-align:middle'>
                                   Posto / Graduação 
                                  </th>
                                  <th width="40%" style='text-align:center; vertical-align:middle'>
                                   Nome
                                  </th>
                                  <th width="15%"style='text-align:center; vertical-align:middle'>
                                   OM
                                  </th>
                                  <th width="30%" style='text-align:center; vertical-align:middle'>
                                   Função atual
                                  </th>
                                </tr>
                              </thead>

                              <tbody id="tbody_previous">
                                
                              </tbody>
                              <tfoot>

                              </tfoot>
                            </table>
                      </div>              
                    </div>                  
                  </div>
                </div>                  
              </section>
            </div>
          </div>
        </section>          
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            CAMPO III - GRAU DE IMPORTÂNCIA DA MISSÃO PROPOSTA
          </header>
          <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-12" align="center">          
                  <input type="radio" name="importance" id="importance" value="IMPRESCINDÍVEL" unchecked>
                   IMPRESCINDÍVEL                                
                  <input type="radio" name="importance" id="importance" value="NECESSÁRIO" unchecked>
                   NECESSÁRIO
                  <input type="radio" name="importance" id="importance" value="DESEJÁVEL" unchecked>
                   DESEJÁVEL
                </div>         
            </div>
            <div class="col-lg-12">
              @csrf
              <textarea id="justification" class="form-control ckeditor" name="justification" cols="30" rows="5">
                
              </textarea>
            </div>
          </div>                  
        </section>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            CAMPO IV - PERFIL DO(S) INDICADO(S) AO CURSO/ESTÁGIO
          </header>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Posto/Graduação Dos Designados</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="designated">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Número de Vagas Solicitadas</label>
                      <div class="col-md-10">
                        <input type="text" maxlength="2" class="form-control" style="text-transform:uppercase" name="vacancies_requested">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Pré-Requisitos</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="prerequisites">
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
            CAMPO V - DESTINAÇÃO DO(S) INDICADO(S)
          </header>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Destino Após Missão:</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="destination_after_course">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Função Após a Missão</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="function_after_course">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Capacitação Desejada</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="desired_training">
                      </div>
                    </div>                                        
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Plano de Aplicação da Capacitação</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" style="text-transform:uppercase" name="pac">
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
            CAMPO VI - CUSTOS DA MISSÃO
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="panel-body">
                <div class="table-responsive">
                  <form action="/education-form/create-form" method = "post" name="dynamic_finance" id="dynamic_finance">
                    <span id="result"></span>
                      <table class="table table-bordered table table-striped" id="table">
                        <thead>
                          <tr>
                            <th width="10%">Ajuda de Curso</th>
                            <th width="10%">Salário</th>
                            <th width="10%">Auxílio Moradia</th>
                            <th width="10%">Trans Bag</th>
                            <th width="10%">Diária</th>
                            <th width="10%">Trans P1</th> 
                            <th width="10%">Trans P2 </th>
                            <th width="10%">Curso do Curso</th>
                            <th width="10%">Total Anual</th>
                            <th width="10%">Ano</th>
                          </tr>
                          
                        </thead>
                        <tbody id="tbody_finance">
                          
                        </tbody>
                        <tfoot>
                          
                        </tfoot>
                      </table>
                     
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
           CAMPO VII - JUSTIFICATIVA DETALHADA DA PROPOSTA
          </header>
            <div class="col-lg-12">
              @csrf
              <textarea id="detailed_justification" class="form-control ckeditor" name="detailed_justification" cols="30" rows="5">
                
              </textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
          <header class="panel-heading">
           CAMPO VIII - CARACTERIZAÇÃO DA PROPOSTA
          </header>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Impacto</h4>    
              <input type="radio" name="impact" id="impact" value="5" unchecked>
               A não realização gera grandes perdas para o COMAER 
               <br>       
              <input type="radio" name="impact" id="impact" value="4" unchecked>
               A não realização gera perdas significativas para o COMAER
               <br>       
              <input type="radio" name="impact" id="impact" value="3" unchecked>
               A não realização gera perdas para o COMAER
               <br>       
              <input type="radio" name="impact" id="impact" value="2" unchecked>
               A não realização gera poucas perdas para o COMAER
               <br>       
              <input type="radio" name="impact" id="impact" value="1" unchecked>
               A não realização não gera perdas para o COMAER
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Tipo de Missão</h4>    
              <input type="radio" name="mission_type" id="mission_type" value="4" unchecked>
               Composta por mais de um módulo no qual pelo menos um dos eventos já foram acionados. 
               <br>       
              <input type="radio" name="mission_type" id="mission_type" value="3" unchecked>
               Com compromissos contratuais/offset assumidos e o não cumprimento pode acarretar prejízos ao COMAER.
               <br>       
              <input type="radio" name="mission_type" id="mission_type" value="2" unchecked>
               Relacionadas a reuniões administrativas do Contrato ou a negociações de futuros contratos.
               <br>       
              <input type="radio" name="mission_type" id="mission_type" value="1" unchecked>
               De caráter comum que não são classificadas como em andamento ou contratuais.
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Compromissos Institucionais</h4>    
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="7" unchecked>
               Representando o Comandante da Aeronáutica 
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="6" unchecked>
               Representando o Estado-Maior da Aeronáutica.
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="5" unchecked>
               Representando o COMAER em eventos internacionais de cunho operacional.
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="4" unchecked>
               Representando o COMAER em eventos internacionais.
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="3" unchecked>
               Representando o COMAER, como instrutor, em atividades de ensino.
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="2" unchecked>
               De caráter técnico ou operacional realizadas conforme interesse do COMAER.
               <br>       
              <input type="radio" name="institutional_commitments" id="institutional_commitments" value="1" unchecked>
               Caracterizadas pela visita a uma organização estrangeira de interesse ou pelo intercâmbio de pessoal.
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Sistemas de Treinamento</h4>       
              <input type="radio" name="training_systems" id="training_systems" value="6" unchecked>
               Relacionada aos sistemas espaciais de emprego militar ou dual.
               <br>       
              <input type="radio" name="training_systems" id="training_systems" value="5" unchecked>
               Relacionada ao desenvolvimento e implantação dos sistemas do F-39 e do KC-390 no COMAER.
               <br>       
              <input type="radio" name="training_systems" id="training_systems" value="4" unchecked>
               Relacionada ao treinamento (formação e manutenção operacional) em sistema de treinamento de tripulação.
               <br>       
              <input type="radio" name="training_systems" id="training_systems" value="3" unchecked>
               Relacionada ao treinamento em sistema de treinamento de missão via simulação distribuída.
               <br>       
              <input type="radio" name="training_systems" id="training_systems" value="2" unchecked>
               Relacionada à outros sistemas.
               <br>       
              <input type="radio" name="training_systems" id="training_systems" value="1" unchecked>
               Não relacionada à sistemas.
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Aderência às Capacidades da Força Aérea</h4>     
              <input type="radio" name="capacity_adherence" id="capacity_adherence" value="5" unchecked>
               Relacionado às capacidades da FAB de Projeção Estratégica de Poder e de Sup. nos Ambientes Espacial.
               <br>       
              <input type="radio" name="capacity_adherence" id="capacity_adherence" value="4" unchecked>
               Relacionado às capacidades da FAB de Projeção Estratégica de Poder e de Sup. nos ambientes Aéreo.
               <br>       
              <input type="radio" name="capacity_adherence" id="capacity_adherence" value="3" unchecked>
               Relacionado às capacidades da FAB de Comando e Controle e de Superiodidade de Informações.
               <br>       
              <input type="radio" name="capacity_adherence" id="capacity_adherence" value="2" unchecked>
               Relacionado`às capacidades da FAB Sustentação Logística e de Proteção da Força.
               <br>       
              <input type="radio" name="capacity_adherence" id="capacity_adherence" value="1" unchecked>
               Não relacionadas ao incremento das capacidades da Força Aérea.
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Capacitação de RH</h4>     
              <input type="radio" name="rh_training" id="rh_training" value="5" unchecked>
               De Ensino de Mestrado ou Doutorado Stricto conforme a Trilha de Capacitação
               <br>       
              <input type="radio" name="rh_training" id="rh_training" value="4" unchecked>
               De Ensino de Especializações Lato Sensu conforme a Trilha de Capacitação.
               <br>       
              <input type="radio" name="rh_training" id="rh_training" value="3" unchecked>
               De Ensino de Cursos Técnico-Operacionais inerentes às funções de carreira de interesse da FAB.
               <br>       
              <input type="radio" name="rh_training" id="rh_training" value="2" unchecked>
               Simpósios, Seminários, Congressos, Workshop e Oficinas.
               <br>       
              <input type="radio" name="rh_training" id="rh_training" value="1" unchecked>
               Não relacionadas à Capacitação de RH.
            </div>
            <div class="col-md-12">      
            <h4 style='text-align:left; vertical-align:middle'>Atividades Bilaterais</h4>           
              <input type="radio" name="bilateral" id="bilateral" value="3" unchecked>
               Há relacionamento bilateral entre o COMAER ou MD com a Força Armada estrangeira.
               <br>       
              <input type="radio" name="bilateral" id="bilateral" value="2" unchecked>
               Não há relacionamento bilateral entre o COMAER ou MD com a Força Armada estrangeira.
               <br>       
              <input type="radio" name="bilateral" id="bilateral" value="1" unchecked>
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
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.hotkeys.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysiwyg.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysiwyg-custom.js')}}"></script>
    <script src="{{asset('js/moment.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

    <script> //Função para campo opcional se existir curso similar no Brasil //
      $(document).ready(function () {

          $('input[type="radio"]').click(function () {
              if ($(this).attr("value") == 0) {
                  $(".institution_similar_course").hide('slow');
              }
              if ($(this).attr("value") == 1) {
                  $(".institution_similar_course").show('slow');
              }
          });

          $('input[type="radio"]').trigger('click');  // trigger the event
      });
    </script>

    <script> //Função para campo dinâmico de missões anteriores
      $(document).ready(function(){

        var count = 1;

        previous_mission(count);

        function previous_mission(number)
        {
          var html = '<tr>';
          html += '<td>  <input type="text" maxlength="2" name="of_gd[]" class="form-control" style="text-transform:uppercase" /></td>';
          html += '<td>  <input type="text" maxlength="100" name="name[]" class="form-control" style="text-transform:uppercase" /></td>';
          html += '<td>  <input type="text" maxlength="20" name="om[]" class="form-control" style="text-transform:uppercase" /></td>';
          html += '<td>  <input type="text" maxlength="20" name="current_function[]" class="form-control" style="text-transform:uppercase" id = "Totmarks1"/></td>';

          if(number > 1)
          {
            html += '<td><button type="button" name="remove_of" id="remove_of" class="btn btn-danger">Remove</button></td></tr>';
            $('#tbody_previous').append(html);
          }
          else
          {
            html += '<td><button type="button" name="add_of" id="add_of" class="btn btn-success">Add</button></td></tr>';
            $('#tbody_previous').html(html);
          }

          $('#add_of').click(function(){
              count++;
              previous_mission(count);
          });

          $(document).on('click', '#remove_of', function(){
              count--;
              previous_mission(count);
          });
        }
      });
    </script>

    <script> //Função complementar do campo dinâmico de missões anteriores
      $(document).ready(function()
      {
          $('tr').each(function()
          {
            var totmarks1 = 0;
            $(this).find('.subjects').each(function()
            {
              var marks=$(this).text();
              if(marks.length!==0)
              {
                totmarks1+=parseFloat(marks);
              }
            });
            $(this).find('#Totmarks1').html('= '+totmarks1);
          });
      });
    </script>

    <script> //Função para campo dinâmico da parte financeira
      $(document).ready(function(){

        var count = 1;

        education_finance(count);

        function education_finance(number)
        {
          var html = '<tr>';
          html += '<td> <input type="number" step = ".01" name="cost_help[]" class="form-control" value="{{ old('cost_help') }}"/></td>';
          html += '<td> <input type="number" step = ".01" name="salary[]" class="form-control" /></td>';
          html += '<td> <input type="number" step = ".01" name="housing_assistance[]" class="form-control" /></td>';
          html += '<td> <input type="number" step = ".01" name="baggage_transport[]" class="form-control" /></td>';
          html += '<td> <input type="number" step = ".01" name="daily[]" class="form-control" /></td>';
          html += '<td> <input type="number" step = ".01" name="personal_transport_1[]" class="form-control" /></td>';
          html += '<td> <input type="number" step = ".01" name="personal_transport_2[]" class="form-control" /></td>';
          html += '<td> <input type="number" step = ".01" name="course_cost[]" class="form-control" /></td>';
          html += '<td> <input type="number" step = ".01" name="total_annual[]" class="form-control" /></td>';
          html += '<td> <input type="number" step = ".01" name="course_year[]" class="form-control" id = "Totmarks" /></td>';

          if(number > 1)
          {
            html += '<td><button type="button" name="remove_finance" id="remove_finance" class="btn btn-danger">Remove</button></td></tr>';
            $('#tbody_finance').append(html);
          }
          else
          {
            html += '<td><button type="button" name="add_finance" id="add_finance" class="btn btn-success">Add</button></td></tr>';
            $('#tbody_finance').html(html);
          }

          $('#add_finance').click(function(){
              count++;
              education_finance(count);
          });

          $(document).on('click', '#remove_finance', function(){
              count--;
              education_finance(count);
          });
        }
      });
    </script>

    <script> //Função complementar do campo dinâmico da parte financeira
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

    <script> //Função para salvar os dados por requisição Ajax
      $(".save-data").click(function(event){
          event.preventDefault();
          //education_forms
          let plan = $("input[name=plan]").val();
          let mission_number = $("input[name=mission_number]").val();
          let start_year = $("input[name=start_year]").val();
          let pronouncing_organ = $("input[name=pronouncing_organ]").val();
          let pronouncing_om = $("input[name=pronouncing_om]").val();
          let training_track = $("input[name=training_track]").val();
          let title = $("input[name=title]").val();
          let establishment = $("input[name=establishment]").val();
          let city = $("input[name=city]").val();
          let state = $("input[name=state]").val();
          let country = $("input[name=country]").val();
          let dateline_start = $("input[name=dateline_start]").val();
          let dateline_finish = $("input[name=dateline_finish]").val();
          let duration = $("input[name=duration]").val();
          let workload = $("input[name=workload]").val();

          //education_form_details part1
          let goals = $("input[name=goals]").val();
          let subject_description = $("input[name=subject_description]").val();
          let research_line = $("input[name=research_line]").val();
          let similtar_course = $("input[name=similtar_course]").val();
          let institution_similar_course = $("input[name=institution_similar_course]").val();

          //education_form_previous
          let of_gd = $("input[name=of_gd]").val()
          let name = $("input[name=name]").val()
          let om = $("input[name=om]").val()
          let current_function = $("input[name=current_function]").val()

          //education_form_details part2
          let importance = $("input[name=importance]").val();
          let justification = $("input[name=justification]").val();
          let designated = $("input[name=designated]").val();
          let vacancies_requested = $("input[name=vacancies_requested]").val();
          let prerequisites = $("input[name=prerequisites]").val();
          let destination_after_course = $("input[name=destination_after_course]").val();
          let function_after_course = $("input[name=function_after_course]").val();
          let desired_training = $("input[name=desired_training]").val();
          let pac = $("input[name=pac]").val();

          //education_form_finances
          let cost_help = $("input[name=cost_help]").val();
          let salary = $("input[name=salary]").val();
          let housing_assistance = $("input[name=housing_assistance]").val();
          let baggage_transport = $("input[name=baggage_transport]").val();
          let daily = $("input[name=daily]").val();
          let personal_transport_1 = $("input[name=personal_transport_1]").val();
          let personal_transport_2 = $("input[name=personal_transport_2]").val();
          let course_cost = $("input[name=course_cost]").val();
          let total_annual = $("input[name=total_annual]").val();
          let course_year = $("input[name=course_year]").val();

          //education_form_justifications
          let detailed_justification = $("input[name=detailed_justification]").val();

          //education_form_features
          let impact = $("input[name=impact]").val();
          let mission_type = $("input[name=mission_type]").val();
          let institutional_commitments = $("input[name=institutional_commitments]").val();
          let training_systems = $("input[name=training_systems]").val();
          let rh_training = $("input[name=rh_training]").val();
          let bilateral = $("input[name=bilateral]").val();
          let _token   = $('meta[name="csrf-token"]').attr('content');

          $.ajax({
            url: '{{ route("education-form.store") }}',
            type:"POST",
            data:{
              //education_forms
              plan:plan,
              mission_number:mission_number,
              start_year:start_year
              pronouncing_organ:pronouncing_organ,
              pronouncing_om:pronouncing_om,
              training_track:training_track,
              title:title,
              establishment:establishment,
              city:city,
              state:state,
              country:country,
              dateline_start:dateline_start,
              dateline_finish:dateline_finish,
              duration:duration,
              workload:workload,

              //education_form_details part1
              goals:goals,
              subject_description:subject_description,
              research_line:research_line,
              similtar_course:similtar_course,
              institution_similar_course:institution_similar_course,

              //education_form_previous
              of_gd:of_gd,
              name:name,
              om:om,
              current_function:current_function,

              //education_form_details part2
              importance:importance,
              justification:justification,
              designated:designated,
              vacancies_requested:vacancies_requested,
              prerequisites:prerequisites,
              destination_after_course:destination_after_course,
              function_after_course:function_after_course,
              desired_training:desired_training,
              pac:pac,

              //education_form_finances
              cost_help:cost_help,
              salary:salary,
              housing_assistance:housing_assistance,
              baggage_transport:baggage_transport,
              daily:daily,
              personal_transport_1:personal_transport_1,
              personal_transport_2:personal_transport_2,
              course_cost:course_cost,
              total_annual:total_annual,
              course_year:course_year,

              //education_form_justifications
              detailed_justification

              //education_form_features
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
                $("#education")[0].reset();
              }
            },
            error: function(error) {
             console.log(error);
              //education_forms             
              $('#planError').text(response.responseJSON.errors.plan);
              $('#mission_numberError').text(response.responseJSON.errors.mission_number);
              $('#start_yearError').text(response.responseJSON.errors.start_year);
              $('#pronouncing_organError').text(response.responseJSON.errors.pronouncing_organ);
              $('#pronouncing_omError').text(response.responseJSON.errors.pronouncing_om);
              $('#training_trackError').text(response.responseJSON.errors.training_track);
              $('#titleError').text(response.responseJSON.errors.title);
              $('#establishmentError').text(response.responseJSON.errors.establishment);
              $('#cityError').text(response.responseJSON.errors.city);
              $('#stateError').text(response.responseJSON.errors.state);
              $('#countryError').text(response.responseJSON.errors.country);
              $('#dateline_startError').text(response.responseJSON.errors.dateline_start);
              $('#dateline_finishError').text(response.responseJSON.errors.dateline_finish);
              $('#durationError').text(response.responseJSON.errors.duration);
              $('#workloadError').text(response.responseJSON.errors.workload);

              //education_form_details part1
              $('#goalsError').text(response.responseJSON.errors.goals);
              $('#subject_descriptionError').text(response.responseJSON.errors.subject_description);
              $('#research_lineError').text(response.responseJSON.errors.research_line);
              $('#similtar_courseError').text(response.responseJSON.errors.similtar_course);

              //education_form_previous


              //education_form_details part2
              $('#importanceError').text(response.responseJSON.errors.importance);
              $('#justificationError').text(response.responseJSON.errors.justification);
              $('#designatedError').text(response.responseJSON.errors.designated);
              $('#vacancies_requestedError').text(response.responseJSON.errors.vacancies_requested);
              $('#prerequisitesError').text(response.responseJSON.errors.prerequisites);
              $('#destination_after_courseError').text(response.responseJSON.errors.destination_after_course);
              $('#function_after_courseError').text(response.responseJSON.errors.function_after_course);
              $('#desired_trainingError').text(response.responseJSON.errors.desired_training);
              $('#pacError').text(response.responseJSON.errors.pac);

              //education_form_finances
              $('#cost_helpError').text(response.responseJSON.errors.cost_help);
              $('#salaryError').text(response.responseJSON.errors.salary);
              $('#housing_assistanceError').text(response.responseJSON.errors.housing_assistance);
              $('#baggage_transportError').text(response.responseJSON.errors.baggage_transport);
              $('#dailyError').text(response.responseJSON.errors.daily);
              $('#personal_transport_1Error').text(response.responseJSON.errors.personal_transport_1);
              $('#personal_transport_2Error').text(response.responseJSON.errors.personal_transport_2);
              $('#course_costError').text(response.responseJSON.errors.course_cost);
              $('#total_annualError').text(response.responseJSON.errors.total_annual);
              $('#course_yearError').text(response.responseJSON.errors.course_year);

              //education_form_justification
              $('#detailed_justificationError').text(response.responseJSON.errors.detailed_justification);detailed_justification

              //education_form_features
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

@endsection