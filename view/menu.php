<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú - MiniMarket Demo</title>
</head>
<body>
    <?php
        //verificacion de si el usuario hizo login previamente:
        require_once '../model/seguridades/ManagerSeguridades.php';
        $managerSeguridades=new ManagerSeguridades();
        $autenticado=$managerSeguridades->verificarAutenticado();
        if($autenticado==false){
            header('Location: login.php');
        }
    ?>
    <h3>Menú MiniMarket Demo</h3>
</body>
</html>