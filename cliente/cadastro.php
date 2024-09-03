<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../style.css"></link>
</head>
<body>
    <div class="main">
     <div class="container_back">
        <form action="cadastroEndereco.php" method="post">
            <div class="container_form">
            <div class="container_img">
                <img src="../img/logo.png" height="85" width="90">
            </div>
                <h3 align="center">Cadastre-se</h3>
                Nome completo:
                <br>
                <input type="text" name="nomeCompleto">
                <br>
                Email:
                <br>
                <input type="email" name="email">
                <br>
                Telefone:
                <br>
                <input type="tel" name="telefone">
                <br>
                Senha:
                <br>
                <input type="password" name="senha">
                <br>
                Confirmar Senha:
                <br>
                <input type="password" name="senhaConfirma">
                <br>
                <label size="8px">Já possui conta? <a href="login.php">Entrar</a></label>
            </div>
                <input type="submit" name="cadastro" id="submit" value="Próximo" align="center">
        </form>
     </div>
    </div>
</body>
</html>