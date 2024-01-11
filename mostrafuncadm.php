<?php
    include "valida.inc";
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Funcionários</title>
        <link rel="stylesheet" type="text/css" href="style_fun.css">
        <link rel="Website Icon" type="png"href="inden.png">
    </head>

    <body>

        <?php
            include "cabecalho.inc";
            include "menu.inc";
        ?>

        <?php
        include "conexao.inc";
         $resultado = $mysqli->query("SELECT username, nome, datnascimento, areatuacao, telefone, estadosaude, status_pessoa, funcao, arquivo, cod FROM genfunc");


        $linhas = $resultado->num_rows;

        if($linhas == 0){
        echo "<br><br>";
        echo "<h1>Lista vazia</h1>";
        }else{
            echo "<br><br>";
            echo "<h1>Lista de Funcionarios</h1>";
            echo "<br><br>";
            echo '<table>';
            echo '<tr>';
            echo '<th>Imagem</th>';
            echo '<th>Username</th>';
            echo '<th>Nome</th>';
            echo '<th>Data de nascimento</th>';
            echo '<th>Área de atuação</th>';
            echo '<th>Telefone</th>';
            echo '<th>Estado de saúde</th>';
            echo '<th>Status Pessoa</th>';
            echo '<th>Função</th>';
            echo '</tr>';

        for ($i=0 ; $i<$linhas ; $i++){

        $reg = $resultado->fetch_row();
           
            echo '<tr>';
            echo "<td><img src='uploads/$reg[8]'</td>";
            echo "<td>{$reg[0]}</td>";
            echo "<td>{$reg[1]}</td>";
            echo "<td>{$reg[2]}</td>";
            echo "<td>{$reg[3]}</td>";
            echo "<td>{$reg[4]}</td>";
            echo "<td>{$reg[5]}</td>";
            echo "<td>{$reg[6]}</td>";
            echo "<td>{$reg[7]}</td>";
            echo '</tr>';
   }
   echo '</table>';
}
?>


        <?php
            include "rodape.inc";
        ?>

    </body>

</html>