<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php
    $nome = "Rafael"; // string
    $sobrenome = "Campos"; // string
    $nome = "Marcelo"; // string
    $_peso = 95.8; // float, double
    $_0idade = 43; // int, integer
    $casado = true; // bool, boolean
    $hexadecimal = 0x1A; // int
    $float = 3e2; // float, nesse casso 10 elevado 2 x 3 = 300
    const PAIS = "Brasileiro";
    const CURSO = "PHP";
    const ID_ALUNO = 1433;
    const INSCRITO = TRUE;
    // aceita-se acentuação e caracteres especiais, mas melhor não usar. Não pode usar também palavras reservadas como o this
    // a const não mudam seu valor, pois são constantes
    // variáveis em minúsculas
    // constante em MAIÚSCULAS
    // SNAKE_CASE para constantes
    // camelCase para métodos, atributos
    echo "Oi sou, $nome $sobrenome ! Sou " . PAIS . " ! " .  "Meu peso é: $_peso, minha idade é $_0idade." . " Casado = " . $casado;
    ?>
    </br>
    <?php
    $num = 300;
    $numHexa = 0x1A;
    $numBin = 0b1011;
    $numOctal = 010;
    echo "O valor da variável é $num </br>";
    echo 'O valor da variável é $num </br>';
    echo "O valor da variável é $numHexa </br>";
    echo "O valor da variável é $numBin </br>";
    echo "O valor da variável é $numOctal </br>";
    echo "PHP\u{1F418}</br>"; // as aspas Duplas faz a interpretação do que está dentro das aspas, se aspas Simples não há interpretação
    echo "Estamos no no ano de " . date('Y') . "</br>";
    $nom = "Rodrigo";
    $sNom = "Nogueira";
    echo "$nom" . " Minotauro " . "$sNom </br>";
    $v1 = 400;
    var_dump($v1); // com var_dump podemos verificar o tipo da variável
    $v2 = (int) 5e2; // nesse caso estamos forçando o tipo por coerção ou cast de tipo
    var_dump($v2);
    $solteiro = false;
    var_dump($solteiro);
    // VARIÁVEIS COMPOSTAS == array e object
    // VARIÁVEIS ESPECIAIS == null, resource, callabLe, mixed
    echo "</br>";
    $vetArray = [0, "duda", 2, false, 4.5];
    var_dump($vetArray);
    echo "</br>";
    class Person
    {
        private string $name;
        function make_person()
        {
            $varname = "Duda ";
            echo $varname;
        }
    }
    $p = new Person;
    $p->make_person();
    var_dump($p);
    ?>
</body>

</html>