<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exemplo de Popup de Confirmação</title>
</head>
<body>

<script>
    function exibirPopup() {
        var confirmacao = confirm("Tem certeza de que deseja sair?");
        if (confirmacao) {
            window.location.href = "index.html";
        } else {
        }
    }
    window.addEventListener('load', exibirPopup);
</script>

<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: index.html");
?>

</body>
</html>