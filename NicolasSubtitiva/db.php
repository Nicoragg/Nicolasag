<?php
$host = 'localhost';
$database = 'php';
$user = 'root';
$password = '211013';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
} catch (PDOException $e) {
    die("Não foi possível conectar ao $database");
}
?>