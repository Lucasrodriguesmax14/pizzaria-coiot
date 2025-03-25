<?php
// Dados de conexão
$host = 'localhost'; // ou o seu host, pode ser '127.0.0.1' ou o IP do servidor
$dbname = 'pizzaria_coiot';
$username = 'root'; // nome de usuário do seu banco de dados
$password = ''; // senha do seu banco de dados, caso exista

try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>