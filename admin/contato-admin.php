<?php

    require_once 'config.inc.php';

    echo "<h2>Clientes</h2>";
?>
<a href="/faleconosco.php">Cadastrar novo contato</a>

<?php
    $sql = "SELECT * FROM contatos";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "<hr>";
            echo "Id: ".$dados['id'];
            echo " | Assunto: ".$dados['assunto'];
            echo " | Email: ".$dados['email'];
            echo " | Nome: ".$dados['nome'];
            echo " | Mensagem: ".$dados['mensagem'];
            echo " | <a href='?pg=contato-form-altera&id=$dados[id]'>Editar</a>";
            echo " | <a href='?pg=contato-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "Nenhum contato cadastrado!";
    }

    mysqli_close($conexao);

?>


