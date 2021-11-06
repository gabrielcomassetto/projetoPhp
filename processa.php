<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];
$tel = $_POST['tel'];
$senha = $_POST['senha'];

$sql = "insert into serviços(nome,email,profissao,tel,senha) values ('$nome','$email','$profissao','$tel','$senha')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmaçao</title>
</head>
<style>
    body {
        height: 100vh;
        background: linear-gradient(120deg, #0245a8, #a85100);
    }

    h1 {
        justify-content: center;
        align-items: center;
        color: white;
        font-family: sans-serif;
        margin-left: auto;
        margin-right: auto;
        width: 16em;
    }

    p a {
        font-family: sans-serif;
        color: white;
        align-items: center;
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
        width: 2em;
    }

    a:hover {
        color: rgb(255, 153, 0);
        transition: 200ms;
    }
</style>

<body>
    <?php
    if ($linhas == 1) {
        print "<h1>Cadastro realizado com sucesso!</h1>";
    } else {
        print "<h1>Esse email ja esta em uso!</h1>";
    }
    ?>

    <p><a href="index.php">Ir para pagina principal.</a></p>
</body>

</html>