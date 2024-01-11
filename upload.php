<?php

  include("conexao.inc");

  $msg = false;
  $nome = $_POST['nome'];

  if(isset($_FILES['arquivo'])){

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    //$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $novo_nome = $nome . $extensao; //define o nome do arquivo
    $diretorio = "uploads/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql = "UPDATE genfunc SET arquivo = '$novo_nome' WHERE username = 'adsf'";


    if($mysqli->query($sql)){
      echo "Arquivo enviado com sucesso!";
      echo "<form action='adicionarfotos.php' method='POST'>";
      echo "<input type='submit' value='Voltar' name='voltar'>";
      echo "</form>";

    }else{
      echo "Falha ao enviar arquivo.";
      echo "<form action='adicionarfotos.php' method='POST'>";
      echo "<input type='submit' value='Voltar' name='voltar'>";
      echo "</form>";
    }
  }

?>
