<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <div>
            <main>
                <?php
                $numero = $_GET["numero"] ?? " ";
                $sucessor = $numero + 1;
                $antecessor = $numero - 1;
                echo "<p>O número escolhido foi $numero<p>" . "<p>O seu antecessor é $antecessor<p>" . "O seu sucessor é $sucessor";
                ?>
                <p><a href="javascript:history.go(-1)">Voltar à página anterior</a></p>
            </main>
        </div>
    </section>
</body>

</html>