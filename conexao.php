
<?php

// Permite o acesso de qualquer origem
header("Access-Control-Allow-Origin: *");

// Permite métodos como GET, POST, PUT, DELETE
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

// Permite cabeçalhos personalizados
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$host = "ec2-3-95-183-44.compute-1.amazonaws.com";
$usuario = "brabos";
$senha = "root";
$banco = "appiventor";

$dbcon = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($dbcon->connect_error) {
    die("Falha na conexão: " . $dbcon->connect_error);
} else {
    echo "Conexão com o banco de dados bem-sucedida!";
}

$dbcon->set_charset("utf-8");