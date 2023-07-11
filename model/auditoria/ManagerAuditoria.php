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
    public function findAllBitacora(){
        $pdo = Database::connect();
        $sql = "select * from aud_bitacora order by id_aud_bitacora";
        $resultado = $pdo->query($sql);
        //transformamos los registros en objetos de tipo Producto:
        $listado = array();
        foreach ($resultado as $res){
            $bitacora = new AudBitacora();
            $bitacora->idAudBitacora=$res['id_aud_bitacora'];
            $bitacora->fechaEvento=$res['fecha_evento'];
            $bitacora->correoOrigen=$res['correo_origen'];
            $bitacora->mensajeEvento=$res['mensaje_evento'];
            array_push($listado, $bitacora);
        }
        Database::disconnect();
        if(!isset($_SESSION)){
            session_start();
        }
        $correo=$_SESSION['correo'];
        $this->generarEventoBitacora($correo,"Consulta de findAllBitacora.");
        //retornamos el listado resultante:
        return $listado;
    }
}