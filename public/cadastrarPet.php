<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$especie = $_POST["especie"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$usuario_id = $_POST["usuario_id"];

$sql = "INSERT INTO pets (nome,especie,raca,idade,usuario_id) VALUES ('$nome','$especie','$raca','$idade','$usuario_id')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>