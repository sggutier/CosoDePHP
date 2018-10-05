<?php
require_once "datos/conexion.php";

if (strtoupper($_SERVER['REQUEST_METHOD']) === 'GET') {

    $id = $_GET['id'];
    $pdo = Conexion::getInstancia()->conectar();
    $sql = "SELECT * FROM tareas WHERE id = :id";
    try {
        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if (is_null($row) || empty($row)) {
            echo "No se hayo nada <br>";
        }
        else {
            ?>

            <!DOCTYPE html>
            <html lang="es" dir="ltr">
            <head>
                <meta charset="utf-8">
                <title>Editar</title>
            </head>
            <body>
            <form action="actualizar.php" method="post">
                <fieldset>
                    <input type="hidden" name="id" value="<?php echo $row['id']?>" >
                    <legend>Editar Tarea</legend>
                    <div>
                        Titulo
                        <input type="text" name="titolo" value="<?php echo $row['titulo'] ?>">
                    </div>
                    <br>
                    <div>
                        Fecha de asignación
                        <input type="date" name="atribudato" value="<?php echo $row['fecha_asignacion'] ?>">
                    </div>
                    <br>
                    <div>
                        Fecha de entrega
                        <input type="date" name="liverdato" value="<?php echo $row['fecha_entrega'] ?>">
                    </div>
                    <br>
                    <div>
                        Asignatura
                        <input type="text" name="subjekto" value="<?php echo $row['asignatura'] ?>">
                    </div>
                    <br>
                    <div>
                        Entregada
                        <input type="checkbox" name="liverita" <?php echo $row['entregada']==1? 'checked' : '' ?>>
                    </div>
                    <br>
                    <input type="submit" value="Guardar">
                    </div><br>

                </fieldset>
            </form>
            </body>
            </html>

            <?php
        }
        echo "<a href=\"seleccionar.php\">Regresar</a><br>";
    } catch (Exception $e) {
        echo "No compa, que anda haciendo ahi, deje";
    }
}
else {
    echo "wtf, quien te llamo";
}
?>