<?php

    require_once("config.inc.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM contatos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    if($dados = mysqli_fetch_array($resultado)){
        $id = $dados['id'];
        $assunto = $dados['assunto'];
        $email = $dados['email'];
        $nome = $dados['nome'];
        $mensagem = $dados['mensagem'];
    }

?>

<h1>Alteração de Contato</h1>
<form action="?pg=contato-altera" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome</label>
    <input type="text" name="assunto" value="<?=$assunto?>"><br>
    <label>Cidade</label>
    <input type="text" name="email" value="<?=$email?>"><br>
    <label>Nome</label>
    <input type="text" name="nome" value="<?=$nome?>"><br>
    <label>Mensagem</label>
    <input type="text" name="mensagem" value="<?=$mensagem?>"><br>

    <input type="submit" value="Alterar">
</form>