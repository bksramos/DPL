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
                    <li><i class="fa fa-file-text-o"></i>Adicionar PLAMENS</li>
                </ol>
            </div>

        <div class="row">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading" >
                <center>COMANDO DA AERONÁUTICA</center>
                <center>FICHA DE PROPOSTA DE MISSÃO DE ENSINO</center>
              </header>
              <div class="panel-body">
              <form action="/education/insert" method = "post" name="education">
                  <div class="form-group">
                    <div class="col-lg-12">
                      <div class="radio">
                      <center>
                      <label>
                        <input type="radio" name="plan" id="plan" value="PLAMENS BR" checked>
                         PLAMENS BR
                      </label>
                      <label>
                        <input type="radio" name="plan" id="plan" value="PLAMENS EXT" checked>
                         PLAMENS EXT
                      </label>
                      </div>
                      </center>                        
                    </div>
                  </div>
              </div>
            </section>
          </div>
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                VISTO:
              </header>
              <div class="panel-body">
                <div class="col-lg-12">
                  <hr style="height:1px;border:none;color:#333;background-color:#333;">
                <center>BRIG AR MARCOS DOS SANTOS SILVA</center>
                <center>Chefe do Centro de Inteligência da Aeronáutica</center>
                </div>
              </div>
            </section>
          </div>
        </div>    
          
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                CAMPO I - INFORMAÇÕES INICIAIS
              </header>
              <div class="row">
                  <div class="col-lg-6">
                    <div class="panel-body">
                      
                        <div class="form-group">
                          <label class="col-sm-6 control-label">a) MISSÃO PROPOSTA:</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" maxlength="2" name="mission_number">
                          </div>
                        </div>                                        
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="panel-body">
                      
                        <div class="form-group">
                          <label class="col-sm-6 control-label">b) ANO DO INÍCIO DA MISSÃO:</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="start_year" maxlength="4">
                          </div>
                        </div>                                        
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6">
                    <div class="panel-body">
                      
                        <div class="form-group">
                          <label class="col-sm-6 control-label">c) ÓRGÃO PROPONENTE</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="pronouncing_organ" value="GABAER">
                          </div>
                        </div>                                        
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="panel-body">
                      
                        <div class="form-group">
                          <label class="col-sm-6 control-label">d) OM SOLICITANTE:</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="pronouncing_om" value="CIAER">
                          </div>
                        </div>                                        
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                    <div class="panel-body">
                      
                      <label class="control-label col-lg-2" for="inputSuccess">
                        e) TRILHA DE CAPACITAÇÃO:
                      </label>
                        <div class="col-lg-10">
                          <div class="radio">
                          <label>
                            <input type="radio" name="training_track" id="training_track" value="TC" checked>
                             TENENTE-CORONEL
                          </label>
                          <label>
                            <input type="radio" name="training_track" id="training_track" value="MJ" checked>
                             MAJOR
                          </label>
                          <label>
                            <input type="radio" name="training_track" id="training_track" value="CP" checked>
                             CAPITÃO
                          </label>
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
                CAMPO II - INFORMAÇÕES SOBRE O CURSO/ESTÁGIO
              </header>
              <div class="row">
                <div class="col-lg-12">
                  <div class="panel-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">
                      a) TÍTULO DO CURSO/ESTÁGIO (Código e nome, se FMS)
                      </label>
                      <input type="title" class="form-control" id="title" name="title" placeholder="Nome do Curso">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">
                      b) ESTABELECIMENTO ONDE SE REALIZARÁ O CURSO/ESTÁGIO:
                      </label>
                      <input type="text" class="form-control" id="establishment" name="establishment" placeholder="Estabelecimento">
                    </div>                    
                  </div>                  
                </div>

                  <div class="col-lg-4">
                    <div class="panel-body">
                      <div class="form-group">
                        <label class="col-sm-6 control-label">c) LOCALIDADE: Cidade:</label>
                          <div class="col-sm-6">
                            <input type="text" name="city" class="form-control">
                          </div>
                      </div>                    
                    </div>                  
                  </div>
                  <div class="col-lg-4">
                    <div class="panel-body">
                      <div class="form-group">
                        <label class="col-sm-6 control-label">Estado:</label>
                          <div class="col-sm-3">
                            <input type="text" name="state" class="form-control" maxlength="2">
                          </div>
                      </div>                    
                    </div>                  
                  </div>
                  <div class="col-lg-4">
                    <div class="panel-body">
                      <div class="form-group">
                        <label class="col-sm-6 control-label">País:</label>
                          <div class="col-sm-6">
                            <input type="text" name="country" class="form-control" value="Brasil">
                          </div>
                      </div>                    
                    </div>                  
                  </div>
                  <div class="col-lg-6">
                    <div class="panel-body">
                      <div class="form-horizontal">
                        <div class="form-group">
                        <label class="control-label col-sm-4">
                        d) DATA DE INÍCIO:
                        
                          </label>
                          <div class="col-sm-6">
                            <input id="dateline_start" type="date" name="dateline_start"  size="16" class="form-control">
                          </div>  
                        </div>                                                
                      </div>                    
                    </div>                  
                  </div>
                  <div class="col-lg-6">
                    <div class="panel-body">
                      <div class="form-horizontal">
                        <div class="form-group">
                        <label class="control-label col-sm-4">
                        e) DATA DE TÉRMINO:
                        
                          </label>
                          <div class="col-sm-6">
                            <input id="dateline_finish" type="date" name="dateline_finish" size="16" class="form-control">
                          </div>
                        </div>
                      </div>                    
                    </div>                  
                  </div>
                  <div class="col-lg-6">
                    <div class="panel-body">
                      <div class="form-group">
                        <label class="control-label col-sm-4">
                        f) DURAÇÃO
                        </label>
                        <div class="col-sm-6">
                          <input id="duration" type="text" name="duration" size="16" class="form-control">
                        </div>
                      </div>                    
                    </div>                  
                  </div>
                  <div class="col-lg-6">
                    <div class="panel-body">
                      <div class="form-group">
                        <label class="control-label col-sm-4">
                        g) CARGA HORÁRIA:
                        </label>
                        <div class="col-sm-6">
                          <input id="workload" type="text" name="workload" size="16" class="form-control">
                        </div>
                      </div>                    
                    </div>                  
                  </div>
                  <div class="col-lg-12">
                    <div class="panel-body">
                      <label for="exampleInputEmail1">
                      i) DESCRIÇÃO DOS ASSUNTOS MINISTRADOS NO CURSO/ESTÁGIO:
                      </label>    
                      
                        @csrf
                        <textarea id="mytextarea" name="mytextarea"></textarea>
                      
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="panel-body">
                      <label for="mytextarea1">
                      i) DESCRIÇÃO DOS ASSUNTOS MINISTRADOS NO CURSO/ESTÁGIO:
                      </label>    
                      
                        @csrf
                        <textarea id="mytextarea1" name="mytextarea1"></textarea>
                      
                    </div>
                  </div>
                  <div class="col-lg-12">
                  <div class="panel-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">
                      j) ÁREA DE CONCENTRAÇÃO/LINHA DE PESQUISA (no caso de cursos de pós-graduação "stricto sensu")
                      </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ex: Estatística">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">
                      k) EXISTE CURSO/ESTÁGIO SIMILAR NO BRASIL? (Caso PLAMENS EXT e exceto curso de carreira):
                        <label class="checkbox-inline">
                          <input type="checkbox" id="inlineCheckbox1" value="option1">
                          SIM               
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" id="inlineCheckbox2" value="option2"> 
                          NÃO
                        </label>
                      </label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">
                      l) QUANTIDADE DE MISSÕES SEMELHANTES REALIZADAS NOS ÚLTIMOS 5 ANOS: 
                        (incluir: posto/graduação/nível; nome do(s) designados(s); a OM e função atual)
                      </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ex: Estatística">
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
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                             IMPRESCINDÍVEL
                          </label>
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                             NECESSÁRIO
                          </label>
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                             DESEJÁVEL
                          </label>
                          </div>                        
                        </div>                                
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="panel-body">  
                      
                        @csrf
                        <textarea id="mytextarea2" name="mytextarea2"></textarea>
                      
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
                      <label for="exampleInputEmail1">
                      a) POSTO/GRADUAÇÃO/NÍVEL DOS DESIGNADOS:
                      </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome do Curso">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="panel-body">
                    <div class="form-group">
                      <label for="exampleInputPassword1">
                      b) N° DE VAGAS SOLICITADAS
                      </label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Estabelecimento">
                    </div>                                        
                  </div>                  
                </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                    <div class="panel-body">
                      <label for="mytextarea3">
                      c) PRÉ-REQUISITOS
                      </label>    
                      
                        @csrf
                        <textarea id="mytextarea3" name="mytextarea3"></textarea>
                      
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
                      <label for="exampleInputEmail1">
                      a) DESTINO APÓS MISSÃO:
                      </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome do Curso">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="panel-body">
                    <div class="form-group">
                      <label for="exampleInputPassword1">
                      b) FUNÇÃO APÓS A MISSÃO:
                      </label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Estabelecimento">
                    </div>                                        
                  </div>                  
                </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                    <div class="panel-body">
                      <label for="mytextarea4">
                      c) CAPACITAÇÃO DESEJADA:
                      </label>    
                      
                        @csrf
                        <textarea id="mytextarea4" name="mytextarea4"></textarea>
                      
                    </div>
                  </div>                
              </div>
              <div class="row">
                  <div class="col-lg-12">
                    <div class="panel-body">
                      <label for="mytextarea5">
                      d) PLANO DE APLICAÇÃO DA CAPACITAÇÃO:
                      </label>    
                      
                        @csrf
                        <textarea id="mytextarea5" name="mytextarea5"></textarea>
                     
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
                      <form method="post" id="dynamic_form">
                        <span id="result"></span>
                          <table class="table table-bordered table table-striped" id="user_table">
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
                            <tbody>
                              
                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan="4" align="right">&nbsp;</td>
                                <td>
                                  @csrf
                                  <input type="submit" name="save" id="save"
                                  class="btn btn-primary" value="save">
                                </td>
                              </tr>
                            </tfoot>

                          </table>
                      </form>                      
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
                CAMPO VII - JUSTIFICATIVA DETALHADA DA MISSÃO
              </header>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="panel-body"> 
                          @csrf
                          <textarea id="mytextarea6" name="mytextarea6"></textarea>

                      </div>
                    </div>
                </div>
              
                  <button type="submit" class="btn btn-long btn-block btn-primary">Criar Ficha de Proposta de Missão - FPM</button>

                </form>

            </section>
          </div>
        </div>



        <!-- page end-->
    </section>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/52bkebvyeqttvhy7g1slwre46g4y8pl9ej3oj2g5rcsr4gvy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
            selector:'#mytextarea, #mytextarea1, #mytextarea2, #mytextarea3, #mytextarea4, #mytextarea5, #mytextarea6'
      });
    </script>
    
    <script>
      $(document).ready(function(){

        var count = 1;

        education_finance(count);

        function education_finance(number)
        {
            var html = '<tr>';
            html += '<td><input type="text" name="cost_help[]" class="form-control" /></td>';
            html += '<td><input type="text" name="salary[]" class="form-control" /></td>';
            html += '<td><input type="text" name="housing_assistance[]" class="form-control" /></td>';
            html += '<td><input type="text" name="baggage_transport[]" class="form-control" /></td>';
            html += '<td><input type="text" name="daily[]" class="form-control" /></td>';
            html += '<td><input type="text" name="personal_transport_1[]" class="form-control" /></td>';
            html += '<td><input type="text" name="personal_transport_2[]" class="form-control" /></td>';
            html += '<td><input type="text" name="course_cost[]" class="form-control" /></td>';
            html += '<td><input type="text" name="total_annual[]" class="form-control" /></td>';
            html += '<td><input type="text" name="course_year[]" class="form-control" /></td>';

            if(number > 1)
            {
              html += '<td><button type="button" name="remove" id="remove" class="btn btn-danger">Remove</button></td></tr>';
              $('tbody').append(html);
            }
            else
            {
              html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
              $('tbody').html(html);
            }

            $('#add').click(function(){
                count++;
                education_finance(count);
            });

            $(document).on('click', '#remove', function(){
                count--;
                education_finance(count);
            });

            $('#dynamic_form').on('submit', function(event){
              event.preventDefault();
              $.ajax({
                url:'{{ route("education.insert") }}',
                method: 'post',
                data:$(this).serialize(),
                dataType:'json',
                beforeSend:function(){
                  $('#save').attr('disabled','disabled');
                },
                success:function(data)
                {
                    if(data.error)
                    {
                        var error_html = '';
                        for(var count = 0; count < data.error.length; count++)
                        {
                            error_html += '<p>'+data.error[count]+'</p>';
                        }
                        $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                    }
                    else
                    {
                        education_finance(1);
                        $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                    }
                    $('#save').attr('disabled', false);
                }
              })
            })
        }

      });
    </script>


@endsection