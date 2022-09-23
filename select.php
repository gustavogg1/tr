<table border="1">
    <tr>
        <td>id</td>
        <td>descricao</td>
        <td>marca</td>
        <td>estoque</td>
        <td>preco</td>
    </tr>
<?php
    require('trabalho.php');

    $retorno = mysqli_query($conexao, "SELECT * FROM produtos");

    while($produtos = mysqli_fetch_assoc($retorno))
    {
        echo '<tr>';
        echo '<td>'.$produtos['id'].'</td>';
        echo '<td>'.$produtos['descricao'].'</td>';
        echo '<td>'.$produtos['marca'].'</td>';
        echo '<td>'.$produtos['estoque'].'</td>';
        echo '<td>'.$produtos['preco'].'</td>';
        echo '<td><a href="delete.php?id='.$produtos['id'].'">Excluir</a></td>';
        echo '</tr>';
    }

    mysqli_close($conexao);
?>
</table>
