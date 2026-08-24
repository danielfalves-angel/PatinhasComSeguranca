<?php

 include "../infra/conexao.php";
 $pets = mysqli_query($conexao, "SELECT * FROM pets");
 
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
        <h2>Adicione um pet</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
            <br>
            <label for="especie">Espécie:</label>
            <input type="text" name="especie" required>
            <br>
            <label for="raca">Raça:</label>
            <input type="text" name="raca" required>
            <br>
            <label for="idade">Idade:</label>
            <input type="number" name="idade" required>
            <br>
            <label for="usuario_id">ID do Usuário:</label>
            <input type="number" name="usuario_id" required>
            <br>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
    </main>
</body>