<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <link rel="stylesheet" href="../../resources/css/mmarketdemostyles.css">
    <title>Menú - MiniMarket Demo</title>
</head>
<body>
    <h3>Menú MiniMarket Demo</h3>
    <div class="container">
        <div class="menu">
            <h5>Opciones:</h5>
            <ul>
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Módulos</a></li>
                <li><a href="#">Roles</a></li>
                <li><a href="#">Asignaciones</a></li>
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