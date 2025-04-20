<?php

$host = "54.211.83.87";
$usuario = "root";
$senha = "root";
$banco = "appinventor";
$dbcon = new mysqli($host, $usuario, $senha, $banco);

if ($dbcon->connect_error) {
    die("Falha na conexão: " . $dbcon->connect_error);
} else {
    echo "Conexão com o banco de dados bem-sucedida!";
}