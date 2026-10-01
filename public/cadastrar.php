<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$faixa_etaria = $_POST["faixa_etaria"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

$sql = "INSERT INTO brinquedo (nome, categoria, faixa_etaria, preco, quantidade) VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "sssdi", $nome, $categoria, $faixa_etaria, $preco, $quantidade);

mysqli_stmt_execute($stmt);

header("Location: ../index.php");

?>