@extends('layouts.master')

@section('content')
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
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
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                CAMPO VI - CUSTOS DA MISSÃO
              </header>
              <div class="row">
                <div class="col-lg-12">
                  <div class="panel-body">
                    <div class="table-responsive">
                      <form action="/education/store-finances" method = "post" name="dynamic_form" id="dynamic_form">
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
                            <tbody>
                              
                            </tbody>
                            <tfoot>
                              <tr>
                                <td align="right">&nbsp;</td>
                                <td>
                                  <label>Total</label>
                                  <span id="val"></span>
                                </td>
                              </tr>
                            </tfoot>
                          </table>
                          <div>
                            @csrf
                            <input type="submit" name="save" id="save" class="btn btn-primary" value="save">
                          </div>
                      </form>                      
                    </div>                    
                  </div>                  
                </div>                
              </div>
            </section>
          </div>
        </div>



        <!-- page end-->
    </section>
    
    <script>
      $(document).ready(function(){

        var count = 1;

        education_finance(count);

        function education_finance(number)
        {
          var html = '<tr>';
          html += '<td class = "subjects"><input type="number" step = ".01" name="cost_help[]" class="form-control" /></td>';
          html += '<td class = "subjects"><input type="number" step = ".01" name="salary[]" class="form-control" /></td>';
          html += '<td class = "subjects"><input type="number" step = ".01" name="housing_assistance[]" class="form-control" /></td>';
          html += '<td class = "subjects"><input type="number" step = ".01" name="baggage_transport[]" class="form-control" /></td>';
          html += '<td class = "subjects"><input type="number" step = ".01" name="daily[]" class="form-control" /></td>';
          html += '<td class = "subjects"><input type="number" step = ".01" name="personal_transport_1[]" class="form-control" /></td>';
          html += '<td class = "subjects"><input type="number" step = ".01" name="personal_transport_2[]" class="form-control" /></td>';
          html += '<td class = "subjects"><input type="number" step = ".01" name="course_cost[]" class="form-control" /></td>';
          html += '<td><input type="number" step = ".01" name="total_annual[]" class="form-control" id = "Totmarks" " /></td>';
          html += '<td><input type="number" step = ".01" name="course_year[]" class="form-control" /></td>';

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
            //event.preventDefault();
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


@endsection