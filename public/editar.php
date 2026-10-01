<?php

include "../infra/conxao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM brinquedo WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
$brinquedos = mysqli_fetch_assoc($resultado);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar brinquedo</title>
</head>

<body>
    <header>
        <h1>Editar Brinquedo</h1>
    </herader>
    <main>
        <form action = "atualizar.php" method = "POST">
            <input type = "hidden" name = "id" value = "<?php echo $brinquedos["id"]?>">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" value="<?php echo $brinquedos["nome"]?>">
            <br>
            <label for="categoria">Categoria: </label>
            <input type="text" name="categoria" value="<?php echo $brinquedos["categoria"]?>">
            <br>
            <label for="faixa_etaria">Faixa Etária: </label>
            <select name="faixa_etaria" value="<?php echo $brinquedos["faixa_etaria"]?>">
                <option value=faixa_etaria>Idades</option>
                <option value=6-12 meses>6-12 meses</option>
                <option value=1-3 anos>1-3 anos</option>
                <option value=3-6 anos>3-6 anos</option>
                <option value=7-10 anos>7-10 anos</option>
            </select>
            <br>
            <label for="preco">Preco: </label>
            <input type="number" name="preco" value="<?php echo $brinquedos["preco"]?>">
            <br>
            <label for="quantidade">Quantidade no Estoque: </label>
            <input type="number" name="quantidade" value="<?php echo $brinquedos["quantidade"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>
    </main>
</body>

</html>