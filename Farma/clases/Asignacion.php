<?php 
    include "conexion.php";

    class Asignacion extends Conexion{
        public function  agregarAsignacion($datos){
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO t_asignacion (
                id_persona,
                id_equipo,
                marca,
                modelo,
                seriall,
                descripcion,
                memoria,
                disco_duro,
                procesador )
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $query = $conexion->prepare($sql);
            $query->bind_param('iisssssss', $datos['idPersona'],
            $datos['idEquipo'],$datos['marca'],$datos['modelo'],$datos['seriall'],
            $datos['descripcion'],$datos['memoria'],$datos['discoDuro'],
            $datos['procesador'], );

            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }
    }
?>