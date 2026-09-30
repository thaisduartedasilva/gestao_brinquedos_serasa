<?php

include(.../index.php);

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$faixa_etaria = $_POST["faixa_etaria"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

$sql = "INSERT INTO brinquedo (nome, categoria, faixa_etaria, preco, quantidade) VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssii", $nome, $categoria, $faixa_etaria, $preco, $quantidade);

mysqli_stmt_execute($stmt);

header("Location: .../index.php");

?>