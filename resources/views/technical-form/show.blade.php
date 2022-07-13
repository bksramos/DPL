@extends('layouts.master')

@section('content')
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> FPM - PLAMTAX </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/dashboard">Início</a></li>
                    <li><i class="icon_document_alt"></i>PLAMTAX</li>
                    <li><i class="fa fa-file-text-o"></i>
                      {{ $technicalForms->mission_number }} - 
                      {{ substr($technicalForms->dateline_start, 0, 4) }}
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                {{ $technicalForms->title }}
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Número da Missão</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">{{ $technicalForms->mission_number }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Título</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $technicalForms->title }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Atividade Bilateral</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $technicalForms->bilateral_activity }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">FPAB n°</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $technicalForms->fpab_number }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Estabelecimento</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $technicalForms->establishment }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Endereço</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $technicalForms->address }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Cidade</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $technicalForms->city }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">País</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $technicalForms->country }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2"> Período de realização</label>
                    <div class="col-sm-10">
                      <div class="input-prepend">
                        <p class="form-control-static">{{ $technicalForms->dateline_start }} até {{ $technicalForms->dateline_finish }}</p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
               3. Duração da Missão
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Evento</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">{{ $technicalForms->event_duration }} dias</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Trânsito</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">Ida: {{ $technicalForms->outward_transit }} dias</p>
                      <p class="form-control-static">Volta: {{ $technicalForms->back_transit }} dias</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Missão (Evento + Trânsito)</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $technicalForms->mission_duration }} dias</p>
                    </div>
                  </div>
                </form>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
               4. Pessoal a Ser Designado (QUANTITATIVO DEFINIDO POR CÍRCUL/NÍVEL).
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">OFICIAIS</label>
                    <div class="col-lg-10">
                        @foreach ($relations as $relation)
                      <p class="form-control-static">{{ $relation->of_amount }} - {{ $relation->of_title }}</p>
                        @endforeach
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">GRADUADOS</label>
                    <div class="col-lg-10">
                        @foreach ($relations as $relation)
                      <p class="form-control-static">{{ $relation->gr_amount }} - {{ $relation->gr_title }}</p>
                        @endforeach
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">CIVIS</label>
                    <div class="col-lg-10">
                        @foreach ($relations as $relation)
                      <p class="form-control-static">{{ $relation->cv_amount }} </p>
                        @endforeach
                    </div>
                  </div>
                </form>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
               5. CUSTO DA PROPOSTA (US$)
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Serviço de Terceiros</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">US$ {{ $technicalForms->third_party_service }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diárias</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">Militar: US$ {{ $technicalForms->mi_daily }}</p>
                      <p class="form-control-static">Civil: US$ {{ $technicalForms->cv_daily }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Passagens e Despesas com Locomoção</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">Militar: US$ {{ $technicalForms->mi_tickets }}</p>
                      <p class="form-control-static">Civil: US$ {{ $technicalForms->cv_tickets }}</p>
                    </div>
                  </div>
                </form>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                6. JUSTIFICATIVAS:
              </header>
              <div class="panel-body">
                <p class="form-control-static"> {!! $technicalForms->justifications !!}</p>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                7. OBSERVAÇÕES:
              </header>
              <div class="panel-body">
                <p class="form-control-static"> {!! $technicalForms->observations !!}</p>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                8. QUESTIONÁRIO DA MATRIX DE PRIORIZAÇÃO:
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">IMPACTO</label>
                    <div class="col-lg-10">
                      @if($technicalForms->impact == 5 )         
                        <p class="form-control-static">A não realização gera grandes perdas para o COMAER</p>         
                      @elseif($technicalForms->impact == 4)
                        <p class="form-control-static">A não realização gera perdas significativas para o COMAER</p>
                      @elseif($technicalForms->impact == 3)
                        <p class="form-control-static">A não realização gera perdas para o COMAER</p>
                      @elseif($technicalForms->impact == 2)
                        <p class="form-control-static">A não realização gera poucas perdas para o COMAER</p>
                      @elseif($technicalForms->impact == 1)
                        <p class="form-control-static">A não realização não gera perdas para o COMAER</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">TIPO DE MISSÃO</label>
                    <div class="col-lg-10">       
                      @if($technicalForms->mission_type == 4)
                        <p class="form-control-static">Composta por mais de um módulo no qual pelo menos um dos eventos já foram acionados.</p>
                      @elseif($technicalForms->mission_type == 3)
                        <p class="form-control-static">Com compromissos contratuais/offset assumidos e o não cumprimento pode acarretar prejuízos ao COMAER</p>
                      @elseif($technicalForms->mission_type == 2)
                        <p class="form-control-static">Relacionadas a reuniões administrativas do Contrato ou a negociações de guturos contratos.</p>
                      @elseif($technicalForms->mission_type == 1)
                        <p class="form-control-static">De caráter comum que não são classificadas como em andamento ou contratuais.</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">COMPROMISSOS INSTITUCIONAIS</label>
                    <div class="col-lg-10">       
                      @if($technicalForms->institutional_commitments == 7)
                        <p class="form-control-static">Representando o Comandante da Aeronáutica.</p>
                      @elseif($technicalForms->institutional_commitments == 6)
                        <p class="form-control-static">Representando o Estado-Maior da Aeronáutica</p>
                      @elseif($technicalForms->institutional_commitments == 5)
                        <p class="form-control-static">Representando o COMAER em eventos internacioansi de cunho operacional.</p>
                      @elseif($technicalForms->institutional_commitments == 4)
                        <p class="form-control-static">Representando o COMAER em enventos internacionais.</p>
                      @elseif($technicalForms->institutional_commitments == 3)
                        <p class="form-control-static">Representando o COMAER, como instrutor, em antividades de ensino.</p>
                      @elseif($technicalForms->institutional_commitments == 2)
                        <p class="form-control-static">De caráter técnico ou operacional realizadas conforme interesse do COMAER.</p>
                      @elseif($technicalForms->institutional_commitments == 1)
                        <p class="form-control-static">Caracterizadas pela visita a uma organização estrangeira de interesse ou pelo intercâmbio de pessoal.</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">SISTEMAS E TREINAMENTO</label>
                    <div class="col-lg-10">       
                      @if($technicalForms->training_systems == 6)
                        <p class="form-control-static">Relacionada aos sistemas espaciais de emprego militar ou dual.</p>
                      @elseif($technicalForms->training_systems == 5)
                        <p class="form-control-static">Relacionada ao desenvolvimento e implantação dos sistemas do F-39 e do KC-390 no COMAER.</p>
                      @elseif($technicalForms->training_systems == 4)
                        <p class="form-control-static">Relacionada ao treinamento (formação e manutenção operacional) em sistema de treinamento de tripulação.</p>
                      @elseif($technicalForms->training_systems == 3)
                        <p class="form-control-static">Relacionada ao treinamento em sistema de treinamento de missão via simulação distribuída.</p>
                      @elseif($technicalForms->training_systems == 2)
                        <p class="form-control-static">relacionada à outros sistemas.</p>
                      @elseif($technicalForms->training_systems == 1)
                        <p class="form-control-static">Não relacionada à sistemas.</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ADERÊNCIA ÀS CAPACIDADES DA FORÇA ÁEREA</label>
                    <div class="col-lg-10">       
                      @if($technicalForms->capacity_adherence == 5)
                        <p class="form-control-static">Relacionado às capacidades da FAB de Projeção de Poder e de Sup. nos Ambientes Espacial.</p>
                      @elseif($technicalForms->capacity_adherence == 4)
                        <p class="form-control-static">Relacionado às capacidades da FAB de Projeção Estratégica de Poder e de Sup. nos Ambientes Aéreo.</p>
                      @elseif($technicalForms->capacity_adherence == 3)
                        <p class="form-control-static">Relacionado às capacidades da FAB de Comando e COntrole e de Superioridade de Informações.</p>
                      @elseif($technicalForms->capacity_adherence == 2)
                        <p class="form-control-static">Relacionado às capacidades da FAB Sustentação Logística e de Proteção da Força.</p>
                      @elseif($technicalForms->capacity_adherence == 1)
                        <p class="form-control-static">Não relacionadas ao incremento das capacidades da Força Aérea.</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">CAPACITAÇÃO DE RH</label>
                    <div class="col-lg-10">       
                      @if($technicalForms->rh_training == 5)
                        <p class="form-control-static">De ensino de Mestrado ou Doutorado Stricto Sensu coforme a Trilha de Capacitação.</p>
                      @elseif($technicalForms->rh_training == 4)
                        <p class="form-control-static">De ensino de Especializações Lato Sensu conforme a Trilha de Capacitação.</p>
                      @elseif($technicalForms->rh_training == 3)
                        <p class="form-control-static">De ensino de Cursos Técnico-Operacionais inenrentes às funções de carreira e de interesse da FAB.</p>
                      @elseif($technicalForms->rh_training == 2)
                        <p class="form-control-static">simpósios, Seminários, Congressos, Workshop e Oficinas.</p>
                      @elseif($technicalForms->rh_training == 1)
                        <p class="form-control-static">Não relacionada à Capacitação de RH.</p>         
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ATIVIDADES BILATERAIS</label>
                    <div class="col-lg-10">       
                      @if($technicalForms->bilateral == 3)
                        <p class="form-control-static">Há relacionamento bilateral entre o COMAER ou MD com a Força Armada estrangeira.</p>
                      @elseif($technicalForms->bilateral == 2)
                        <p class="form-control-static">Não há relacionamento bilateral entre o COMAER ou MD com a Força Armada Estrangeira.</p>
                      @elseif($technicalForms->bilateral == 1)
                        <p class="form-control-static">A atividade é realizada em entidade civil, não vinculada à Força Armada estrangeira.</p>         
                      @endif
                    </div>
                  </div>
                </form>
              </div>
            </section>
          </div>  
        </div>
    </section>
</section>

@endsection
