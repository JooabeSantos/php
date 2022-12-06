<?php
$idade = isset ($_GET ["idade"])?$_GET["idade"]:16;
    if ($idade <16){
        $tipovoto="não vota";
    }
    else{
        if($idade>=16 && $idade <18){
            $tipovoto = "voto opcional";
        }
        else {
            $tipovoto = "voto obrigatorio";
        }
    }
    echo "O seu voto é $tipovoto"
?>