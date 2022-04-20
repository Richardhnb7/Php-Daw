<?php

function desplazar_derecha($dato1,$dato2){
    $pos1=count($dato1)-1; 
    $pos2=count($dato2)-1;
    $indice1=0;
    $indice2=0;
 

    while($indice2<=$pos2){
        $posiciones=$dato2[$indice2];
   
        $aux=$pos1;
        while($posiciones<=$pos1){
            $dato1[$pos1+1]=$dato1[$pos1]; 
           
        }
        $dato1[$posiciones]=0; 
        $pos1=$aux+1;
       
    }
    return $dato1;
}

    function desplazar_izquierda($array,$desplazar){
        $pos1=count($array); 
        $pos2=count($desplazar);
      

        while($indice2<=$pos2){
            if (!($dato2[$indice2]>$posicion1)){
                $posiciones=$dato2[$indice2];
                while($posiciones<=$pos1){
                    $dato1[$posiciones]=$dato1[$posiciones+1];
                    $posiciones++;
                }
                
            }
        }
    }




