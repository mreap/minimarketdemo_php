<?php

if(!isset($_SESSION)){
    session_start();
}
require_once '../model/seguridades/ManagerSeguridades.php';
require_once '../model/auditoria/ManagerAuditoria.php';
require_once '../model/dtos/AudBitacora.php';

$opcion=$_POST['opcion'];

switch($opcion){
    case "login":
        $correo=$_POST['correo'];
        $clave=$_POST['clave'];
        $managerSeguridades=new ManagerSeguridades();
        try{
            $segUsuario=$managerSeguridades->validarCredenciales($correo,$clave);
            if($segUsuario->autenticado==true){
                $_SESSION['autenticado']=true;
                $_SESSION['correo']=$segUsuario->correo;
                header('Location: ../view/menu.php');
            }
        }catch(Exception $e){
            $mensaje=$e->getMessage();
            $_SESSION['mensaje']=$mensaje;
            $_SESSION['autenticado']=false;
            unset($_SESSION['correo']);
            header('Location: ../view/login.php');
        }
        break;
    case "cerrarSesion":
        $managerSeguridades=new ManagerSeguridades();
        $managerSeguridades->cerrarSesion();
        header('Location: ../view/login.php');
        break;
    case "consultarBitacora":
        $managerAuditoria=new ManagerAuditoria();
        $listado=$managerAuditoria->findAllBitacora();
        $_SESSION['listadoBitacora']=serialize($listado);
        header('Location: ../view/auditoria/auditor/index.php');
        break;
    default:
}
