<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "gestao_brinquedos";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_erro){
    die("Erro na conexão: ") . $conexao->connect_erro;
};

$conexao->set_charset("utf8mb4");

?>