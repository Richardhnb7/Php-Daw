<?php
function numeroPAlabras($fich,Repeticiones){
    //Repeticiones = clase repeticiones
    //constructor y su set y get respectivamente
    $nuevo_array =  array();
    $contador=0;
    $numeroLinea = 1;
    while(!eof($fich)){
        $linea = fgets($fich);
        $palabras = explode (' ',$linea); //suponiendo que el separador de cada palabra es el espacio
        $numero_palabras = count($palabras);
        if(empty($nuevo_array)){
            $dato = new Repeticiones($numeroLinea,$numero_palabras);
            $nuevo_array[0]=$dato;
        }else{
            $dato= new Repeticiones($numeroLinea,$numero_palabras);
            $nuevo_array[$contador]=$dato;
        }
        $contador++;
        $numeroLinea++;
    }
    return $nuevo_array;
}

?>