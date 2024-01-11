<?php
    include "valida.inc";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Incluir salas</title>
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
        <form action="administrar.php" method="POST" enctype="multipart/form-data" class = "formalte">

        
            <input type="hidden" name="operacao" value="incluir_salas">
            Nome:
            <input type="text" name="nome" size="20">
            <br>

            Foto da sala: 
            <label for="arquivo" class="custom-file-upload">
                <!-- codigo de customização do file -->
        Escolher arquivo
    </label>
    <input type="file" required name="arquivo" id="arquivo">
        <br>  
            
            <input type="submit" value="Cadastrar" name="enviar" class = "buttons">

        </form>
    </section>

        </form>
    </section>
        <?php
            include "rodape.inc";
        ?>

    </body>

</html>