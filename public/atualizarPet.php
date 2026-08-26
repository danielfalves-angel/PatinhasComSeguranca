<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$especie = $_POST["especie"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$usuario_id = $_POST["usuario_id"];

$sql = "UPDATE pets SET nome='$nome',especie='$especie',raca='$raca',idade='$idade',usuario_id='$usuario_id' WHERE id = '$id'";

mysqli_query($conexao, $sql);
header("Location: ../index.php");