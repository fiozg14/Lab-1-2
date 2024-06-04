<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pagos</title>
</head>
<body>
    <?php
    require_once 'db.php';

    function listarPagos(){

        $pagos = getPagos();

     ?>
       <ul class="list-group">
            <?php foreach($pagos as $pago) : ?>
                <table class="table-info"><li class="list-group-item"><?= $pago->deudor ?> ->Cuota: <?= $pago->cuota ?> -> Monto: <?= $pago->cuota_capital ?> -> Fecha de Pago: <?= $pago->fecha_pago ?></li></table>
                
            <?php endforeach; ?>
        </ul>
    <?php
    }
    listarPagos();

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $deudor = $_POST['deudor'];
        $cuota = $_POST['cuota'];
        $cuota_capital= $_POST['cuota_capital'];
        $fecha_pago = $_POST['fecha_pago'];

        addPago($deudor, $cuota, $cuota_capital, $fecha_pago);
        header('Location: index.php');
    }
    ?>

    <form action="index.php" method="post">
        <div class="form-group">
            <label for="deudor">Deudor</label>
            <input type="text" class="form-control" name="deudor" id="deudor">
        </div>
        <br>
        <div lass="form-group">
            <label for="cuota">Cuota</label>
            <input type="text" class="form-control" name="cuota" id="cuota">
        </div>
        <br>
        <div lass="form-group">
            <label for="cuota_capital">Cuota Capital</label>
            <input type="text" class="form-control" name="cuota_capital" id="cuota_capital">
        </div>
        <br>
        <div lass="form-group">
            <label for="fecha_pago">Fecha de Pago</label>
            <input type="date" class="form-control" name="fecha_pago" id="fecha_pago">
        </div>
        <br>
        <button type="submit"  class="btn btn-outline-primary">Agregar</button>

    </form>
</body>
</html>