<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM pets WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$pet =mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Patinhas com Segurança</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - Patinhas com Segurança</h1>
    </header>
    
    <main>
    <div class="caixa">
        <h2>Editar Pet</h2>
        <form action="atualizarPet.php" method="POST">
            <input type="hidden" name="id" value="<?= $pet['id'] ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?= $pet['nome'] ?>" required>
            <br>
            <label for="especie">Espécie:</label>
            <input type="text" name="especie" value="<?= $pet['especie'] ?>" required>
            <br>
            <label for="raca">Raça:</label>
            <input type="text" name="raca" value="<?= $pet['raca'] ?>" required>
            <br>
            <label for="idade">Idade:</label>
            <input type="number" name="idade" value="<?= $pet['idade'] ?>" required>
            <br>
            <label for="usuario_id">ID do Usuário:</label>
            <input type="number" name="usuario_id" value="<?= $pet['usuario_id'] ?>" required>
            <br>
            <button type="submit">Atualizar</button>
        </form>
    </div>
    </main>
</body>