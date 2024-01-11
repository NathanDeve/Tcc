<?php
    include "valida.inc";
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Mostrar salas</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="Website Icon" type="png"href="inden.png">
    </head>

    <body>

        <?php
            include "cabecalho.inc";
            include "menu.inc";
        ?>
        <?php
            include "botoes.inc";
        ?>
        <section class="section2">
        Clique no botão abaixo para exibir todos os registros:
            <form method="POST" action="administrar.php">
            <input type="hidden" name="operacao" value="mostrar_salas">

            <input type="submit" value="Mostrar Registros" name="enviar">

        </form>
        </section>
        <?php
            include "rodape.inc";
        ?>

    </body>

</html>