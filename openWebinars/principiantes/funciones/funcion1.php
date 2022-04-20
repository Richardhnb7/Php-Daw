<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * las funciones soon rutilizables, permite no repetir codigo
     * 
     * la sentencia return termina la funcion
     */
    $n1=4;
    $n2=5;
    function sumar($nu1,$nu2){
        return $nu1+$nu2 ;
    }
    
    //echo sumar($n1,$n2);

    /*
    paso por valor -paso una copia
    paso por referencia se le pasa el original

    para pasar el valor por referencia es con &
        funtion ofun(&$num1){

        }

    */

    /**
     * Recursividad: que se llame a si misma durante su ejecucion
     * 
     * ejemplo factorial de un numero 
     */
        function factorial($n){
            if ($n==1) {
                return 1;
            }else {
                echo $n . " x ";
                return $n *factorial($n-1);
            }
        }
    echo "<br>";
        $resultado = factorial(5); 
        echo "<br>";
        echo $resultado;
    ?>
</body>
</html>