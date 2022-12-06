<?php

    $n1 = isset ($_GET ["n1"])?$_GET["n1"]:0;
    $n2 = isset ($_GET ["n2"])?$_GET["n2"]:1;
    $sm = $n1 + $n2;
    $media = $sm / 2;

    echo "A média entre $n1 e $n2 é igual a $media";

    if ($media >= 5){
        echo " Aprovado";
    }
    else {
        echo " Reprovado";
    }
?>