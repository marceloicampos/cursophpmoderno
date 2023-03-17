<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css" />
  <title>Document</title>
</head>

<body>
  <header>
    <h1>Resultado do Processamento</h1>
    <a href="./">Voltar</a>
    <hr>
  </header>
  <main>
    <?php
    $nome = $_GET["nome"] ?? "sem nome";
    $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
    echo "Olá <strong>$nome</strong> $sobrenome";
    // var_dump($_POST);
    // var_dump($_COOKIE);
    // var_dump($_REQUEST); // junção de get, post e cookie
    ?>
  </main>
</body>

</html>