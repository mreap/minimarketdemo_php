<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <link rel="stylesheet" href="resources/css/mmarketdemostyles.css">
    <title>Login - MiniMarket Demo</title>
</head>
<body>
    <div class="container">
        <div class="menu">
            <ul>
                <li><a href="../index.php">Inicio</a></li>
            </ul>
        </div>
        <div class="panel">
            <h3>Software ERP - MiniMarket Demo</h3>
            <p>Ingrese sus credenciales:</p>
            <form action="../controller/controller.php" method="POST">
                <label>Correo:</label>
                <input type="email" name="correo" required>
                <label>Clave:</label>
                <input type="password" name="clave" required>
                <input type="hidden" name="opcion" value="login">
                <input type="submit" value="Ingresar">
            </form>
            <p>
                <?php
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    if(isset($_SESSION['mensaje'])){
                        echo $_SESSION['mensaje'];
                        unset($_SESSION['mensaje']);
                    }
                ?>
            </p>
        </div>
    </div>
</body>

</html>