

<?php
    require('trabalho.php');

    $nome    = $_POST['descricao'];
    $email   = $_POST['marca'];
    $usuario = $_POST['estoque'];
    $senha   = $_POST['preco'];

    $resultado = mysqli_query($conexao, "INSERT INTO produtos (id, descricao, marca, estoque, preco) 
    VALUES (NULL, '$descricao', '$marca', '$estoque', '$preco')");

    mysqli_close($conexao);
?>
<a href="select.php">Lista</a>