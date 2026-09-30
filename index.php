<?php

include "infra/conexao.php";
$brinquedo = mysqli_query($conexao, "SELECT * FROM brinquedo");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Brinquedos</title>
</head>

<body>
    <hearder>
        <h1>Gestão de Brinquedos</h1>
    </hearder>    
    <main>
    <h2>Brinquedos Cadastrados</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Faixa Etária</th>
            <th>Preço</th>
            <th>Quantidade no Estoque</th>
        </tr>
        <?php while ($brinquedos = mysqli_fetch_assoc($brinquedo)){ ?>
            <tr>
                <td><?php echo $brinquedos["id"] ?></td>
                <td><?php echo $brinquedos["nome"] ?></td>
                <td><?php echo $brinquedos["categoria"] ?></td>
                <td><?php echo $brinquedos["faixa_etaria"] ?></td>
                <td><?php echo $brinquedos["preco"] ?></td>
                <td><?php echo $brinquedos["quantidade"] ?></td>
                <td>
                    <a href="public/editar.php?id=<?php echo $brinquedos["id"] ?>">Editar</a>
                    <a href="public/excluir.php?id=<?php echo $brinquedos["id"] ?>">Excluir</a>
                <td>
            </tr>
        <?php } ?>
    </table>

    <h2>Cadastrar um novo Brinquedo:</h2>
    <form action="public/cadastrar.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome">
        <br>
        <label for="categoria">Categoria: </label>
        <input type="text" name="categoria">
        <br>
        <label for="faixa_etaria" class="faixa_etaria">Faixa Etária</label>
        <select name="faixa_etaria">
            <option value=faixa_etaria>Idades</option>
            <option value=6-12 meses>6-12 meses</option>
            <option value=1-3 anos>1-3 anos</option>
            <option value=3-6 anos>3-6 anos</option>
            <option value=7-10 anos>7-10 anos</option>
        </select>
        <br>
        <label for="preco">Preço: </label>
        <input type="number" name="preco">
        <br>
        <label for="quantidade">Quantidade: </label>
        <input type="number" name="quantidade">
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    </main>

</body>

</html>