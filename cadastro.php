<?php
    include ("conexao.php");

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];
    $email = $_POST['email'];
    $telefone = $_POST['tel'];

    if ($senha <> $conf_senha){
        echo "As senhas não coincidem.";
    } else 
        echo "Cadastro realizado.";

    $sql = "INSERT INTO cadastro(usuario_cadastro, senha_cadastro, email_cadastro, telefone_cadastro)
            VALUES ('$usuario', '$senha', '$email', '$telefone')";

    if (mysqli_query($mysqli, $sql)) {
        header('Location:login.html');
    } else {
        echo "houve um erro";
    }   
?>