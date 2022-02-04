<?php
    include "../../clases/conexion.php";
    $con = new Conexion();
    $conexion = $con->conectar();
    $sql = "SELECT
    usuarios.id_usuario AS idUsuario,
    usuarios.usuario AS nombreUsuario,
    roles.nombre AS rol,
    usuarios.id_rol AS idRol,
    usuarios.ubicacion AS ubicacion,
    usuarios.activo AS estatus,
    usuarios.id_persona AS idPersonas,
    persona.nombre AS nombrePersona,
    persona.paterno AS paterno,
    persona.materno AS materno,
    persona.fecha_nacimiento AS fechaNacimiento,
    persona.sexo AS sexo,
    persona.correo AS correo,
    persona.telefono AS telefono
    FROM
    t_usuarios AS usuarios
    INNER JOIN
    t_cat_roles AS roles ON usuarios.id_rol = roles.id_rol
    INNER JOIN
    t_persona AS persona ON usuarios.id_persona = persona.id_persona";
    $respuesta = mysqli_query($conexion, $sql);

?>

<table class="table table-sm" >
 <thead>
<th>Nompre</th>
<th>Primer Apellido</th>
<th>Segundo Apellido</th>
<th>Edad</th>
<th>Genero</th>
<th>Telefono</th>
<th>Correo</th>
<th>Usuario</th>
<th>Reset Password</th>
<th>Cambiar Rol</th>
<th>Ubicacion</th>
<th>Editar</th>
<th>Eliminar</th>
 </thead>
 <tbody>
<?php 

    while($mostrar = mysqli_fetch_array($respuesta)){
?>

<tr>
<th> <?php echo $mostrar['nombrePersona']; ?> </th>
<th><?php echo $mostrar['paterno']; ?></th>
<th><?php echo $mostrar['materno']; ?></th>
<th><?php echo $mostrar['fechaNacimiento']; ?></th>
<th><?php echo $mostrar['sexo']; ?></th>
<th><?php echo $mostrar['telefono']; ?></th>
<th><?php echo $mostrar['correo']; ?></th>
<th><?php echo $mostrar['nombreUsuario']; ?></th>
<th><?php echo $mostrar['ubicacion']; ?></th>
<th>
    <button class="btn btn-success btn-sm" >
        Cambiar Contraseña
    </button>
</th>
<th><button class="btn btn-primary btn-sm" >
        Cambiar Rol
    </button></th>

<th><button class="btn btn-warning btn-sm" >
        Editar
    </button></th>
<th><button class="btn btn-danger btn-sm" >
        Eliminar
    </button></th>
</tr>

<?php } ?>

</tbody>

</table>