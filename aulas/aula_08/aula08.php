
<?php

    $n1 = isset($_GET["n1"])?$_GET["n1"]:$n1;
    $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
    $n3 = isset($_GET["n3"])?$_GET["n3"]:0;



while ($n1 <= $n2) {

    echo $n1 += $n3 ."</br>";

}

?>

 

