<?php
include("barraNavegacao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Produto</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <form action="cadastroEndereco.php" method="post">
                <table>
                    <tr>
                        <td width="130px">
                            <img class="imagem" src="../img/logo.png" alt="imagem produto">
                        </td>
                        <td>
                            <div class="card-body">
                                <h2 class="card-title">Sorvete morango - 10 L</h2>
                                <br>
                                <label>
                                Balde de sorvete de 5 litros, sabor morango.
                                </label><br>
                                <label>
                                    <b>Ingredientes:</b>
                                    água filtrada, morango, sacarose, leite em pó 
                                    integral e gordura vegetal. Espessantes: gelatina e 
                                    goma guar. Estabilizante: monoestearato de glicerila. 
                                    Aromatizante.
                                </label><br>
                                <hr>
                                <label>
                                    <b>R$86,00</b>
                                    <b color="green">10 em estoque</b>
                                    </label><br>
                                <input type="submit" name="comprar" id="submit" value="Comprar" align="center">
                                <hr>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>