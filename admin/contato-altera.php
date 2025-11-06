<?php

    require_once "config.inc.php";

    $id = $_POST['id'];
    $assunto = $_POST['assunto'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $sql = "UPDATE contatos SET
            assunto = '$assunto',
            nome = '$nome',
            email = '$email',
            mensagem = '$mensagem'
            WHERE id = '$id'";


    if(mysqli_query($conexao, $sql)){
        echo "<h2>Dados atualizados com sucesso</h2>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao atualizar os dados</h2>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }
