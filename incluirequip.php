<?php
    include "valida.inc";
?>
<html>
    <head>
        <title>Incluir equipamento </title>
        <link rel="stylesheet" type="text/css" href="styleforms.css">
        <link rel="Website Icon" type="png" href="inden.png">
    </head>
            
            <body>
            <?php
            include "cabecalho.inc";
            include "menu.inc";
            ?>

            <?php
                include "botoes.inc"
            ?>
             
                <section class ="section1">
                <form method="POST" action="administrar.php" class = "formalt">
                <input type="hidden" name="operacao" value="incluirequip">
                Nome:
                <input type="text" name="nome" size="20">            
                <br><br>
                Descrição do Equipamento:<br>
                <textarea rows="4" cols="20" type="text" name="descricao">
                </textarea>
                <br><br>
                Quantidade:
                <input type="number" name="quantidade" size="20">
                <br><br>
                Funcionais:
                <input type="number" name="funcionais" size="20">
                <br><br>
                Estragados:
                <input type="number" name="estragados" size="20">
                <br>
                <input type="submit" value="Enviar" name="envia" class = "buttons">
            </form>
</section>

<!-- textarea{
    height: 254px;
    width: 180px;

}-->
            <?php
                include "rodape.inc";
            ?>
        </body>
        
            
</html>  