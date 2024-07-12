<?php
require '../db.php';

$idFornecedor = $_GET['idFornecedor'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $razaoSocial = $_POST['razao_social'];
    $nomeFantasia = $_POST['nome_fantasia'];
    $cnpj = $_POST['cnpj_empresa'];
    $responsavel = $_POST['nome_responsavel'];
    $email = $_POST['email_empresa'];
    $ddd = $_POST['codigo_ddd'];
    $telefone = $_POST['telefone_empresa'];

    $errors = [];

    if (empty($razaoSocial)) {
        $errors[] = 'A Razão Social é obrigatória.';
    }

    if (empty($nomeFantasia)) {
        $errors[] = 'O Nome Fantasia é obrigatório.';
    }

    if (empty($cnpj)) {
        $errors[] = 'O CNPJ é obrigatório.';
    }

    if (empty($responsavel)) {
        $errors[] = 'O Responsável é obrigatório.';
    }

    if (empty($email)) {
        $errors[] = 'O Email é obrigatório.';
    }

    if (empty($ddd)) {
        $errors[] = 'O DDD é obrigatório.';
    }

    if (empty($telefone)) {
        $errors[] = 'O Telefone é obrigatório.';
    }

    if (empty($errors)) {
        $sql = "UPDATE prova_substitutiva SET razaoSocial = :razaoSocial, nomeFantasia = :nomeFantasia, cnpj = :cnpj, responsavel = :responsavel, email = :email, ddd = :ddd, telefone = :telefone WHERE idFornecedor = :idFornecedor";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':razaoSocial', $razaoSocial);
        $stmt->bindParam(':nomeFantasia', $nomeFantasia);
        $stmt->bindParam(':cnpj', $cnpj);
        $stmt->bindParam(':responsavel', $responsavel);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':ddd', $ddd);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':idFornecedor', $idFornecedor);
        $stmt->execute();

        header('Location: ../views/index.php');
        exit();
    } else {
        session_start();
        $_SESSION['errors'] = $errors;
        header('Location: ../views/update.php?id=' . $idFornecedor);
        exit();
    }
} else {
    $sql = "SELECT * FROM prova_substitutiva WHERE idFornecedor = :idFornecedor";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idFornecedor', $idFornecedor);
    $stmt->execute();
    $ProvaSubstitutiva = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$ProvaSubstitutiva) {
        die('Empresa não encontrada');
    }

    return $ProvaSubstitutiva;
}
