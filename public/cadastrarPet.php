<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$especie = $_POST["especie"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$usurio_id = $_POST["usurio_id"];

$sql = "INSERT INTO pets (nome,especie,raca,idade,usuario_id) VALUES ('$nome','$especie','$raca','$idade','$usurio_id')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>