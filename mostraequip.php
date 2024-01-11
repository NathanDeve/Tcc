<?php
    include "valida.inc";
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Mostrar Equipamentos</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="Website Icon" type="png"href="inden.png">
    </head>

    <body>
        <?php
            
            include "cabecalho.inc";
            include "menu.inc";
        ?>

        <?php
        include "conexao.inc";
         $resultado = $mysqli->query("SELECT * FROM geninv");


        $linhas = $resultado->num_rows;
        echo "<br><br>";
        echo "<section>";
        echo "<h1>Lista de Equipamento </h1>";
        echo "<br><br>";

        if($linhas == 0){
        echo "<h1>Lista vazia</h1> <br><br>";
        }else{

        for ($i=0 ; $i<$linhas ; $i++){

        $reg = $resultado->fetch_row();
            echo "<div class='divcentraliza2'>";
            echo '<table>';
            echo '<tr>';
            echo '<th>Nome</th>';
            echo '<th>Descrição</th>';
            echo '<th>Quantidade</th>';
            echo '<th>Funcionais</th>';
            echo '<th>Estragados</th>';
            echo '</tr>';
            echo '<tr>';
            echo "<td>{$reg[0]}</td>";
            echo "<td>{$reg[1]}</td>";
            echo "<td>{$reg[2]}</td>";
            echo "<td>{$reg[3]}</td>";
            echo "<td>{$reg[4]}</td>";
            echo '</tr>';
            echo '</table>';
            echo "</div>";
   }
}
?>
  <?php
            include "rodape.inc";
        ?>
    </body>
</html>