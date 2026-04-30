<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Tipos Primitivos</h1>

    <?php 
        // 0x = Hexadecimal | 0b = Binário | 0 = Octal
        
        $num = 0x1A; // hexadecimal
        echo "O caderno custa R$ $num,";

        $num = 0b1010; // binário
        echo "<br>Mas tenho só R$ $num,";

        $num = 020; // octal
        echo "<br>Porém lembrei que tinha R$ $num guardado.";

        $num = (int) 3e2; // notação científica

        echo "<hr><br>O valor do tipo inteiro é:  $num";

        print "<hr><br> <h1>Tipos compostos:</h1> <br>";

        $vetor = [1, 2, 3, 4, 5];
        var_dump($vetor);

        echo "<br><br>";

        class Pessoa {
            public $nome;
            public $idade;
        }
    
        $p = new Pessoa();

        var_dump($p);
    ?>
</body>
</html>