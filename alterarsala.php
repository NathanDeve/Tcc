<?php
    include "valida.inc";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterar Sala</title>
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
            
            <input type="hidden" name="operacao" value="alterar_salas">
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

            <input type="submit" value="Cadastrar" name="enviar"  class = "buttons">

</form>

<!-- 
    .formalte{
border: 1px solid black;
padding: 1px;
width: 35vh;
height: 50vh;
margin: 5vh;
text-align: center;
display: flex;
justify-content: center;
flex-direction: column;
align-items: center;
border-radius: 50px;
}
-->
    </section>
        <?php
            include "rodape.inc";
        ?>

    </body>