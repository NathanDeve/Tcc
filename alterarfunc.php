<?php
    include "valida.inc";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>alterar funcionario</title>
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
            <form action="administrar.php" method="POST" enctype="multipart/form-data" class = "formalt">


                <input type="hidden" name="operacao" value="alterar_func">
                Username:
                <br>
                <input type="text" name="username" size="20">
                <br>
                Nome:
                <br>
                <input type="text" name="nome" size="20">
                <br>
                Data de nascimento:
                <br>
                <input type="date" name="datnascimento" size="20" class="date">
                <br>

                Area de atuação:
                <br>
                <input type="text" name="areatuacao" size="20">
                <br>

                Telefone:
                <br>
                <input type="text" name="telefone" size="20">
                <br>

                Estado de saúde:
                <br>
                <select name="estadosaude" class="saude">
                    <option value="saúdavel">saúdavel</option>
                    <option value="doente">doente</option>
                    <option value="acidentado">acidentado</option>
                </select>
                <br>
                Senha:
                <br>
                <input type="password" name="senha" size="20">
                <br>

                Status:
                <br>
                <select name="status_pessoa" class="status">
                    <option value="ativo">ativo</option>
                    <option value="inativo">inativo</option>
                </select>
                <br>
                Função:
                <br>
                <select name="funcao" class="funcao">
                    <option value="adm">adm</option>
                    <option value="geral">geral</option>
                </select>
                <br>
                Foto do funcionário: 
            <label for="arquivo" class="custom-file-upload">
                <!-- codigo de customização do file -->
        Escolher arquivo
    </label>
    <input type="file" required name="arquivo" id="arquivo">
        <br>  

                <input type="submit" value="Cadastrar" name="enviar" class = "buttons">

            </form>
    </section>
    <?php
    include "rodape.inc";
    ?>

</body>