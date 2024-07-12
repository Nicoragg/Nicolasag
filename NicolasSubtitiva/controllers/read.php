<?php

require '../db.php';

$sql = "SELECT * FROM prova_substitutiva";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$ProvaSubstitutiva = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $ProvaSubstitutiva;
