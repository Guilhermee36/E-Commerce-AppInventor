<?php
    include_once('conexao.php');
    // Permite o acesso de qualquer origem
header("Access-Control-Allow-Origin: *");

// Permite métodos como GET, POST, PUT, DELETE
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

// Permite cabeçalhos personalizados
header("Access-Control-Allow-Headers: Content-Type, Authorization");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql1 = $dbcon->query("SELECT * FROM clientelogin WHERE email='$email'");

    if(mysqli_num_rows($sql1)>0){
        echo "login_ok";
    
     } else
     {
        $sql2 = $dbcon->query("INSERT INTO clientelogin(nome,email,senha) VALUES ('$nome','$email','$senha')");

        if($sql2){
            echo "registro_ok";
        }

        else{
            echo "registro_ruim";
        }
     }
?>