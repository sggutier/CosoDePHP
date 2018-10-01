<?php

if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
$row = $_POST;


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
            <a href="seleccionarId.php">Regresar</a><br>
        </fieldset>
    </form>
    </body>
    </html>

    <?php
}else {
    echo "wtf, quien te llamo";
}
?>