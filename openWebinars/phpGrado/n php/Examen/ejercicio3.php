<?php
    function comprobarProductos($fichero,$bd){
        $array=[];
        $fich= fopen($fichero,'r');
        while(!feof($fich)){
            $linea=fgets($fich);//obtiene una linea desde el piuntero
            $array=explode(",",$linea);

            $pro=new Producto($array[0],$array[1],$array[2],$array[3],$array[4],$array[5]);

            //escojo el pro[0] porque no se especifica si se pasa el nombre o el coodigo del producto 

            $ins="Select * from categorias where codpro=$pro[0]  ;";
	        $result=$bd->query($ins);//se guarda la consulta 
	        $num=$result->rowCount();
            if($num<0){
                array_push($arrPro,$pro);//se le guarda los datos 
            } 
        }
        return $arrPro;
        fclose($fich);
            
    }
?>