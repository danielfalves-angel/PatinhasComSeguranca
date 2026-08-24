<?php

 include "../infra/conexao.php";
 $usuarios = mysqli_query($conexao, "SELECT * FROM usuarios");
 
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
        <h2>Adicione um usuário</h2>
        <form action="cadastrarUsu.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
            <br>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
    </main>
</body>