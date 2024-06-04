<?php
function getMaterias() {
    $db = new PDO('mysql:host=localhost;dbname=db_materias;charset=utf8', 'root', '1234');
    
    return $db;
}

function materias($nombre){
    $db = new PDO('mysql:host=localhost;dbname=db_materias;charset=utf8', 'root', '1234');
    $sentencia = $db->prepare( "SELECT * from materias where nombre like ?");
    $sentencia->execute(["%$nombre%"]);
    $materias = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $materias;

}

?>
