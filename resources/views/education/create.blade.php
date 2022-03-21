@extends('layouts.master')

@section('content')
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
    <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
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
              <form action="/education/create-form" method = "post" name="education">
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
                            <input type="text" name="state_id" class="form-control" maxlength="2">
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

                  </div>                  
                </div>

              </div>
            </section>
          </div>
        </div>

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



        </div>



        <!-- page end-->
    </section>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.hotkeys.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysiwyg.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysiwyg-custom.js')}}"></script>
    <script src="{{asset('js/moment.js')}}"></script>
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