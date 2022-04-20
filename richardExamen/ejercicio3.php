/*los ficheros de producto estria de esta forma:
    
    nombre descripccion peso stock categoria

    y los valores pasados estan ordenados 
*/

<?php
function solucion_tercer_ejercicio02_12_21($fich,  $valor1,$valor2){
    open($fich,'r');
    $arrayPro=array();
        while(!feof($fich)){
            $linea=fgets($fich);
            $array=explode(",",$linea);

            $pro=new Producto($array[0],$array[1],$array[2],$array[3],$array[4]);

            $stock=intval($array[3]);//esta funcion lo que hace es pasar de cadena a entero
            if($valor1>= $stock && $valor2<=$stock){
                array_push($arrPro,$pro);
            } 
        }
        return $arrPro;
    fclose($fich);
            
    }
?>