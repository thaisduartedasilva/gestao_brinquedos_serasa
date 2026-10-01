<?php 

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$faixa_etaria = $_POST["faixa_etaria"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

$sql = "UPDATE brinquedo SET nome = ?, categoria = ?, faixa_etaria = ?, preco = ?, quantidade = ? WHERE id = ?";
$stmt = $conexao->prepare($sql);

$stmt->bind_param("sssidi", $nome, $categoria, $faixa_etaria, $preco, $quantidade, $id);

$stmt->execute();

header("Location: ../index.php");
exit;

?>