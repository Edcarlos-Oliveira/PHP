<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Atribuição</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
    <div>
        <p>Operadores Atribuição:</p>
        <?php 
            $preco = $_GET["p"];
            echo "O preço do produto é R$ $preco";
            $preco = $preco + ($preco * 10/100); // Poderia ser reescrito '$preco += ($preco * 10/100)'
            echo "<br>O novo preço com 10% de aumento é R$" . number_format($preco, 2), "<br>";
            $preco = $preco -= ($preco * 10/100);
            echo "<br>O novo preço com 10% de desconto é R$". number_format($preco, 2);
        ?>
        <p>
            <ul>
                <li>Adição ($a = $a + $b ou $a += $b)</li>
                <li>Subtração ($a = $a - $b ou $a -= $b)</li>
                <li>Multiplicação ($a = $a * $b ou $a *= $b)</li>
                <li>Divisão ($a / $b ou $a /= $b)</li>
                <li>Módulo ($a = $a % $b ou $a %= $b)</li>
                <li>Cocatenação ($a = $a.$b ou $a .= $b)</li>
            </ul>
        </p>
    </div>
    
</body>
</html>