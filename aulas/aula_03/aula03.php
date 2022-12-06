<?php

    $a = isset ($_GET ["ano"])?$_GET["ano"]:2004;
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tem $i";
    if ($i >= 18) {
        $v = "ja pode votar";
        $d = "ja pode dirigir";
    }
    else {
        $v = "nao pode votar";
        $d = "nao pode dirigir";
    }
    echo "Com essa idade voce $v e tambem $d";
