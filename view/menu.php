<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <link rel="stylesheet" href="resources/css/mmarketdemostyles.css">
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
    <div class="container">
        <div class="menu">
            <h5>Módulos:</h5>
            <ul>
                <li><a href="auditoria/auditor/index.php">Auditoría</a></li>
                <li><a href="seguridades/administrador/index.php">Seguridades</a></li>
                <li><a href="#">Parámetros</a></li>
                <li><a href="#">Otro</a></li>
                <form action="../controller/controller.php" method="POST">
                    <input type="hidden" name="opcion" value="cerrarSesion">
                    <input type="submit" value="Cerrar sesión">
                </form>
            </ul>
        </div>
        <div class="panel">
            <h3>Software ERP - MiniMarket Demo</h3>
            <p>Bienvenido
                <?php
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    echo $_SESSION['correo'];
                ?>
            </p>
            
        </div>
    </div>
</body>
</html>