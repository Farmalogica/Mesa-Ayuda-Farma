function loginUsuario(){
    
    $.ajax({
        type:"POST",
        data:$('#frmLogin').serialize(),
        url:"procesos/usuarios/login/loginUsuario.php",
        
    success:function(respuesta){
        respuesta = respuesta.trim();

        if (respuesta == 1){
            window.location.href= "vistas/inicio.php"
        } else {
            swal.fire(":(","Error al Ingresar" + respuesta,"Error");
        }
    }

    });
    
    return false; 
    
}

