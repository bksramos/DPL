<div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal">Título Modal</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="message"></div>
        
        <form id="formEvent">
          <div class="form-group row">
            <label for="title" class="col-sm-4 col-form-label">Título</label>
            <div class="col-sm-8">
              <input type="text" name="title" class="form-control" id="title">
              <input type="hidden" name="id" >
            </div>
          </div>
          <div class="form-group row">
            <label for="type" class="col-sm-4 col-form-label">Tipo</label>
            <div class="col-sm-8">
              <select id="type" name="type" class="form-control" aria-label="Default select example">
                @foreach($eventTypes as $eventType)
                  <option value="{{$eventType->name}}" class="form-control" id="type">
                    {{$eventType->name}}
                  </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="start" class="col-sm-4 col-form-label">Data/Hora Início</label>
            <div class="col-sm-8">
              <input type="text" name="start" class="form-control date-time" id="start">
            </div>
          </div>
          <div class="form-group row">
            <label for="end" class="col-sm-4 col-form-label">Data/Hora Final</label>
            <div class="col-sm-8">
              <input type="text" name="end" class="form-control date-time" id="end">
            </div>
          </div>
          <div class="form-group row">
            <label for="color" class="col-sm-4 col-form-label">Cor do Evento</label>
            <div class="col-sm-8">
              <input type="color" name="color" class="form-control" id="color">
            </div>
          </div>
          <div class="form-group row">
            <label for="description" class="col-sm-4 col-form-label">Descrição</label>
            <div class="col-sm-8">
              <textarea name="description" id="description" cols="40" rows="4"></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-danger deleteEvent">Excluir</button>
        <button type="submit" class="btn btn-primary saveEvent">Salvar</button>
      </div>
    </div>
  </div>
</div>