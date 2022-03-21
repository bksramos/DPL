@extends('layouts.master')

@section('content')
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
    <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet">
    <link href="{{asset('css/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-colorpicker.css')}}" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> PLAMENS </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>PLAMENS</li>
                    <li><i class="fa fa-file-text-o"></i>{{ $educationForms->title}}</li>
                </ol>
            </div>


    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            CAMPO II - INFORMAÇÕES SOBRE O CURSO/ESTÁGIO
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="panel-body">
              <form action="/education/store-details" method = "post" name="details">
                <label for="goals">
                h) OBJETIVOS DO CURSO/ESTÁGIO:
                </label>                        
                  @csrf
                  <textarea id="goals" name="goals"></textarea>                   
              </div>
            </div>
            <div class="col-lg-12">
              <div class="panel-body">
                <label for="subject_description">
                i) DESCRIÇÃO DOS ASSUNTOS MINISTRADOS NO CURSO/ESTÁGIO:
                </label>                        
                  @csrf
                  <textarea id="subject_description" name="subject_description"></textarea>                   
              </div>
            </div>
            <div class="col-lg-12">
              <div class="panel-body">
                <div class="form-group">
                  <label for="research_line">
                  j) ÁREA DE CONCENTRAÇÃO/LINHA DE PESQUISA (no caso de cursos de pós-graduação "stricto sensu")
                  </label>
                  <input type="text" class="form-control" id="research_line" name="research_line" placeholder="">
                </div>
                <div class="form-group">
                  <div class="radio">
                  k) EXISTE CURSO/ESTÁGIO SIMILAR NO BRASIL? (Caso PLAMENS EXT e exceto curso de carreira):
                    <label>
                      <input type="radio" name="similar_course" id="similar_course" value="1" checked>
                       SIM
                    </label>
                    <label>
                      <input type="radio" name="similar_course" id="similar_course" value="0" checked>
                       NÃO
                    </label>
                    <div class="form-group">
                      <label for="similar_course_name">
                      </label>
                      <input type="text" class="form-control" id="similar_course_name" name="similar_course_name" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="similar_course_last_5_years">
                  l) QUANTIDADE DE MISSÕES SEMELHANTES REALIZADAS NOS ÚLTIMOS 5 ANOS: 
                    (incluir: posto/graduação/nível; nome do(s) designados(s); a OM e função atual)
                  </label>
                  <input type="text" class="form-control" name="similar_course_last_5_years" id="similar_course_last_5_years" placeholder="">
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
            CAMPO III - GRAU DE IMPORTÂNCIA DA MISSÃO PROPOSTA
          </header>
          <div class="row">
              <div class="col-lg-12">
                <div class="panel-body">                 
                    <div class="col-lg-10">
                      <div class="radio">
                      <label>
                        <input type="radio" name="importance" id="importance" value="IMPRESCINDÍVEL" checked>
                         IMPRESCINDÍVEL
                      </label>
                      <label>
                        <input type="radio" name="importance" id="importance" value="NECESSÁRIO" checked>
                         NECESSÁRIO
                      </label>
                      <label>
                        <input type="radio" name="importance" id="importance" value="DESEJÁVEL" checked>
                         DESEJÁVEL
                      </label>
                      </div>                        
                    </div>                                
                </div>
              </div>
            <div class="col-lg-12">
              <div class="panel-body">
                <label for="justification">
                </label>                        
                  @csrf
                  <textarea id="justification" name="justification"></textarea>                   
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
            CAMPO IV - PERFIL DO(S) INDICADO(S) AO CURSO/ESTÁGIO
          </header>
          <div class="row">
            <div class="col-lg-6">
              <div class="panel-body">
                <div class="form-group">
                  <label for="designated_id">
                  a) POSTO/GRADUAÇÃO/NÍVEL DOS DESIGNADOS:
                  </label>
                  <input type="text" class="form-control" id="designated_id" name="designated_id">
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="panel-body">
                <div class="form-group">
                  <label for="vacancies_requested">
                  b) N° DE VAGAS SOLICITADAS
                  </label>
                  <input type="text" class="form-control" maxlength="2" id="vacancies_requested" name="vacancies_requested">
                </div>                                        
              </div>                  
            </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                <div class="panel-body">
                  <label for="prerequisites">
                  c) PRÉ-REQUISITOS
                  </label>                         
                    @csrf
                    <textarea id="prerequisites" name="prerequisites"></textarea>                      
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
            <div class="col-lg-6">
              <div class="panel-body">
                <div class="form-group">
                  <label for="destination_after_course">
                  a) DESTINO APÓS MISSÃO:
                  </label>
                  <input type="text" class="form-control" id="destination_after_course" name="destination_after_course">
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="panel-body">
                <div class="form-group">
                  <label for="function_after_course">
                  b) FUNÇÃO APÓS A MISSÃO:
                  </label>
                  <input type="text" class="form-control" id="function_after_course" name="function_after_course">
                </div>                                        
              </div>                  
            </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                <div class="panel-body">
                  <label for="desired_training">
                  c) CAPACITAÇÃO DESEJADA:
                  </label>                          
                    @csrf
                    <textarea id="desired_training" name="desired_training"></textarea>                      
                </div>
              </div>                
          </div>
          <div class="row">
              <div class="col-lg-12">
                <div class="panel-body">
                  <label for="pac">
                  d) PLANO DE APLICAÇÃO DA CAPACITAÇÃO:
                  </label>                         
                    @csrf
                    <textarea id="pac" name="pac"></textarea>                     
                </div>
              </div>                
          </div>
        </section>
      </div>
      <tfoot>
        <tr>
          <td colspan="4" align="right">&nbsp;</td>
          <td>
            @csrf
            <input type="submit" name="save"
            class="btn btn-primary" value="save">
          </td>

        </tr>
      </tfoot>
    </div>




        <!-- page end-->
    </section>

    <script src="https://cdn.tiny.cloud/1/52bkebvyeqttvhy7g1slwre46g4y8pl9ej3oj2g5rcsr4gvy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
            selector:'#goals, #subject_description, #justification, #prerequisites, #desired_training, #pac'
      });
    </script>


@endsection