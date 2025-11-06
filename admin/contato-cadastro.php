<?php

    require_once 'config.inc.php';

    $assunto = $_REQUEST['assunto'];
    $email = $_REQUEST['email'];
    $nome = $_REQUEST['nome'];
    $mensagem = $_REQUEST['mensagem'];

    $sql = "INSERT INTO contatos (assunto, email, nome, mensagem) 
            VALUES ('$assunto','$email','$nome','$mensagem')";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Contato realizado com sucesso</h2>";
    }else{
        echo "<h2>Erro ao fazer contato</h2>";
    }

    mysqli_close($conexao);

