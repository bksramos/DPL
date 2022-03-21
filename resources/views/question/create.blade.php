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
              <li><i class="fa fa-file-text-o"></i>Perguntas</li>
          </ol>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">Criar Nova Perguta</div>
              <div class="card-body">
                <form action="/education/questions" method="post">
                  
                  @csrf

                  <div class="form-group">
                    <label for="question">Pergunta</label>
                    <input name="question[question]" type="text" class="form-control"
                           value="{{ old('question.question') }}" 
                           id="question" aria-describedby="questionHelp" placeholder="Escreve a Pergunta">
                    <small id="questionHelp" class="form-text text-muted">Perguntas de Caracterização</small>

                    @error('question.question')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>

                  <div class="form-group">
                    <fieldset>
                      <legend>Opções</legend>
                      <small id="choicesHelp" class="form-text text-muted">Opções para cada pergunta</small>

                      <div>
                        <div class="form-group">
                          <label for="answer1">Opção 1</label>
                          <input name="answers[][answer]" type="text" placeholder="Escreva a opção"
                                 value="{{ old('answers.0.answer') }}"  
                                 class="form-control" id="answer1" aria-describedby="choicesHelp">

                          @error('answers.0.answer')
                          <small class="text-danger">{{ $message }}</small>
                          @enderror
                          
                        </div>
                      </div>

                    </fieldsett>
                  </div>

                  <div class="form-group">
                    <fieldset>
                      <legend>Opções</legend>
                      <small id="choicesHelp" class="form-text text-muted">Opções para cada pergunta</small>

                      <div>
                        <div class="form-group">
                          <label for="answer2">Opção 2</label>
                          <input name="answers[][answer]" type="text" placeholder="Escreva a opção"
                                 value="{{ old('answers.1.answer') }}" 
                                 class="form-control" id="answer2" aria-describedby="choicesHelp">

                          @error('answers.1.answer')
                          <small class="text-danger">{{ $message }}</small>
                          @enderror
                          
                        </div>
                      </div>

                    </fieldsett>
                  </div>

                  <div class="form-group">
                    <fieldset>
                      <legend>Opções</legend>
                      <small id="choicesHelp" class="form-text text-muted">Opções para cada pergunta</small>

                      <div>
                        <div class="form-group">
                          <label for="answer3">Opção 3</label>
                          <input name="answers[][answer]" type="text" placeholder="Escreva a opção"
                                 value="{{ old('answers.2.answer') }}" 
                                 class="form-control" id="answer3" aria-describedby="choicesHelp">

                          @error('answers.2.answer')
                          <small class="text-danger">{{ $message }}</small>
                          @enderror
                          
                        </div>
                      </div>

                    </fieldsett>
                  </div>

                  <div class="form-group">
                    <fieldset>
                      <legend>Opções</legend>
                      <small id="choicesHelp" class="form-text text-muted">Opções para cada pergunta</small>

                      <div>
                        <div class="form-group">
                          <label for="answer4">Opção 4</label>
                          <input name="answers[][answer]" type="text" placeholder="Escreva a opção"
                                 value="{{ old('answers.3.answer') }}" 
                                 class="form-control" id="answer4" aria-describedby="choicesHelp">

                          @error('answers.3.answer')
                          <small class="text-danger">{{ $message }}</small>
                          @enderror
                          
                        </div>
                      </div>

                    </fieldsett>
                  </div>

                  <div class="form-group">
                    <fieldset>
                      <legend>Opções</legend>
                      <small id="choicesHelp" class="form-text text-muted">Opções para cada pergunta</small>

                      <div>
                        <div class="form-group">
                          <label for="answer5">Opção 5</label>
                          <input name="answers[][answer]" type="text" placeholder="Escreva a opção"
                                 value="{{ old('answers.4.answer') }}" 
                                 class="form-control" id="answer5" aria-describedby="choicesHelp">

                          @error('answers.4.answer')
                          <small class="text-danger">{{ $message }}</small>
                          @enderror
                          
                        </div>
                      </div>

                    </fieldsett>
                  </div>



                  <button type="submit" class="btn btn-primary">Criar Pergunta</button>

                </form>
                
              </div>              
            </div>
            
          </div>
          
        </div>
      </div>




    <!-- page end-->
    </div>
  </section>
</section>



@endsection