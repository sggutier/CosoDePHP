<?php
require_once "datos/conexion.php";
// print_r(Conexion::getInstancia());
$pdo = Conexion::getInstancia()->conectar();
$sql = "INSERT into tareas (titulo, fecha_asignacion, fecha_entrega, asignatura, entregada) " . "VALUES (?, ?, ?, ?, ?);";

$query = $pdo->prepare($sql);

$titulo = $_POST['titolo'];
$asign = $_POST['atribudato'];
$entrg = $_POST['liverdato'];
$subj = $_POST['subjekto'];
$entregada = isset($_POST['liverita'])? 1 : 0;

$query->bindParam(1, $titulo);
$query->bindParam(2, $asign);
$query->bindParam(3, $entrg);
$query->bindParam(4, $subj);
$query->bindParam(5, $entregada);
echo $titulo . "<br>";
echo $asign  . "<br>";
echo $entrg  . "<br>";
echo $subj  . "<br>";
echo $entregada  . "<br>";
// echo '<img src="data:image/jpeg;base64,'.base64_encode( $cover ).'"/>';
// echo '<img src=".$cover." >';


$result = $query->execute();
echo $query->queryString . "<br>";
// $result = false;

if ($result) {
    //header("Location: seleccionar.php");
}
else {
    echo "Tas bien  wey.";
}
    
?>
<br><a href="index.php">Indice</a><br>