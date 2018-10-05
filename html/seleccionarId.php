<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Buscar por Asignatura</title>
  </head>
  <body>
    <?php
    require_once "datos/conexion.php";
    if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
      $asignatura = $_POST['asignatura'];
      $pdo = Conexion::getInstancia()->conectar();
      $sql = "SELECT * FROM tareas WHERE asignatura = :asignatura";
      $query = $pdo->prepare($sql);
      $query->bindParam(':asignatura', $asignatura, PDO::PARAM_STR);
      $query->execute();
      $row = $query->fetch(PDO::FETCH_ASSOC);
      $tt = $row['titulo'];
      if(is_null($tt)) {
          echo "No se hayo nada <br>";
      }
      else {
          echo "Titulo: " . $tt;
          echo "<br>Fecha de asignacion: " . $row['fecha_asignacion'];
          echo "<br>Fecha de entrega: " . $row['fecha_entrega'];
          echo "<br>Asignatura: " . $row['asignatura'];
          echo "<br>Entregada: " . $row['entregada']; ?>

<!--          <form action="editar.php" method="post">-->
<!--              --><?php
//              //echo $row."<br><br>";
//              foreach ($row as $a => $b) {
//                  echo '<input type="hidden" name="' . $a . '" value="' . $b . '">';
////              echo $a." >> ".$b."<br>";
//              }
//              //?>
<!--              <input type="submit" value="Actualizar">-->
<!--          </form>-->
          <?php
      }
      echo "<br><a href='seleccionarId.php'>Regresar</a>";
    } else {
    ?>
      <form action="seleccionarId.php" method="post">
        <input type="text" name="asignatura" placeholder="Escriba un Asignatura" required>
        <br>
        <input type="submit" value="Buscar">
          <br><a href="index.php">Indice</a><br>
      </form>
    <?php
    }
    ?>
  </body>
</html>
