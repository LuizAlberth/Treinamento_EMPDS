<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <header>Conversor de Moedas</header>

        <div>
            <?php
            $reais = $_GET["reais"] ?? 0;
            $cotacao = 5.31;
            if ($reais > 0) {
                $convertido = $reais / $cotacao;
                $padrao_br = number_format($reais, 2, ",", ".");
                $padrao_us = number_format($convertido, 2, ".", ",");
                echo "<p>Seus R$ $padrao_br equivalem a <strong>US$ $padrao_us</strong>.</p>";
            } else {
                echo "<p>Por favor, informe um valor válido para conversão.</p>";
            }
            ?>

            <p><a href="javascript:history.go(-1)">Voltar à página anterior</a></p>

        </div>


    </section>

</body>

</html>