<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <title>MiniMarket Demo - PHP</title>
</head>

<body>
    <style>
        .mainmenubtn {
            background-color: skyblue;
            color: white;
            border: none;
            cursor: pointer;
            padding: 20px;
            margin-top: 20px;
        }

        .mainmenubtn:hover {
            background-color: blue;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-child {
            display: none;
            background-color: skyblue;
            min-width: 200px;
        }

        .dropdown-child a {
            color: blue;
            padding: 20px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-child {
            display: block;
        }
    </style>
    <div class="dropdown">
        <li class=" even">
            <button class="mainmenubtn">Main Menu</button>
        <li class=" odd">
            <div class="dropdown-child">
        <li class=" even">
            <a href="view/login.php">Login</a>
            <a href="http://wwww.tudominio.com/page2.html">Sub Menu 2</a>
            <a href="http://wwww.tudominio.com/page3.html">Sub Menu 3</a>
            <a href="http://wwww.tudominio.com/page4.html">Sub Menu 4</a>
            <a href="http://wwww.tudominio.com/page5.html">Sub Menu 5</a>
    </div>
    </div>
    <div>
        <h3>Software ERP - MiniMarket Demo</h3>
        <p>Este producto está desarrollado con las siguientes tecnologías:</p>
        <ul>
            <li>Lenguaje PHP</li>
            <li>Base de datos MySQL</li>
            <li>HTML 5</li>
            <li>CSS 3</li>
        </ul>
    </div>
</body>

</html>