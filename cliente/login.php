<?php
include("barraNavegacao.php");
include("../conexao.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $myemail = mysqli_real_escape_string($conn, $_POST['email']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['senha']);
    $switch = mysqli_real_escape_string($conn, $_POST['senha']);

    if($switch == 0) {
        $sql = "SELECT id, senha FROM Cliente WHERE email = '$myemail'";
    }else if($switch == 1){
        $sql = "SELECT id, senha FROM  sorverteria WHERE email = '$myemail'";
    }

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($row){
        $stored_hash = $row['senha'];
        if(password_verify($mypassword, $stored_hash)){
            // Autenticação bem-sucedida
            $id = $row['id'];
            $email = $myemail;
            // Armazena os dados na sessão
            $_SESSION['usuario'] = $email;
            $_SESSION['id'] = $id;

            if($switch == 0) {
                header('Location: sorveteria/index.php');
                exit();
            }
        } else {
            $_SESSION['mensagemerro'] = "E-mail ou Senha não coincidem.";
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['mensagemerro'] = "Usuário não encontrado.";
        header('Location: login.php');
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entrar</title>
</head>
<body>
<div class="main">
    <div class="container">
        <form action="" method="post">
            <div class="container-form">
            <div class="imagem" align="center">
                <img src="../img/logo.png" height="85" width="90">
            </div>
                <h3 align="center">login</h3>
                Email:
                <br>
                <input type="email" id="email">
                <br>
                Senha:
                <br>
                <input type="password" id="senha">
                <label size="8px">Não tem conta, <a href="cadastro.php">Cadastre-se</a></label>
            </div>
                <input type="submit" name="login" id="submit" value="Entrar">
        </form>
    </div>
</div>
</body>
</html>