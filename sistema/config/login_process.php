<?php
session_start(); // Inicia a sessão

// Incluir a conexão com o banco de dados
include('conexao.php');

// Verificar se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validar os campos
    if (empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Preparar e executar a consulta SQL
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        // Verificar se o usuário existe
        if ($stmt->rowCount() > 0) {
            // Buscar os dados do usuário
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verificar a senha
            if (password_verify($senha, $usuario['senha'])) {
                // Se a senha estiver correta, armazenar os dados na sessão
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_email'] = $usuario['email'];

                // Redirecionar para a página de sucesso (ex: painel de controle)
                header('Location: painel.php');
                exit();
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }
    }
}
?>