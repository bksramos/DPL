@extends('layouts.master')

@section('content')
<head>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
</head>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Cursos </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>Cursos</li>
                    <li><i class="fa fa-file-text-o"></i>{{ $education_form->mission_number }} - {{ $education_form->title }} - {{ $education_form->start_year }}</li>

                </ol>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                CAMPO I - INFORMAÇÕES INICIAIS
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">N° da Missão Proposta:</label>
                    <div class="col-sm-3">
                        <p class="form-control-static"> {{ $education_form->mission_number }}</p>
                    </div>
                    <label class="col-sm-2 control-label">Ano do Início da Missão</label>
                    <div class="col-sm-3">
                        <p class="form-control-static">{{ $education_form->start_year }}</p>
                    </div>    
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Órgão Proponente</label>
                    <div class="col-sm-3">
                        <p class="form-control-static"> {{ $education_form->pronouncing_organ }}</p>
                    </div>
                    <label class="col-sm-2 control-label">OM Solicitante</label>
                    <div class="col-sm-3">
                        <p class="form-control-static">{{ $education_form->pronouncing_om }}</p>
                    </div>    
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Trilha de Capacitação</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $education_form->training_track }}</p>
                    </div>
                  </div>
                </form>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
               CAMPO II - INFORMAÇÕES SOBRE O CURSO / ESTÁGIO
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Título do Curso / Estágio</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">{{ $education_form->title }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Estabelecimento onde se realizará o curso / estágio</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $education_form->establishment }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Localidade</label>
                    <div class="col-sm-3">
                      <p class="form-control-static">Cidade: {{ $education_form->city }}</p>
                    </div>
                    <div class="col-sm-3">
                      <p class="form-control-static">Estado: {{ $education_form->state }}</p>
                    </div>
                    <div class="col-sm-3">
                      <p class="form-control-static">País: {{ $education_form->country }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Datas</label>
                    <div class="col-sm-5">
                      <p class="form-control-static">Início: {{ $education_form->dateline_start }}</p>
                    </div>
                    <div class="col-sm-5">
                      <p class="form-control-static">Término: {{ $education_form->dateline_finish }}</p>
                    </div>
                  </div>
                  @foreach ($education_form_details as $education_form_detail)
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Objetivos do Curso / Estágio</label>
                    <div class="col-sm-10">
                      <p class="form-control-static"> {!! $education_form_detail->goals !!}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Descrição dos Assuntos Ministrados no Curso / Estágio</label>
                    <div class="col-sm-10">
                      <p class="form-control-static"> {!! $education_form_detail->subject_description !!}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Área de Concentração / Linha de Pesquisa</label>
                    <div class="col-sm-10">
                      <p class="form-control-static"> {!! $education_form_detail->research_line !!}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Existe Curso/Estágio Similar no Brasil?</label>
                    <div class="col-sm-10">
                        @if($education_form_detail->similar_course==1)
                            <p class="form-control-static">Sim -   
                            {{ $education_form_detail->institution_similar_course }}</p>
                        @endif
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Quantidade de Missões Semelhantes Realizadas nos Últimos 5 anos:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static"> 
                        @foreach($education_form_previouses as $education_form_previous)
                        {{ $education_form_previous->of_gd }}
                        {{ $education_form_previous->name }} - 
                        {{ $education_form_previous->om }} - 
                        {{ $education_form_previous->current_function }}
                        </p>
                        @endforeach
                    </div>
                  </div>
                @endforeach
                </form>
              </div>
            </section>
            <section class="panel">
                @foreach ($education_form_details as $education_form_detail)
              <header class="panel-heading">
               CAMPO III - GRAU DE IMPORTÂNCIA DA MISSÃO PROPOSTA - {{ $education_form_detail->importance }}
              </header>
              <div class="panel-body">
                <p class="form-control-static"> {!! $education_form_detail->justification !!}</p>
              </div>
                @endforeach
            </section>
            <section class="panel">
                @foreach ($education_form_details as $education_form_detail)
              <header class="panel-heading">
               CAMPO IV - PERFIL DO(S) INDICADO(S) AO CURSO/ESTÁGIO
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Posto/Graduação dos Designados:</label>
                    <div class="col-sm-3">
                        <p class="form-control-static"> {{ $education_form_detail->designated }}</p>
                    </div>
                    <label class="col-sm-2 control-label">N° de Vagas:</label>
                    <div class="col-sm-3">
                        <p class="form-control-static">{{ $education_form_detail->vacancies_requested }}</p>
                    </div>    
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pré-Requisitos</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">{{ $education_form_detail->prerequisites }}</p>
                    </div>
                  </div>
                @endforeach
                </form>
              </div>
            </section>
            <section class="panel">
                @foreach ($education_form_details as $education_form_detail)
              <header class="panel-heading">
                CAMPO V - DESTINAÇÃO DO(S) INDICADO(S)
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Destino Após Missão:</label>
                    <div class="col-sm-3">
                        <p class="form-control-static"> {{ $education_form_detail->destination_after_course }}</p>
                    </div>
                    <label class="col-sm-2 control-label">Função Após a Missão:</label>
                    <div class="col-sm-3">
                        <p class="form-control-static">{{ $education_form_detail->function_after_course }}</p>
                    </div>    
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Capacitação Desejada:</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">{{ $education_form_detail->desired_training }}</p>
                    </div>
                    <label class="col-sm-2 control-label">Plano de Aplicação da Capacitação:</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">{{ $education_form_detail->pac }}</p>
                    </div>
                  </div>
                @endforeach
                </form>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                CAMPO VI - CUSTOS DA MISSÃO
              </header>
              @foreach($education_form_finances as $education_form_finance)
              <div>
                <table class="table table-striped">
                  <tr>
                    <td>&nbsp;</td>
                    <td><label>Ano A</label></td>
                    <td><label>Ano A+1</label></td>
                    <td><label>Anos A+2</label></td>
                    <td><label>Ano A+3 </label></td>
                  </tr>
                  <tr>
                    <td><label>Ajuda de Custo</label></td>
                    @if($education_form_finance->course_year==1)
                        <td>{{ $education_form_finance->cost_help }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==2)
                        <td>{{ $education_form_finance->cost_help }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==3)
                        <td>{{ $education_form_finance->cost_help }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==4)
                        <td>{{ $education_form_finance->cost_help }}</td>
                    @else
                        <td> -- </td>
                    @endif
                  </tr>
                  <tr>
                    <td><label>Salário</label></td>
                    @if($education_form_finance->course_year==1)
                        <td>{{ $education_form_finance->salary }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==2)
                        <td>{{ $education_form_finance->salary }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==3)
                        <td>{{ $education_form_finance->salary }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==4)
                        <td>{{ $education_form_finance->salary }}</td>
                    @else
                        <td> -- </td>
                    @endif
                  </tr>
                  <tr>
                    <td><label>Auxílio Moradia</label></td>
                    @if($education_form_finance->course_year==1)
                        <td>{{ $education_form_finance->housing_assitance }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==2)
                        <td>{{ $education_form_finance->housing_assitance }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==3)
                        <td>{{ $education_form_finance->housing_assitance }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==4)
                        <td>{{ $education_form_finance->housing_assitance }}</td>
                    @else
                        <td> -- </td>
                    @endif
                  </tr>
                  <tr>
                    <td><label>Transporte de Bagagem</label></td>
                    @if($education_form_finance->course_year==1)
                        <td>{{ $education_form_finance->baggage_transport }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==2)
                        <td>{{ $education_form_finance->baggage_transport }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==3)
                        <td>{{ $education_form_finance->baggage_transport }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==4)
                        <td>{{ $education_form_finance->baggage_transport }}</td>
                    @else
                        <td> -- </td>
                    @endif
                  </tr>
                  <tr>
                    <td><label>Transp Pessoal (<180 dias)</label></td>
                    @if($education_form_finance->course_year==1)
                        <td>{{ $education_form_finance->personal_transport_1 }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==2)
                        <td>{{ $education_form_finance->personal_transport_1 }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==3)
                        <td>{{ $education_form_finance->personal_transport_1 }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==4)
                        <td>{{ $education_form_finance->personal_transport_1 }}</td>
                    @else
                        <td> -- </td>
                    @endif
                  </tr>
                  <tr>
                    <td><label>Transp Pessoal (>=180 dias)</label></td>
                    @if($education_form_finance->course_year==1)
                        <td>{{ $education_form_finance->personal_transport_2 }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==2)
                        <td>{{ $education_form_finance->personal_transport_2 }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==3)
                        <td>{{ $education_form_finance->personal_transport_2 }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==4)
                        <td>{{ $education_form_finance->personal_transport_2 }}</td>
                    @else
                        <td> -- </td>
                    @endif
                  </tr>
                  <tr>
                    <td><label>Custo do Curso</label></td>
                    @if($education_form_finance->course_year==1)
                        <td>{{ $education_form_finance->course_cost }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==2)
                        <td>{{ $education_form_finance->course_cost }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==3)
                        <td>{{ $education_form_finance->course_cost }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==4)
                        <td>{{ $education_form_finance->course_cost }}</td>
                    @else
                        <td> -- </td>
                    @endif
                  </tr>
                  <tr>
                    <td><label>Total Anual</label></td>
                    @if($education_form_finance->course_year==1)
                        <td>{{ $education_form_finance->total_annual }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==2)
                        <td>{{ $education_form_finance->total_annual }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==3)
                        <td>{{ $education_form_finance->total_annual }}</td>
                    @else
                        <td> -- </td>
                    @endif
                    @if($education_form_finance->course_year==4)
                        <td>{{ $education_form_finance->total_annual }}</td>
                    @else
                        <td> -- </td>
                    @endif
                  </tr>
                </table>
            </div>   
              @endforeach
            </section>
            <section class="panel">
                @foreach ($education_form_justifications as $education_form_justification)
              <header class="panel-heading">
               CAMPO VII - JUSTIFICATIVA DETALHADA DA PROPOSTA 
              </header>
              <div class="panel-body">
                <p class="form-control-static"> {!! $education_form_justification->detailed_justification !!}</p>
              </div>
                @endforeach
            </section>
            <section class="panel">
              <header class="panel-heading">
                CAMPO VIII - CARACTERIZAÇÃO DA PROPOSTA
              </header>
              @foreach($education_form_features as $education_form_feature)
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">IMPACTO</label>
                    <div class="col-lg-10">
                      @if($education_form_feature->impact == 5 )         
                        <p class="form-control-static">A não realização gera grandes perdas para o COMAER</p>         
                      @elseif($education_form_feature->impact == 4)
                        <p class="form-control-static">A não realização gera perdas significativas para o COMAER</p>
                      @elseif($education_form_feature->impact == 3)
                        <p class="form-control-static">A não realização gera perdas para o COMAER</p>
                      @elseif($education_form_feature->impact == 2)
                        <p class="form-control-static">A não realização gera poucas perdas para o COMAER</p>
                      @elseif($education_form_feature->impact == 1)
                        <p class="form-control-static">A não realização não gera perdas para o COMAER</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">TIPO DE MISSÃO</label>
                    <div class="col-lg-10">       
                      @if($education_form_feature->mission_type == 4)
                        <p class="form-control-static">Composta por mais de um módulo no qual pelo menos um dos eventos já foram acionados.</p>
                      @elseif($education_form_feature->mission_type == 3)
                        <p class="form-control-static">Com compromissos contratuais/offset assumidos e o não cumprimento pode acarretar prejuízos ao COMAER</p>
                      @elseif($education_form_feature->mission_type == 2)
                        <p class="form-control-static">Relacionadas a reuniões administrativas do Contrato ou a negociações de guturos contratos.</p>
                      @elseif($education_form_feature->mission_type == 1)
                        <p class="form-control-static">De caráter comum que não são classificadas como em andamento ou contratuais.</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">COMPROMISSOS INSTITUCIONAIS</label>
                    <div class="col-lg-10">       
                      @if($education_form_feature->institutional_commitments == 7)
                        <p class="form-control-static">Representando o Comandante da Aeronáutica.</p>
                      @elseif($education_form_feature->institutional_commitments == 6)
                        <p class="form-control-static">Representando o Estado-Maior da Aeronáutica</p>
                      @elseif($education_form_feature->institutional_commitments == 5)
                        <p class="form-control-static">Representando o COMAER em eventos internacioansi de cunho operacional.</p>
                      @elseif($education_form_feature->institutional_commitments == 4)
                        <p class="form-control-static">Representando o COMAER em enventos internacionais.</p>
                      @elseif($education_form_feature->institutional_commitments == 3)
                        <p class="form-control-static">Representando o COMAER, como instrutor, em antividades de ensino.</p>
                      @elseif($education_form_feature->institutional_commitments == 2)
                        <p class="form-control-static">De caráter técnico ou operacional realizadas conforme interesse do COMAER.</p>
                      @elseif($education_form_feature->institutional_commitments == 1)
                        <p class="form-control-static">Caracterizadas pela visita a uma organização estrangeira de interesse ou pelo intercâmbio de pessoal.</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">SISTEMAS E TREINAMENTO</label>
                    <div class="col-lg-10">       
                      @if($education_form_feature->training_systems == 6)
                        <p class="form-control-static">Relacionada aos sistemas espaciais de emprego militar ou dual.</p>
                      @elseif($education_form_feature->training_systems == 5)
                        <p class="form-control-static">Relacionada ao desenvolvimento e implantação dos sistemas do F-39 e do KC-390 no COMAER.</p>
                      @elseif($education_form_feature->training_systems == 4)
                        <p class="form-control-static">Relacionada ao treinamento (formação e manutenção operacional) em sistema de treinamento de tripulação.</p>
                      @elseif($education_form_feature->training_systems == 3)
                        <p class="form-control-static">Relacionada ao treinamento em sistema de treinamento de missão via simulação distribuída.</p>
                      @elseif($education_form_feature->training_systems == 2)
                        <p class="form-control-static">relacionada à outros sistemas.</p>
                      @elseif($education_form_feature->training_systems == 1)
                        <p class="form-control-static">Não relacionada à sistemas.</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ADERÊNCIA ÀS CAPACIDADES DA FORÇA ÁEREA</label>
                    <div class="col-lg-10">       
                      @if($education_form_feature->capacity_adherence == 5)
                        <p class="form-control-static">Relacionado às capacidades da FAB de Projeção de Poder e de Sup. nos Ambientes Espacial.</p>
                      @elseif($education_form_feature->capacity_adherence == 4)
                        <p class="form-control-static">Relacionado às capacidades da FAB de Projeção Estratégica de Poder e de Sup. nos Ambientes Aéreo.</p>
                      @elseif($education_form_feature->capacity_adherence == 3)
                        <p class="form-control-static">Relacionado às capacidades da FAB de Comando e COntrole e de Superioridade de Informações.</p>
                      @elseif($education_form_feature->capacity_adherence == 2)
                        <p class="form-control-static">Relacionado às capacidades da FAB Sustentação Logística e de Proteção da Força.</p>
                      @elseif($education_form_feature->capacity_adherence == 1)
                        <p class="form-control-static">Não relacionadas ao incremento das capacidades da Força Aérea.</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">CAPACITAÇÃO DE RH</label>
                    <div class="col-lg-10">       
                      @if($education_form_feature->rh_training == 5)
                        <p class="form-control-static">De ensino de Mestrado ou Doutorado Stricto Sensu coforme a Trilha de Capacitação.</p>
                      @elseif($education_form_feature->rh_training == 4)
                        <p class="form-control-static">De ensino de Especializações Lato Sensu conforme a Trilha de Capacitação.</p>
                      @elseif($education_form_feature->rh_training == 3)
                        <p class="form-control-static">De ensino de Cursos Técnico-Operacionais inenrentes às funções de carreira e de interesse da FAB.</p>
                      @elseif($education_form_feature->rh_training == 2)
                        <p class="form-control-static">simpósios, Seminários, Congressos, Workshop e Oficinas.</p>
                      @elseif($education_form_feature->rh_training == 1)
                        <p class="form-control-static">Não relacionada à Capacitação de RH.</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ATIVIDADES BILATERAIS</label>
                    <div class="col-lg-10">       
                      @if($education_form_feature->bilateral == 3)
                        <p class="form-control-static">Há relacionamento bilateral entre o COMAER ou MD com a Força Armada estrangeira.</p>
                      @elseif($education_form_feature->bilateral == 2)
                        <p class="form-control-static">Não há relacionamento bilateral entre o COMAER ou MD com a Força Armada Estrangeira.</p>
                      @elseif($education_form_feature->bilateral == 1)
                        <p class="form-control-static">A atividade é realizada em entidade civil, não vinculada à Força Armada estrangeira.</p>         
                      @endif
                    </div>
                  </div>
                </form>
              </div>
            </section>
          </div>  
        </div>
        @endforeach
        <div class="col-sm-6">
            {!! Form::open(['route' => ['education-form.edit', $education_form->id], 'method' => 'GET']) !!}

            {!! Form::submit('Editar', ['class' => 'btn btn-success btn-block']) !!}

            {!! Form::close() !!}
        </div>
        <div class="col-sm-6">
            {!! Form::open(['route' => ['education-form.destroy', $education_form->id], 'method' => 'DELETE']) !!}

            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-block']) !!}

            {!! Form::close() !!}
        </div>
    </section>
</section>

@endsection
