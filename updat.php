<?php
    require('trabalho.php');

    mysqli_query($conexao, "UPDATE produtos 
        SET user = 'teste.teste' WHERE id = ");

    mysqli_close($conexao);
?>
<a href="select.php">Lista</a>