<?php
require '../db.php';

$idFornecedor = $_GET['idFornecedor'];

$sql = "DELETE FROM prova_substitutiva WHERE idFornecedor = :idFornecedor";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':idFornecedor', $idFornecedor, PDO::PARAM_INT);
$stmt->execute();

header('Location: ../views/index.php');
exit();
?>
