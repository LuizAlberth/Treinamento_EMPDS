<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <header>
            <h1>Resultado do processamento</h1>
        </header>

        <main>
            <?php
            $nome = $_GET["nome"] ?? "";
            $sobrenome = $_GET["sobrenome"] ?? "";

            if (empty($nome)) $nome = "Indivíduo desprovido de nome kkkk";
            if (empty($sobrenome)) $sobrenome = " e sem sobrenome";

            echo "<p>É um prazer te conhecer, $nome $sobrenome!</p>"
            ?>
            <p><a href="javascript:history.go(-1)">Voltar à página anterior</a></p>
        </main>
    </section>
</body>

</html>