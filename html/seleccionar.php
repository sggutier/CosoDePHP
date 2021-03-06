<?php
//seleccionar.php
require_once "datos/conexion.php";
$sql = "call gifTareas()";
try {
  $pdo = Conexion::getInstancia()->conectar();
  $query = $pdo->query($sql);
  $query->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Error al realiza la consulta: ". $e;
}
?>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Titulo</th>
    <th>Fecha Asignacion</th>
    <th>Fecha Entrega</th>
    <th>Asignatura</th>
    <th>Entregada</th>
      <th>Actualizar</th>
      <th>Eliminar</th>
  </tr>
  <?php while ($r = $query->fetch()): ?>
    <tr>
      <td><?php echo($r['id']) ?></td>
      <td><?php echo($r['titulo']) ?></td>
      <td><?php echo($r['fecha_asignacion']) ?></td>
      <td><?php echo($r['fecha_entrega']) ?></td>
      <td><?php echo($r['asignatura']) ?></td>
      <td><?php echo($r['entregada']==1? "Si" : "No") ?></td>
        <td><a href='editar.php?id=<?php echo($r["id"]) ?>'>Actualizar</a></td>
        <td><a href="eliminar.php?id=<?php echo($r["id"]) ?>">Eliminar</a></td>
    </tr>
  <?php endwhile; ?>
</table>