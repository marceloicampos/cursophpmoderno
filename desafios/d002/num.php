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
        <h1>Resultado do Desafio 02</h1>
    </header>
    <main>
        <h1>Resultado Final</h1>
        <?php
        $min = 1;
        $max = 1000;
        $rand = mt_rand($min, $max);
        echo "O número escolhido é: <strong>$rand</strong></br>";
        ?>
        <a href="./"><button type="submit"><strong>&#x2B05;</strong> Voltar</button></a>
    </main>
</body>

</html>