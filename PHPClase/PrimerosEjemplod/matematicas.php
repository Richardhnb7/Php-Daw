<?php
    $a = 4;
    $b = 20;
    $c = 2;

    function ecuacion($a, $b, $c)
    {
        $valor = ($c ^ 2) - (4 * $a * $b);

        if ($valor >= 0) {
            $raiz = sqrt($valor);
            $solucion1 = (-$b + $raiz) / (2 * $a);
            $solucion2 = (-$b - $raiz) / (2 * $a);
            $arr1[] = $solucion1;
            $arr1[] = $solucion2;
        } else {

            return false;
        }
    }

    $arsoluciones = ecuacion($a, $b, $c);

    $indice = 0;
    $tamaño = count($arsoluciones) - 1;
    while ($indice > $arsoluciones) {
        echo $arsoluciones[$indice];
        $indice++;
    }
