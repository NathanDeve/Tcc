<?php
    header('Content-Type: text/html; charset=UTF-8');

    //puxa a OPERAÇÃO a ser realizada (pega nos campos hidden das páginas: inclui, exclui e mostra)
    $operacao = $_POST["operacao"];
    //cria a conexão com o Banco, seguindo os parâmetros do arquivo "conexao.inc"
    include "conexao.inc";
    
    //testa qual a operação que deve ser realizada no banco
    if ($operacao=="incluir_salas"){
        
        //puxa o valor dos inputs da página (inlcui)
        $nome = $_POST["nome"];
        $msg = false;
      
        if(isset($_FILES['arquivo'])){
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        //$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $arquivo = $nome . $extensao; //define o nome do arquivo
        $diretorio = "uploads/"; //define o diretorio para onde enviaremos o arquivo
      
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$arquivo); //efetua o upload
        
        //testa se a conexão deu certo
        if ($mysqli->connect_error) {
            //se der falha na conexão, exibe o possivel erro
            die("Falha na conexão: " . $mysqli->connect_error);
        }
    
        //define a string SQL a ser utilizada, usando as variáveis que resgataram os valores dos inputs
        $sql = "INSERT INTO salas VALUES ";
        $sql .= "('$nome', '$arquivo')";

        //testa se não houve problemas
        if ($mysqli->query($sql) === TRUE) {
            //imprime que o registro ocorreu corretamente
            echo "Registro inserido com sucesso.";

            //mostra na tela um botão para voltar
            echo "<form method=\"POST\" action=\"incluirsalas.php\">";
            echo "<input type=\"submit\" value=\"Voltar\" name=\"voltar\">";
            echo "</form>";

        } else {
            echo "Erro na inserção: " . $mysqli->error;
        }
        }
    }elseif ($operacao=="alterar_salas"){
       
        //puxa o valor dos inputs da página (inlcui)
        $nome = $_POST["nome"];
        $msg = false;
      
        if(isset($_FILES['arquivo'])){
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        //$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $arquivo = $nome . $extensao; //define o nome do arquivo
        $diretorio = "uploads/"; //define o diretorio para onde enviaremos o arquivo
      
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$arquivo); //efetua o upload
        }
        //testa se a conexão deu certo
        if ($mysqli->connect_error) {
            //se der falha na conexão, exibe o possivel erro
            die("Falha na conexão: " . $mysqli->connect_error);
        }
        //testa se a conexão deu certo
        if ($mysqli->connect_error) {
            //se der falha na conexão, exibe o possivel erro
            die("Falha na conexão: " . $mysqli->connect_error);
        }
   
        //define a string SQL a ser utilizada, usando as variáveis que resgataram os valores dos inputs
        $sql = "UPDATE salas SET nome='$nome',arquivo='$arquivo' WHERE nome='$nome'";
       
    
        //testa se não houve problemas
        if ($mysqli->query($sql) === TRUE) {
            //imprime que o registro ocorreu corretamente
            echo "Alteração salva com com sucesso.";

            //mostra na tela um botão para voltar
            echo "<form method=\"POST\" action=\"alterarsala.php\">";
            echo "<input type=\"submit\" value=\"Voltar\" name=\"voltar\">";
            echo "</form>";

        } else {
            echo "Erro na alteração: " . $mysqli->error;
        }
    
    }elseif ($operacao=="incluir_func"){
        
        //puxa o valor dos inputs da página (inlcui)
        $username = $_POST["username"];
        $nome = $_POST["nome"];
        $datnascimento = $_POST["datnascimento"];
        $areatuacao= $_POST["areatuacao"];
        $telefone = $_POST["telefone"];
        $estadosaude = $_POST["estadosaude"];
        $senha = $_POST["senha"];
        $status_pessoa = $_POST["status_pessoa"];
        $funcao = $_POST["funcao"];
        $cod = $_POST["cod"];
        $msg = false;
      
        if(isset($_FILES['arquivo'])){
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        //$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $arquivo = $nome . $extensao; //define o nome do arquivo
        $diretorio = "uploads/"; //define o diretorio para onde enviaremos o arquivo
      
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$arquivo); //efetua o upload
        
        //testa se a conexão deu certo
        if ($mysqli->connect_error) {
            //se der falha na conexão, exibe o possivel erro
            die("Falha na conexão: " . $mysqli->connect_error);
        }
    
        //define a string SQL a ser utilizada, usando as variáveis que resgataram os valores dos inputs
        $sql = "INSERT INTO genfunc VALUES ";
        $sql .= "('$username', '$nome', '$datnascimento', '$areatuacao', '$telefone', '$estadosaude', '$senha', '$status_pessoa', '$funcao', '$arquivo', '$cod')";

        //testa se não houve problemas
        if ($mysqli->query($sql) === TRUE) {
            //imprime que o registro ocorreu corretamente
            echo "Registro inserido com sucesso.";

            //mostra na tela um botão para voltar
            echo "<form method=\"POST\" action=\"incluirfunc.php\">";
            echo "<input type=\"submit\" value=\"Voltar\" name=\"voltar\">";
            echo "</form>";

        } else {
            echo "Erro na inserção: " . $mysqli->error;
        }
        }
    }elseif ($operacao=="alterar_func"){
       
        //puxa o valor dos inputs da página (inlcui)
        $username = $_POST["username"];
        $nome = $_POST["nome"];
        $datnascimento = $_POST["datnascimento"];
        $areatuacao= $_POST["areatuacao"];
        $telefone = $_POST["telefone"];
        $estadosaude = $_POST["estadosaude"];
        $senha = $_POST["senha"];
        $status_pessoa = $_POST["status_pessoa"];
        $funcao = $_POST["funcao"];
        $msg = false;
      
        if(isset($_FILES['arquivo'])){
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        //$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $arquivo = $nome . $extensao; //define o nome do arquivo
        $diretorio = "uploads/"; //define o diretorio para onde enviaremos o arquivo
      
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$arquivo); //efetua o upload
        }
        //testa se a conexão deu certo
        if ($mysqli->connect_error) {
            //se der falha na conexão, exibe o possivel erro
            die("Falha na conexão: " . $mysqli->connect_error);
        }
        //testa se a conexão deu certo
        if ($mysqli->connect_error) {
            //se der falha na conexão, exibe o possivel erro
            die("Falha na conexão: " . $mysqli->connect_error);
        }
   
        //define a string SQL a ser utilizada, usando as variáveis que resgataram os valores dos inputs
        $sql = "UPDATE genfunc SET nome='$nome',datnascimento='$datnascimento',areatuacao='$areatuacao',telefone='$telefone',estadosaude='$estadosaude',senha='$senha',status_pessoa='$status_pessoa',funcao='$funcao', arquivo='$arquivo' WHERE username= '$username'";
       
    
        //testa se não houve problemas
        if ($mysqli->query($sql) === TRUE) {
            //imprime que o registro ocorreu corretamente
            echo "Alteração salva com com sucesso.";

            //mostra na tela um botão para voltar
            echo "<form method=\"POST\" action=\"alterarfunc.php\">";
            echo "<input type=\"submit\" value=\"Voltar\" name=\"voltar\">";
            echo "</form>";

        } else {
            echo "Erro na alteração: " . $mysqli->error;
        }
    
    } elseif ($operacao=="incluirequip"){
        
        //puxa o valor dos inputs da página (inlcui)
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $quantidade = $_POST["quantidade"];
        $funcionais = $_POST["funcionais"];
        $estragados = $_POST["estragados"];


        //testa se a conexão deu certo
        if ($mysqli->connect_error) {
            //se der falha na conexão, exibe o possivel erro
            die("Falha na conexão: " . $mysqli->connect_error);
        }
    
        //define a string SQL a ser utilizada, usando as variáveis que resgataram os valores dos inputs
        $sql = "INSERT INTO geninv VALUES ";
        $sql .= "('$nome', '$descricao', '$quantidade', '$funcionais', '$estragados')";

        //testa se não houve problemas
        if ($mysqli->query($sql) === TRUE){
            //imprime que o registro ocorreu corretamente
            echo "Registro inserido com sucesso.";

            //mostra na tela um botão para voltar
            echo "<form method=\"POST\" action=\"incluirequip.php\">";
            echo "<input type=\"submit\" value=\"Voltar\" name=\"voltar\">";
            echo "</form>";

        }else {
            echo "Erro na inserção: " . $mysqli->error;
        }
    }elseif ($operacao=="alterarequip"){
       
            //puxa o valor dos inputs da página (inlcui)
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $quantidade = $_POST["quantidade"];
            $funcionais = $_POST["funcionais"];
            $estragados = $_POST["estragados"];
          
            //testa se a conexão deu certo
            if ($mysqli->connect_error) {
                //se der falha na conexão, exibe o possivel erro
                die("Falha na conexão: " . $mysqli->connect_error);
            }
            //testa se a conexão deu certo
            if ($mysqli->connect_error) {
                //se der falha na conexão, exibe o possivel erro
                die("Falha na conexão: " . $mysqli->connect_error);
            }
       
            //define a string SQL a ser utilizada, usando as variáveis que resgataram os valores dos inputs
            $sql = "UPDATE geninv SET nome='$nome', descricao='$descricao', quantidade='$quantidade',  funcionais='$funcionais', estragados='$estragados' WHERE nome= '$nome'";

            if ($mysqli->query($sql) === TRUE){
                //imprime que o registro ocorreu corretamente
                echo "Registro inserido com sucesso.";
    
                //mostra na tela um botão para voltar
                echo "<form method=\"POST\" action=\"incluirequip.php\">";
                echo "<input type=\"submit\" value=\"Voltar\" name=\"voltar\">";
                echo "</form>";
        }else {
        echo "Erro na inserção: " . $mysqli->error;
    }
    }
