<?php

    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM clientes WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<h2>Registro excluído com sucesso.</h2>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao excluir registro.</h2>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }
