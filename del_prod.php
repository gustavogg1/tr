<?php 
    require('trabalho.php');
    $id = $_GET['id'];

    mysqli_query($conexao, "DELETE FROM produtos WHERE id = $id");

    mysqli_close($conexao);
?>
<a href="select.php">Lista</a>