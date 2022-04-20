<?php
function productos($bd,$categoria){
    $sql = "SELECT * FROM productos WHERE categoria= $categoria";
    $resul = $bd -> query($sql);
    return $resul;
}
?>