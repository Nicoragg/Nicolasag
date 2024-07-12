<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Editar</h1>
        </header>
        <?php
        require '../controllers/updateController.php';
        $ProvaSubstitutiva = require '../controllers/updateController.php';
        session_start();
        if (isset($_SESSION['errors'])) {
            echo '<ul>';
            foreach ($_SESSION['errors'] as $error) {
                echo '<li>' . htmlspecialchars($error) . '</li>';
            }
            echo '</ul>';
            unset($_SESSION['errors']);
        }
        ?>
        <form
            action="../controllers/update.php?idFornecedor=<?= htmlspecialchars($ProvaSubstitutiva['idFornecedor']) ?>"
            method="post">
            <label for="razaoSocial">Razão Social:</label>
            <input type="text" id="razaoSocial" name="razao_social" value="<?= htmlspecialchars($ProvaSubstitutiva['razaoSocial']) ?>">
            
            <label for="nomeFantasia">Nome Fantasia:</label>
            <input type="text" id="nomeFantasia" name="nome_fantasia" value="<?= htmlspecialchars($ProvaSubstitutiva['nomeFantasia']) ?>">
            
            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj_empresa" value="<?= htmlspecialchars($ProvaSubstitutiva['cnpj']) ?>"
                placeholder="CNPJ">
            
            <label for="responsavel">Responsável:</label>
            <input type="text" id="responsavel" name="nome_responsavel" value="<?= htmlspecialchars($ProvaSubstitutiva['responsavel']) ?>">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email_empresa" value="<?= htmlspecialchars($ProvaSubstitutiva['email']) ?>"
                placeholder="Email">
            
            <label for="ddd">DDD:</label>
            <input type="text" id="ddd" name="codigo_ddd" value="<?= htmlspecialchars($ProvaSubstitutiva['ddd']) ?>"
                placeholder="DDD">
            
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone_empresa" value="<?= htmlspecialchars($ProvaSubstitutiva['telefone']) ?>"
                placeholder="Telefone">
            
            <input type="submit" value="Atualizar">
        </form>
    </div>
    <footer>
        <h3>Prova Substitutiva</h3>
    </footer>
</body>

</html>
