<?php
session_start();
include("../conexao.php");


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cadastro2"])) {
  $nomeCompleto = $_POST["nomeCompleto"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $senha = $_POST["senha"];
  $senhaConfirma = $_POST["senhaConfirma"];
  $endereco = $_POST["endereco"];
  $bairro = $_POST["bairro"];
  $cidade = $_POST["cidade"];
  $numero = $_POST["numero"];
  $complemento = $_POST["complemento"];

  if ($senha == $senhaConfirma) {
    $sql = "INSERT INTO endereco (rua, bairro, cidade, numero, complemento)
                VALUES ('$endereco', '$bairro', '$cidade ', '$numero', '$complemento')";

    if ($conn->query($sql) === TRUE) {

      $enderecoID = $conn->insert_id;

      $sql2 = "INSERT INTO cliente (nome_completo, email, telefone, senha, endereco)
                VALUES ('$nomeCompleto', '$email', '$telefone ', '$senha', '$enderecoID')";

      if ($conn->query($sql2) === TRUE) {
          $_SESSION['mensagem'] = 'Cadastro cliente realizado com sucesso!';
          header('Location: login.php');
          exit();
      }
    } else {
      echo '<div>Erro: '.$sql.'<br>'.$conn->error.'</div>';
    }
  } else {
    $_SESSION['erro'] = 'As senhas não conferem!';
  }

  $conn->close();

}

?>