<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$usuario =mysqli_fetch_assoc($resultado);

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
        <h2>Editar Usuário</h2>
        <form action="atualizarUsu.php" method="POST">
            <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= $usuario['email'] ?>" required>
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" value="<?= $usuario['senha'] ?>" required>
            <br>
            <button type="submit">Atualizar</button>
        </form>
    </div>
    </main>
</body>