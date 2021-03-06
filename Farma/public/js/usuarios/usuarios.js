$(document).ready(function(){
    $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");

});


function agregarNuevoUsuario(){
    $.ajax({
        type:"POST",
        data:$('#frmAgregarUsuario').serialize(),
        url: "../procesos/usuarios/crud/agregarNuevoUsuario.php",
        success:function(respuesta){
            
            respuesta = respuesta.trim();
            if(respuesta == 1){
                $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php")
                $('#modalAgregarUsuarios').modal('hide');
                Swal.fire(":D","Agregado Con exito!","success");
                $('#frmAgregarUsuario')[0].reset();
            }else{
                Swal.fire(":(","Error en la creación de usuario."+ respuesta,"error");
            }
        }
    });



    return false;
}

function obtenerDatosUsuario(idUsuario){
    $.ajax({
        type:"POST",
        data:"idUsuario="+ idUsuario,
        url: "../procesos/usuarios/crud/obtenerDatosUsuario.php",
        success:function(respuesta){
            
            respuesta = jQuery.parseJSON(respuesta);
            $('#idUsuario').val(respuesta['idUsuario']);
            $('#paternou').val(respuesta['paterno']);
            $('#maternou').val(respuesta['materno']);
            $('#nombreu').val(respuesta['nombrePersona']);
            $('#fechaNacimientou').val(respuesta['fechaNacimiento']);
            $('#sexou').val(respuesta['sexo']);
            $('#telefonou').val(respuesta['telefono']);
            $('#correou').val(respuesta['correo']);
            $('#usuariou').val(respuesta['nombreUsuario']);
            $('#idRolu').val(respuesta['idRol']);
            $('#ubicacionu').val(respuesta['ubicacion']);
        }
    });
}

function actualizarUsuario(){
    $.ajax({
        type:"POST",
        data: $('#frmActualizarUsuario').serialize(),
        url: "../procesos/usuarios/crud/actualizarUsuario.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if(respuesta == 1){
                $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
                $('#modalActualizarUsuarios').modal('hide');
                Swal.fire(":D","Actualizado Con exito!","success");
            }else{
                Swal.fire(":(","Error en la Actualizacion de usuario."+ respuesta,"error");
            }
        }

        });
        return false;
}


