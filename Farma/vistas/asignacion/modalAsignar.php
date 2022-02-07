<!-- Modal -->
<form di="frmAsignaEquipo" method="POST" onsubmit="return asignarEquipo()">

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

                <?php
                    $sql = "SELECT 
                    persona.id_persona,
                    CONCAT(persona.paterno, ' ', persona.materno, ' ', persona.nombre) AS nombre
                FROM
                    t_persona as persona
                    INNER JOIN 
                    t_usuarios AS usuario ON persona.id_persona = usuario.id_persona
                    AND usuario.id_rol = 1
                ORDER BY persona.paterno ";

                     $respuesta = mysqli_query($conexion, $sql);
                
                ?>
                    <select name="idPersona" id="idPersona" class="form-control" required>
                        <option value="">Selecionar</option>
                        <?php while($mostrar = mysqli_fetch_array($respuesta) ){ ?>
                                <option value=" <?php echo $mostrar['id_persona']   ?>"><?php echo $mostrar['nombre'];   ?>    </option>

                        <?php }?>
                    </select>
                
            </div>
            <div class="col-sm-6">
                <label >Tipo de Equipo</label>

                <?php  
                    
                    $sql = " SELECT id_equipo, nombre FROM t_cat_equipo ORDER BY nombre ";

                    $respuesta = mysqli_query($conexion, $sql);
                ?>


                    <select name="idEquipo" id="idEquipo" class="form-control" required>
                        <option value=""></option>
                        <?php while($mostrar = mysqli_fetch_array($respuesta)){  ?>
                            <option value=" <?php echo $mostrar['id_equipo']   ?>"><?php echo $mostrar['nombre'];?></option>

                        <?php  } ?>
                        
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
                <label for="seriall">Serial</label>
                <input type="text" name ="seriall" id="seriall" class="form-control" >
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button  class="btn btn-primary">Asignar</button>
      </div>
    </div>
  </div>
</div>

</form>