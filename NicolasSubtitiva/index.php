<?php
require '../controllers/read.php';
$ProvaSubstitutiva = require '../controllers/read.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
        <header>
            <h1>Lista</h1>
            <nav>
                <ul>
                    <li><a href="create.php">Cadastrar</a></li>
                </ul>
            </nav>
        </header>
        <table>
            <thead>
                <tr>
                    <th>ID Fornecedor</th>
                    <th>Razão Social</th>
                    <th>Nome Fantasia</th>
                    <th>CNPJ</th>
                    <th>Responsável</th>
                    <th>E-mail</th>
                    <th>DDD</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ProvaSubstitutiva as $ProvaSubstitutiv): ?>
                <tr>
                    <td><?= htmlspecialchars($ProvaSubstitutiva['idFornecedor']) ?></td>
                    <td><?= htmlspecialchars($ProvaSubstitutiva['razaoSocial']) ?></td>
                    <td><?= htmlspecialchars($ProvaSubstitutiva['nomeFantasia']) ?></td>
                    <td><?= htmlspecialchars($ProvaSubstitutiva['cnpj']) ?></td>
                    <td><?= htmlspecialchars($ProvaSubstitutiva['responsavel']) ?></td>
                    <td><?= htmlspecialchars($ProvaSubstitutiva['email']) ?></td>
                    <td><?= htmlspecialchars($ProvaSubstitutiva['ddd']) ?></td>
                    <td><?= htmlspecialchars($ProvaSubstitutiva['telefone']) ?></td>
                    <td>
                        <a href="update.php?idFornecedor=<?= htmlspecialchars($ProvaSubstitutiva['idFornecedor']) ?>">Editar</a>
                        <a href="../controllers/delete.php?idFornecedor=<?= htmlspecialchars($ProvaSubstitutiva['idFornecedor']) ?>">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <footer>
        <h3> Prova Substitutiva</h3>
    </footer>
</body>

</html>
