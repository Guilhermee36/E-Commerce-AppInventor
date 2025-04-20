<?php
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql1 = $dbcon->query("SELECT * FROM tb_cliente WHERE email_cliente='$email'");

    if(mysqli_num_rows($sql1)>0){
        echo "login_ok";
    
     } else
     {
        $sql2 = $dbcon->query("INSERT INTO tb_cliente(nome_cliente,email_cliente,senha_cliente) VALUES ('$nome','$email','$senha')");

        if($sql2){
            echo "registro_ok";
        }

        else{
            echo "registro_ruim";
        }
     }
?>