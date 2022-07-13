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
                CAMPO VII - JUSTIFICATIVA DETALHADA DA MISSÃO
              </header>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="panel-body"> 
                          @csrf
                          <textarea id="detailed_justification" name="detailed_justification"></textarea>

                      </div>
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
            selector:'#detailed_justification'
      });
    </script>
    
@endsection