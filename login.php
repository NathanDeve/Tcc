<?php
// obtém os valores digitados
$username = $_POST["username"];
$senha = $_POST["senha"];
$cod = $_POST["cod"];
// acesso ao banco de dados
include "conexao.inc";

$resultado = $mysqli->query("SELECT * FROM genfunc WHERE username='$username'");
$linhas = $resultado->num_rows;

if ($linhas == 0){ // testa se a consulta retornou algum registro

    echo "<html><body>";
    echo "<p align=\"center\">Usuário não encontrado!</p>";
    echo "<p align=\"center\"><a href=\"index.html\">Voltar</a></p>";
    echo "</body></html>";
} else {
    $registro = $resultado->fetch_array();
    if ($senha != $registro["senha"]){ // confere senha
   
        echo "<html><body>";
        echo "<p align=\"center\">A senha está incorreta!</p>";
        echo "<p align=\"center\"><a href=\"index.html\">Voltar</a></p>";
        echo "</body></html>";
    }else{ // usuário e senha corretos. Vamos criar os cookies
   
        if ($registro["status_pessoa"]=="ativo"){
           
            if ($registro["funcao"]=="adm" && $cod == 1){
                
                //com session
                session_start();
                $_SESSION['nome_usuario'] = $username;
                $_SESSION['senha_usuario'] = $senha;
               
                // direciona para a página inicial dos usuários cadastrados
                header("Location: homeadm.php");
       
            }elseif ($registro["funcao"]=="geral" && $cod == 2){
                             
                //com session
                session_start();
                $_SESSION['nome_usuario'] = $username;
                $_SESSION['senha_usuario'] = $senha;
               
                // direciona para a página inicial dos usuários cadastrados
                header("Location:homeperson.php");
       
            }else{
                echo "<html><body>";
                echo "<p align=\"center\">Função nao encontrada!</p>";
                echo "<p align=\"center\"><a href=\"index.html\">Voltar</a></p>";
                echo "</body></html>";
            }
        }else{
            echo "<html><body>";
            echo "<p align=\"center\">Usuário inativo!</p>";
            echo "<p align=\"center\"><a href=\"index.html\">Voltar</a></p>";
            echo "</body></html>";
        }
    } 
}
$mysqli->close();
?>