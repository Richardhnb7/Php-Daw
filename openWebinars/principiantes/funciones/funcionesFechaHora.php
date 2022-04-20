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
    #fecha y hora

    echo date("d/M/Y");
    
    $hoy=getdate();
    var_dump($hoy);
    if ($hoy['month']=="February") {
        echo "Febrero";
    }
    
    echo"<br>";
    echo"zona horaria". date_default_timezone_get();
    date_default_timezone_set(" America/Los_Angeles");
    echo "<br>";
    echo "zona horaria" . date_default_timezone_get();
    


    ?>
</body>

</html>