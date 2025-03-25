<?php
// Conectar ao banco
include('conexao.php');

// Dados do usuário
$email = 'pizzaria coiot';
$senha = 'senha_segura';

// Hash da senha
$senha_hash = password_hash($senha, PASSWORD_BCRYPT);

// Inserir o usuário no banco de dados
$sql = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':senha', $senha_hash, PDO::PARAM_STR);
$stmt->execute();

echo "Usuário criado com sucesso!";
?>