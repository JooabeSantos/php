<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="aula01.php" method="get" name="nota">
        
<?php
    $n = 1;
    while ($n <=5){
      echo  "<input type='number' placeholder='v$n' name='n1'>";
        $n++;
}
?>

        <input type="submit">
    </form>


</body>
</html>