<?php
include("barraNavegacao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Endereço</title>
</head>
<body>
<div class="main">
    <div class="container">
        <form action="cadastroEndereco.php" method="post">
            <div class="container-form">
            <div class="imagem" align="center">
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