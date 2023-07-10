<?php
/*
    Controlador base - implementa patron de diseno MVC
    Autor: mrea@utn.edu.ec
*/
if(!isset($_SESSION)){
    session_start();
}
require_once '../model/seguridades/ManagerSeguridades.php';

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
                header('Location: ../view/menu.php');
            }
        }catch(Exception $e){
            $mensaje=$e->getMessage();
            $_SESSION['mensaje']=$mensaje;
            $_SESSION['autenticado']=false;
            header('Location: ../view/login.php');
        }
        break;
    default:
}
