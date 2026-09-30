<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "DELETE FROM brinquedo WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

mysqli_stmt_execute($stmt);

hearder("Location: ../index.php");

?>