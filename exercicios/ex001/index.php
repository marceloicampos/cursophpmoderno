<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Info and Version</title>
</head>

<body>
  <h1>Hello World !
    <?php
    echo "\u{1F30E}";
    ?>
  </h1>
  <h2>
    <?php
    echo "Oi Marcelo" . "&nbsp;";
    print "Campos" . "&nbsp;" . "&#x1F30E";
    ?>
  </h2>
  <p>Meu primeiro PHP Code</p>
  <?php
  echo "PHP Version: " . phpversion() . "<br />";
  phpinfo();
  ?>
</body>