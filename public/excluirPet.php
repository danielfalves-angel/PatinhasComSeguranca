<?php
include "../infra/conexao.php";
$id = $_GET["id"];
$sql = "DELETE FROM pets WHERE id=$id";
mysqli_query($conexao,$sql);
header("Location: ../index.php");
?>