<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <title>MiniMarket Demo - PHP</title>
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
                <li><a href="view/login.php">Login</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
        <div class="panel">
            <h3>Software ERP - MiniMarket Demo</h3>
            <p>Este producto está desarrollado con las siguientes tecnologías:</p>
            <ul>
                <li>Lenguaje PHP</li>
                <li>Base de datos MySQL</li>
                <li>HTML 5</li>
                <li>CSS 3</li>
            </ul>
        </div>
    </div>
</body>

</html>