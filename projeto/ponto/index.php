<?php

session_start(); // Iniciar a sessao

// Definir um fuso horario padrao
date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke</title>
</head>

<body>
    <h2>Registrar ponto</h2>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <p id="horario"><?php echo date("d/m/Y H:i:s"); ?></p>

    <a href="registrar_ponto.php">Registrar</a><br>

    <script>
        //var apHorario = document.getElementById("horario");

        function atualizarHorario() {
            var data = new Date().toLocaleString("pt-br", {
                timeZone: "America/Sao_Paulo"
            });
            //var formatarData = data.replace(", ", " - ");
            //apHorario.innerHTML = formatarData; 
            document.getElementById("horario").innerHTML = data.replace(", ", " - ");
        }

        setInterval(atualizarHorario, 1000);
    </script>

</body>

</html>