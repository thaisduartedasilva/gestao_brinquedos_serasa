<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM brinquedo WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);
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
    </header>
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
            <select name="faixa_etaria">
                <option value="">Idades</option>
                <option value="6-12 meses">6-12 meses</option>
                <option value="1-3 anos">1-3 anos</option>
                <option value="3-6 anos">3-6 anos</option>
                <option value="7-10 anos">7-10 anos</option>
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