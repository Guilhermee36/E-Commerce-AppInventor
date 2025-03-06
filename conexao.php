
<?php

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