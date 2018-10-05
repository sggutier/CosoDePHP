<?php
require_once "datos/conexion.php";
// print_r(Conexion::getInstancia());
$pdo = Conexion::getInstancia()->conectar();
// $sql = "INSERT into tareas (titulo, fecha_asignacion, fecha_entrega, asignatura, entregada) " . "VALUES (?, ?, ?, ?, ?);";
$sql = "update tareas set titulo = ?, fecha_asignacion = ?, fecha_entrega = ?, asignatura = ?, entregada = ? where id = ?;";

//foreach ($_POST as $a => $b) {
//    echo $a." >> ".$b."<br>";
//}

$query = $pdo->prepare($sql);

$id = $_POST['id'];
$titulo = $_POST['titolo'];
$asign = $_POST['atribudato'];
$entrg = $_POST['liverdato'];
$subj = $_POST['subjekto'];
$entregada = isset($_POST['liverita'])? "true" : "false";

$query->bindParam(1, $titulo);
$query->bindParam(2, $asign);
$query->bindParam(3, $entrg);
$query->bindParam(4, $subj);
$query->bindParam(5, $entregada);
$query->bindParam(6, $id);

//echo $id . "<br>";
//echo $titulo . "<br>";
//echo $asign  . "<br>";
//echo $entrg  . "<br>";
//echo $subj  . "<br>";
//echo $entregada  . "<br>";
//echo $query->queryString . "<br>";



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
