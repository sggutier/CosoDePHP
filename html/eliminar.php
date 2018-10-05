<?php
/**
 * Created by PhpStorm.
 * User: sggutier
 * Date: 10/4/18
 * Time: 11:33 PM
 */

require_once "datos/conexion.php";
// print_r(Conexion::getInstancia());
$pdo = Conexion::getInstancia()->conectar();
// $sql = "INSERT into tareas (titulo, fecha_asignacion, fecha_entrega, asignatura, entregada) " . "VALUES (?, ?, ?, ?, ?);";
$sql = "delete from tareas where id = ?;";

//foreach ($_POST as $a => $b) {
//    echo $a." >> ".$b."<br>";
//}

$query = $pdo->prepare($sql);

$id = $_GET['id'];

$query->bindParam(1, $id);




$result = $query->execute();
// $result = false;

if ($result) {
    header("Location: seleccionar.php");
}
else {
    echo "Tas bien  wey.";
}

?>
<br><a href="index.php">Indice</a><br>
