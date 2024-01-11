<?php
    include "valida.inc";
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Sala 102b</title>
        <link rel="stylesheet" type="text/css" href="styletab.css">
        <link rel="Website Icon" type="png"href="inden.png">
    </head>

    <body>
        <?php
            
            include "cabecalho.inc";
            include "menu2.inc";
        ?>

        <?php
        include "conexao.inc";
         $resultado = $mysqli->query("SELECT * FROM salas WHERE nome = '101-a'");


        $linhas = $resultado->num_rows;
        echo "<br><br>";
        echo "<section>";
        echo "<h1>Nome da sala</h1>";
        echo "<br><br>";

        if($linhas == 0){
        echo "<h1>Lista vazia</h1> <br><br>";
        }else{

        for ($i=0 ; $i<$linhas ; $i++){

        $reg = $resultado->fetch_row();
            echo "<div class='divcentraliza2'>";
            echo '<table>';
            echo '<tr>';
            echo '<th>Sala</th>';
            echo "<th>Mapa de risco</th>";
            echo '<th><button onclick="window.location.href=\'mapa.php\'">Voltar</button></th>';
            echo '</tr>';
            echo '<tr>';
            echo "<td>{$reg[1]}</td>";
            echo "<td><img src='uploads2/$reg[0]'</td>";
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