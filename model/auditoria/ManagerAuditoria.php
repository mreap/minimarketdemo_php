<?php
require_once '../model/bdd/Database.php';
require_once '../model/dtos/AudBitacora.php';

class ManagerAuditoria{
    public function generarEventoBitacora($correoOrigen,$mensajeEvento){
        $fechaEvento=date("Y-m-d H:i:s");
        //Preparamos la conexion a la bdd:
        $pdo=Database::connect();
        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Preparamos la sentencia con parametros:
        $sql="insert into aud_bitacora (fecha_evento,correo_origen,mensaje_evento) values(?,?,?)";
        $consulta=$pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros:
        $consulta->execute(array($fechaEvento,$correoOrigen,$mensajeEvento));
        Database::disconnect();
    }
}