<?php
$x = 33;
$y = 7;
if ($x > $y) {
    echo $x . " es el mas guapo";
}
else {
    echo $y. " es el mas guapo";
}

$carrera = "sistemas";
$msg = "<br> Tu carrera es: ";
switch ($carrera) {
case 'sistemas':
    echo $msg . $carrera;
    break;
case 'industrial':
    echo $msg . "facil";
    break;
default :
    echo $msg . "una carrera decente";
    break;
}
for ($i=0; $i < 10; $i++) {
    echo "<br> " . $i;
}
while ($a <= 10) {
    $a++;
    echo "<br> " . $a;
}
?>