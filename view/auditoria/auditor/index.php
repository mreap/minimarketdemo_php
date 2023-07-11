<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <title>Menú Auditoría - Auditor</title>
</head>
<body>
<nav>
  <ul>
    <li><a class="current" href="../../menu.php">Regresar</a></li>
  </ul>
  <form action="../../../controller/controller.php" method="POST">
    <input type="hidden" name="opcion" value="consultarBitacora">
    <input type="submit" value="Consultar">
  </form>
  <table>
    <thead>
      <th>ID</th>
      <th>FECHA</th>
      <th>CORREO</th>
      <th>MENSAJE EVENTO</th>
    </thead>
    <tbody>
      <?php
        if(!isset($_SESSION)){
          session_start();
        }
        require_once "../../../model/dtos/AudBitacora.php";
        $listado=unserialize($_SESSION['listadoBitacora']);
        foreach($listado as $b){
          echo "<tr>";
          echo "<td>$b->idAudBitacora</td>";
          echo "<td>$b->fechaEvento</td>";
          echo "<td>$b->correoOrigen</td>";
          echo "<td>$b->mensajeEvento</td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</nav>
</body>
</html>