<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Script</title>
</head>

<body>
  <h1>Script PHP</h1>
  <?= "<p>O meu nome é Marcelo Campos1</p>" ?>
  <?php
  $name = "Marcelo Campos2";
  echo "<p>O meu nome é $name</p>";
  ?>
  <?php
  date_default_timezone_set("America/Sao_Paulo");
  echo "Hoje é dia: " . date("d/M/Y") . "</br></br>";
  echo "A Hora Atual é: " . date("G:i:s T") . "<span> UTC Time Zone</span> .</br></br>"
  ?>
  <?
  date_default_timezone_set("America/Sao_Paulo");
  echo "Hoje é dia: " . date("d/M/Y") . "</br></br>";
  echo "A Hora Atual é: " . date("G:i:s T") . "<span> UTC Time Zone</span>"
  ?>
</body>

</html>