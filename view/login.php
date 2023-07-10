<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <title>Login - MiniMarket Demo</title>
</head>

<body>
    <style>
        /* Estilos generales */
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
        }

        /* Estilos del menú */
        .menu {
            width: 200px;
            /* Ancho del menú */
            background-color: #f2f2f2;
        }

        .menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .menu ul li a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }

        .menu ul li a:hover {
            background-color: #ddd;
        }

        /* Estilos del panel */
        .panel {
            flex: 1;
            /* El panel ocupa todo el espacio restante */
            padding: 20px;
            background-color: #fff;
        }

        /* Estilos responsivos */
        @media screen and (max-width: 600px) {
            .container {
                flex-direction: column;
                /* Cambia el diseño a una columna en pantallas pequeñas */
            }

            .menu {
                width: 100%;
                /* Menú ocupa todo el ancho en pantallas pequeñas */
            }
        }
    </style>
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