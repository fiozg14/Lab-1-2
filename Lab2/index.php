<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
</head>
<body>
<?php
    require_once 'db.php';

    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
        $materias = materias($nombre);
   
?>

    <table class=table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre de la Materia</th>
                <th>Profesor a cargo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materias as $materias) : ?>
                <tr>
                    <td><?= $materias -> id?></td> <td><?= $materias -> nombre?></td> <td><?= $materias -> profesor?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
<?php
}
?>
<form action="index.php" method="get">
    <div>
        <label for="nombre" class="form-label">Nombre de la materia</label>
        <input  class="form-control" type="text" name="nombre" id="nombre">
    </div>
    <button type="submit"  class="btn btn-outline-primary">Buscar</button>
</form>

</body>
</html>