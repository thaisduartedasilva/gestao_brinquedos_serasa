<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "DELETE FROM brinquedo WHERE id = $id";

mysqli_query($conexao, $sql);

hearder("Location: ../index.php");

?>