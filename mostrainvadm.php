<?php
    include "valida.inc";
?>
<!DOCTYPE html>
<html>
        <?php
            include "cabecalho.inc";
            include "menu.inc";
        ?>
    <head>
        <meta charset="UTF-8">
        <title>Inventário</title>
        <link rel="stylesheet" type="text/css" href="styleinv.css">
        <link rel="Website Icon" type="png"href="inden.png">
    </head>

    <body>

        <?php
        include "conexao.inc";
         $resultado = $mysqli->query("SELECT * FROM geninv");


        $linhas = $resultado->num_rows;

        if($linhas == 0){
        echo "<br><br>";
        echo "<h1>Lista vazia</h1>";
        }else{
            echo "<br><br>";
            echo "<h1>Lista de Equipamentos</h1>";
            echo "<br><br>";
            echo "<section class='tablet'>";
            echo '<table>';
            echo '<tr class="tabela">';
            echo '<th>Nome</th>';
            echo '<th>Descrição</th>';
            echo '<th>Quantidade</th>';
            echo '<th>Funcionais</th>';
            echo '<th>Quebrados</th>';
            echo '</tr>';

        for ($i=0 ; $i<$linhas ; $i++){

        $reg = $resultado->fetch_row();
           
            echo '<tr class="tabela">';
            echo "<td>{$reg[0]}</td>";
            echo "<td>{$reg[1]}</td>";
            echo "<td>{$reg[2]}</td>";
            echo "<td>{$reg[3]}</td>";
            echo "<td>{$reg[4]}</td>";
            echo '</tr>';
   }
   echo '</table>';
   echo "</section>";
}
?>


        <?php
            include "rodape.inc";
        ?>

    </body>

</html>