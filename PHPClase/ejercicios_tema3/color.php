
<?php

if ($_POST['color1'] !='ninguno'){
   
        if(!isset($_COOKIE['color1'])){ 
          
            setcookie('color1',$color);
            echo $_COOKIE['color1'];
            echo "hola";
        }else{ 
            $color1=$_COOKIE['color1'];
            echo '<body style="background-color:'.$color1.';">';
        }
    }else{
        echo "ha habido un error2";
    }