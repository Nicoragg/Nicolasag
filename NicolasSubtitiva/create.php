<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div>
        <header>
            <h1>Cadastrar Empresa</h1>
        </header>
        <?php
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
        <form action="../controllers/create.php" method="post">
            <label for="razaoSocial">Razão Social:</label>
            <input type="text" id="razaoSocial" name="razao_social" placeholder="Razão Social">
            
            <label for="nomeFantasia">Nome Fantasia:</label>
            <input type="text" id="nomeFantasia" name="nome_fantasia" placeholder="Nome Fantasia">
            
            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj_empresa" pattern="\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}" placeholder="12.345.678/0001-99">
            
            <label for="responsavel">Responsável:</label>
            <input type="text" id="responsavel" name="nome_responsavel" placeholder="Responsável">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email_empresa" placeholder="Email">
            
            <label for="ddd">DDD:</label>
            <input type="text" id="ddd" name="codigo_ddd" pattern="\d{3}" placeholder="123">
            
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone_empresa" pattern="\d{5}-\d{4}" placeholder="12345-6789">
            
            <input type="submit" value="Cadastrar">
        </form>
    </div>
    <footer>
        <h3>Prova Substitutiva</h3>
    </footer>
</body>

</html>
