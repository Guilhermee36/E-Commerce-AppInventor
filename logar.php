<?php
include_once 'conexao.php';

$senha_cliente=$_POST['senha'];
$email_cliente=$_POST['email'];

$sql = $dbcon->query("SELECT * FROM tb_cliente WHERE email_cliente='$email_cliente' AND senha_cliente='$senha_cliente';");

if (mysqli_num_rows($sql) > 0) {
    echo "oi";
    echo "tamojunto";
} else {
    echo "login_erro";
}
