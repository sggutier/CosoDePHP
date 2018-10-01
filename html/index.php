<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insertar</title>
  </head>
  <body>
    <form  action="guardar.php" method="post">
      <fieldset>
        <legend>Guardar Tarea</legend>
        <div>           
          <input type="text" name="titolo" placeholder="Título">
        </div><br>
        <div>
          Fecha de asignación
          <input type="date" name="atribudato" placeholder="Fecha de asignación">
        </div><br>
        <div>
          Fecha de entrega
          <input type="date" name="liverdato" placeholder="Fecha de entrega">
        </div><br>
        <div>
          Asignatura
          <input type="text" name="subjekto" placeholder="Asignatura">
        </div><br>
        <div>
          Entregada
          <input type="checkbox" name="liverita" placeholder="Entregada">
        </div><br>
          <input type="submit" value="Guardar">
          <input type="reset"  value="Limpiar">
        </div><br>
        <a href="seleccionar.php">Ver registros</a><br>
        <a href="seleccionarId.php">Buscar por Nombre</a>
      </fieldset>
    </form>
  </body>
</html>
