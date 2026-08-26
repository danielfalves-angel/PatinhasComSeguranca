<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "UPDATE usuarios SET nome='$nome',email='$email',senha='$senha' WHERE id = '$id'";

mysqli_query($conexao, $sql);
header("Location: ../index.php");