<?php
function primer_ejercicio02_12_21($fichero/*,Repeticiones*/){
    //Repeticiones = clase repeticiones
    //constructor y su set y get respectivamente
    $nuevo_array =  array();
    while(!eof($fich)) {//mientras el final del fichero no sea encontrado
        $linea = fgets($fich);//obtiene una linea desde el puntero 
        $palabras = explode (' ',$linea); //suponiendo que el separador de cada palabra es el espacio, devuelve un array de string apartir de la 
        //frase que se le ha pasado 
        $longitud_linea = count($palabras)-1;//cuenta el numero de elemetos del arrray
        $indice = 0;
        while($indice <=$longitud_linea){
            $pal = $palabras[$indice];
            if(empty($nuevo_array)){//comprueva si la variable existe
                $dato = new Repeticiones($pal,1);
                $nuevo_array[0]=$dato;
            }else{
                //nuevo array no este vacio y tendremos que buscar en el array si la pal existe en el array o no
                $contador = 0;
                $long=count($nuevo_array)-1;
                while($contador<=$long && $nuevo_array_nuevo[$contador]!=$pal){
                    $contador++;//hasta que se cumple la condicion
                }
                if($contador > $long){ //Una nueva palabra se debe introducir en el nuevo array nuevo.
                    $dato = new Repeticiones($pal,1);
                    $nuevo_array[$contador]=$dato;
                }else{//aqui lo que hace es aumentar en uno la cantidad de repeticiones de esa palabra 
                    $repe=$nuevo_array[$contador]->getCantidad();//llama
                    $repe++;//aumenta
                    $nuevo_array[$contador]->putCantidad($repe);//guarda
                }
                $indice++;
            }
        }
    }
    return $nuevo_array;
}

function solucion_segundo_ejercicio02_12_21($bd,$a,$b){
    $sql = "select * from productos where stock between $a and $b";
    $resul = $bd -> query($sql);//procesa la consullta en la base de datos y guarda el resultado en la variable 
    return $resul;
}

function solucion_tercer_ejercicio02_12_21($fich, $bd){
    $nuevo_array = array();
  //  $sql = "select * from productos";
   // $resultado = $bd -> query($sql);
    while(!eof($fich)){//mientras el final del fichero no sea encontrado
        $sql = "select * from productos";
        $resultado = $bd -> query($sql);//guarda resultado de la consulta
        $linea = fgets($fich);//obtiene una linea desde el puntero 
        $palabras = explode (' ',$linea); //suponiendo que el separador de cada palabra es el espacio
        $indice = 0;
        $codigo = $palabra[$indice];
        $j=0;
        while($rows = mysql_fetch_array($resultado)){
            if($codigo == $rows[0]){
                $nuevo_array[$j] = $codigo;
                $j++;
            }
      
        }
    }
    return $nuevo_array;

}