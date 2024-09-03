<?php
session_start();
include("../conexao.php");


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cadastro"])) {
  $nomeCompleto = $_POST["nomeCompleto"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $senha = $_POST["senha"];
  $senhaConfirma = $_POST["senhaConfirma"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Endereço</title>
    <link rel="stylesheet" href="../style.css"></link>
</head>
<body>
    <div class="main">
     <div class="container_back">
        <form action="finalizarCadastro.php" method="post">
        <input type="hidden" value="<?=$nomeCompleto?>" name="nomeCompleto">
        <input type="hidden" value="<?=$email?>" name="email">
        <input type="hidden" value="<?=$telefone?>" name="telefone">
        <input type="hidden" value="<?=$senha?>" name="senha">
        <input type="hidden" value="<?=$senhaConfirma?>" name="senhaConfirma">
            <div class="container_form">
            <div class="container_img">
                <img src="../img/logo.png" height="85" width="90">
            </div>
                <h3 align="center">Cadastre-se</h3>
                Endereço:
                <br>
                <input type="text" name="endereco">
                <br>
                Bairro:
                <br>
                <input type="text" name="bairro">
                <br>
                Cidade:
                <br>
                <input type="text" name="cidade">
                <br>
                Número:
                <br>
                <input type="number" name="numero">
                <br>
                Complemento:
                <br>
                <input type="text" name="complemento">
                <br>
                <label size="8px">Já possui conta? <a href="login.php">Entrar</a></label>
            </div>
                <input type="submit" name="cadastro2" id="submit" value="Finalizar cadastro" align="center">
        </form>
     </div>
    </div>
</body>
</html>