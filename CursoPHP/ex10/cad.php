<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <header>Analisador de Números Reais</header>

        <div>
            <?php
            $entrada = $_GET["numero"] ?? "0";
            $numero_ajustado = str_replace(",", ".", $entrada);
            $numero = (float)$numero_ajustado;
            $inteiro = (int)$numero;
            $fracao = $numero - $inteiro;

            echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário:</p>";
            echo "<li>A parte inteira do número é: <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></li>";
            echo "<li>A parte fracionária do número é: <strong>" . number_format($fracao, 3, ",", ".") . "</strong></li>";
            ?>

        </div>

    </section>

</body>

</html>