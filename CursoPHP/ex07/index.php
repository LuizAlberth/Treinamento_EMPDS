<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador Aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <header>Trabalhando com números aleatórios</header>
        <div>
            <p>Gerando um número aleatório entre 0 e 100...</p>
            <?php
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);

            echo "<p>O valor gerado foi <strong>$num</strong></p>";
            ?>
            <button onclick="javascript:document.location.reload()">Gerar outro</button>
        </div>
    </section>

</body>

</html>