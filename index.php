<?php

 include "infra/conexao.php";
 $usuarios = mysqli_query($conexao, "SELECT * FROM usuarios");
 $pets = mysqli_query($conexao, "SELECT * FROM pets");
 
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
    <button><a href="public/paginaUsu.php">Adicionar Usuário</a></button>
    <button><a href="public/paginaPet.php">Adicionar Pet</a></button>
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
                            <a href="public/editarUsu.php?id=<?php echo $usuario["id"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $usuario["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div>
            <h2>pets:</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Especie</th>
                    <th>Raca</th>
                    <th>Idade</th>
                    <th>dono</th>
                    <th>Ações</th>
                </tr>
                <?php while ($pet = mysqli_fetch_assoc($pets)) { ?>
                    <tr>
                        <td><?php echo $pet["id"] ?></td>
                        <td><?php echo $pet["nome"] ?></td>
                        <td><?php echo $pet["especie"] ?></td>
                        <td><?php echo $pet["raca"] ?></td>
                        <td><?php echo $pet["idade"] ?></td>
                        <td><?php echo $pet["usuario_id"] ?></td>
                        <td>
                            <a href="public/editarPet.php?id=<?php echo $pet["id"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $pet["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </main>
</body>