@extends('layouts.master')
@extends('partials._messages')
@section('content')

<section id="main-content">
    <div class="row">
        <div class="col-md-2">
            <section class="wrapper">
                <img src="/img/ciaer.jpg" alt="Logo">
            </section>
        </div>
        <div class="col-md-8">
            <section class="wrapper">
            <h1 align="center"> Seção de Gestão de Pessoas - SGP </h1>
            <br>
            <div class="panel-body">
                A Seção de Gestão de Pessoas (SGP) é responsável por:<br>
            - analisar e descrever os cargos e funções que compõem o SINTAER, estabelecendo o perfil profissiográfico para a Atividade de Inteligência, a fim de orientar os demais processos de Gestão de Pessoas, como Recrutamento, Seleção, Treinamento e Desenvolvimento;<br>
            - efetuar as indicações dos militares do CIAER para os cursos não abarcados pelo PLAMENS, disponibilizados no âmbito do COMAER e pelos demais órgãos governamentais;<br>
            - planejar, coordenar e executar o processo de seleção dos candidatos aos cursos do CIAER, incluindo a análise da ficha de indicação dos alunos, a conferência de pré-requisitos necessários e a pesquisa de antecedentes;<br>
            - encaminhar a relação dos alunos para a publicação no BCA do ato de matrícula e de conclusão dos cursos realizados no CIAER;<br>
            - planejar, coordenar e executar os processos de avaliação psicológica como parte dos processos seletivos aos cursos do CIAER, contemplando a aplicação de testes psicométricos ou técnicas projetivas, entrevistas e técnicas de simulação que avaliarão as características levantadas no perfil profissiográfico para o qual a capacitação se destina;<br>
            - manter atualizado o banco de dados, referente à capacitação dos Recursos Humanos do SINTAER;
            - coordenar os briefings de Inteligência para preparação de militares designados para cumprirem missão no exterior;<br>
            - agendar, quando for o caso, o debriefing referente aos militares que retornaram de missão no exterior; e
            - planejar, coordenar e executar a atividade de preparação dos familiares de militares que cumprirão missão como Adidos e Auxiliares de Adidos no exterior, atuando como mediador em técnicas de dinâmica de grupo, na qual serão trabalhados os aspectos psicológicos, referentes ao processo de preparação para a mudança, adaptação ao novo país e reintegração ao país de origem (após o término da missão).<br>
            </div>
            </section>
        </div>
        <div class="col-md-2">
            <section class="wrapper">
                <img src="/img/ciaer.jpg" alt="Logo">
            </section>
        </div>        
    </div>
        <div class="row">
        <div class="col-md-4" align="center">
            <h3 align="center">Perfis Profissiográficos</h3>
            <a href="{{ route('psycho.profile') }}">
                <img src="/img/sections/SGP/PSICO.png" alt="PSICO" width="400" height="300">
            </a>
        </div>
        <div class="col-md-4" align="center">
            <h3 align="center">SGC</h3>
            <a href="{{ route('psycho.sgc') }}">
                <img src="/img/sections/SGP/SGC.png" alt="SGC" width="400" height="300">
            </a>
        </div>
        <div class="col-md-4" align="center">
            <h3 align="center">Avaliações Psicológicas</h3>
            <a href="{{ route('psycho.evaluation') }}">
                <img src="/img/sections/SGP/AVL.png" alt="AVL" width="400" height="300">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" align="center">
            <h3 align="center">Briefings</h3>
            <a href="{{ route('briefing') }}">
                <img src="/img/sections/SGP/BRIEFING.jpg" alt="BRIEFING" width="400" height="300">
            </a>            
        </div>
        <div class="col-md-6" align="center">
            <h3 align="center">ADIDOS</h3>
            <a href="{{ route('psycho.adidos') }}">
                <img src="/img/sections/SGP/ADIDOS.png" alt="ADIDOS" width="400" height="300">
            </a>            
        </div>
    </div>


</section>
        <!-- page end-->
@endsection
