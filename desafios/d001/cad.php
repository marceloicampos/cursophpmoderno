<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>Desafios em PHP</title>
</head>

<body>
    <header>
        <h1>Resultado do Desafio 01</h1>
    </header>
    <main>
        <h1>Resultado Final</h1>
        <?php
        $num = $_GET["numero"] ?? "Número não digitado";
        $ant = $num - 1;
        $suc = $num + 1;
        echo "O número escolhido é: <strong>$num</strong></br>";
        echo "O seu <em>Antecessor</em> é: $ant</br>";
        echo "O seu <em>Sucessor</em> é: $suc";
        ?>
        <a href="./"><button type="submit"><strong>&#x2B05;</strong> Voltar</button></a>
    </main>
</body>

</html>