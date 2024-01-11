<?php
    include "valida.inc";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterar Equipamento</title>
        <link rel="stylesheet" type="text/css" href="styleforms.css">
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
        <section class="section1">
        <form method="POST" action="administrar.php" class = "formalt">
            <input type="hidden" name="operacao" value="alterarequip">
            Nome:
            <br>
            <input type="text" name="nome" size="20">
            <br>
            Descrição do Equipamento:<br>
            <textarea rows="4" cols="50" name="descricao">
            </textarea>
            <br><br>

            Quantidade:
            <br>
            <input type="text" name="quantidade" size="20">
            <br>

            Funcionais:
            <br>
            <input type="text" name="funcionais" size="20">
            <br>

            Estragados:
            <br>
            <input type="text" name="estragados" size="20">
            <br>

            <input type="submit" value="Cadastrar" name="enviar" class = "buttons">

        </form>
    </section>
        <?php
            include "rodape.inc";
        ?>

    </body>