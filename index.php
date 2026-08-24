<?php

 include "infra/conexao.php";
 $usuarios = mysqli_query($conexao, "SELECT * FROM usuarios");
 $pet = mysqli_query($conexao, "SELECT * FROM pet");
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Patinhas com Segurança</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - Patinhas com Segurança</h1>
    </header>
    
    <main>
        <div>
            <h2>Clientes:</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
                <?php while ($usuario = mysqli_fetch_assoc($usuarios)) { ?>
                    <tr>
                        <td><?php echo $usuario["id"] ?></td>
                        <td><?php echo $usuario["nome"] ?></td>
                        <td><?php echo $usuario["email"] ?></td>
                        <td>
                            <a href="public/editar.php?id=<?php echo $usuario["id"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $usuario["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </main>
</body>