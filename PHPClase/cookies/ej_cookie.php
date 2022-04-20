<?php
if(!isset($_COOKIE["visitas"])){ //aqui te crea una sino esta creada
    setcookie("visitas","1",time()+3600*24);
    echo "Bienvenido por primera vez";
}else{ 
    //aqui te la actualiza 
    $visitas++; 
    setcookie("visitas", $visitas, time()+3600*24);
    echo "Bienvenido, lleva visitándonos $visitas veces";
}
?>