<?php
require_once '../model/bdd/Database.php';
require_once '../model/dtos/SegUsuario.php';
require_once '../model/auditoria/ManagerAuditoria.php';

class ManagerSeguridades{
    public function findSegUsuarioByCorreo($correo){
        //Obtenemos la informacion del producto especifico:
        $pdo = Database::connect();
        //Utilizamos parametros para la consulta:
        $sql = "select * from seg_usuario where correo=?";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros para la consulta:
        $consulta->execute(array($correo));
        //Extraemos el registro especifico:
        $dato = $consulta->fetch(PDO::FETCH_ASSOC);
        //Transformamos el registro obtenido a objeto:
        $segUsuario=new SegUsuario();
        $segUsuario->idSegUsuario=$dato['id_seg_usuario'];
        $segUsuario->apellidos=$dato['apellidos'];
        $segUsuario->nombres=$dato['nombres'];
        $segUsuario->correo= $dato['correo'];
        Database::disconnect();
        return $segUsuario;
    }
    public function validarCredenciales($correo,$clave){
        //Obtenemos la informacion del producto especifico:
        $pdo = Database::connect();
        //Utilizamos parametros para la consulta:
        $sql = "select * from seg_usuario where correo=? and clave=?";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros para la consulta:
        $consulta->execute(array($correo,$clave));
        //Extraemos el registro especifico:
        $dato = $consulta->fetch(PDO::FETCH_ASSOC);
        //Verificamos si encontró datos:
        $managerAuditoria=new ManagerAuditoria();
        if($consulta->rowCount()==0){
            //pista de auditoria:
            $managerAuditoria->generarEventoBitacora($correo,"Credenciales incorrectas.");
            throw new Exception("Credenciales incorrectas.");
        }
        
        //Transformamos el registro obtenido a objeto:
        $segUsuario=new SegUsuario();
        $segUsuario->idSegUsuario=$dato['id_seg_usuario'];
        $segUsuario->apellidos=$dato['apellidos'];
        $segUsuario->nombres=$dato['nombres'];
        $segUsuario->correo= $dato['correo'];
        $segUsuario->autenticado=true;
        //pista de auditoria:
        $managerAuditoria->generarEventoBitacora($segUsuario->correo,"Login correcto.");
        return $segUsuario;
    }
    public function verificarAutenticado(){
        if(!isset($_SESSION)){
            session_start();
        }
        if(isset($_SESSION['autenticado'])){
            return $_SESSION['autenticado'];
        }else{
            return false;
        }
    }
    public function cerrarSesion(){
        if(!isset($_SESSION)){
            session_start();
        }
        //pista de auditoria:
        $managerAuditoria=new ManagerAuditoria();
        $correo=$_SESSION['correo'];
        $managerAuditoria->generarEventoBitacora($correo,"Cerrar sesión.");           
        session_abort();
    }
}