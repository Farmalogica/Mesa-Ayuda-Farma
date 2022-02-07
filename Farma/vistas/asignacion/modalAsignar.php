<!-- Modal -->
<div class="modal fade" id="modalAsignarEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" >
            <div class="col-sm-6">
                <label >Nombre Persona</label>
                    <select name="idPersona" id="idPersona" class="form-control" required>
                        <option value=""></option>
                    </select>
                
            </div>
            <div class="col-sm-6">
                <label >Tipo de Equipo</label>
                    <select name="idEquipo" id="idEquipo" class="form-control" required>
                        <option value=""></option>
                    </select>
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="marca">Marca</label>
                <input type="text" name ="marca" id="marca" class="form-control" >
            </div>
            <div class="col-sm-4">
                <label for="modelo">Modelo</label>
                <input type="text" name ="modelo" id="modelo" class="form-control" >
            </div>
            <div class="col-sm-4">
                <label for="serial">Serial</label>
                <input type="text" name ="serial" id="serial" class="form-control" >
            </div>
        </div>
        <div class="row">
        <div class="col-sm-12">
            <label for="descrpcion">Descripcion</label>
            <textarea name="descrpcion" id="descrpcion" class="form-control" ></textarea>
        </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="memoria">Memoria</label>
                <input type="text" class="form-control" id="memoria" name="memoria">
            </div>
            <div class="col-sm-4">
                <label for="discoDuro">Disco Duro</label>
                <input type="text" class="form-control" id="discoDuro" name="discoDuro">
            </div>
            <div class="col-sm-4">
                <label for="procesador">Procesador</label>
                <input type="text" class="form-control" id="procesador" name="procesador">
            </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>