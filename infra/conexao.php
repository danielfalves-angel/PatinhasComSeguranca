<?php
$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "patinhasSegurança";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
};

?>