<?php
include_once 'conexao.php'; // Inclui o arquivo de conexão

// Captura e sanitiza os dados recebidos via POST
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$senha = isset($_POST['senha']) ? trim($_POST['senha']) : '';

// Prepara a consulta para evitar SQL Injection
$sql = $dbcon->prepare("SELECT * FROM clientelogin WHERE email=? AND senha=?");
$sql->bind_param("ss", $email, $senha);
$sql->execute();
$result = $sql->get_result();

// Verifica se encontrou um usuário com os dados informados
if ($result->num_rows > 0) {
    echo str_replace(["\r", "\n"], '', "login_ok");
} else {
    echo str_replace(["\r", "\n"], '', "login_erro");
}
?>