function asignarEquipo(){
    $.ajax({
        type:"POST",
        data:$('#frmAsignaEquipo').serialize(),
        url: "../procesos/asignacion/asignar.php",
        success:function(respuesta){
            respuesta=respuesta.trim();
            if(respuesta == 1){
                swal.fire(":D","Asignado con  Exito","success");
            }else {
                swal.fire(":(","Fallo al Asignar" + respuesta,"error");
            }
        }
    });

    return false;



}