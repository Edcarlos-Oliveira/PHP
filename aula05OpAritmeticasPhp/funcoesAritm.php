<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    
</head>
<body>
    <div>
        <p>Funções aritméticas:</p>
        <?php 
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "<h1>Valores recebidos: $v1 e $v2</h1><br>";
            echo "Valor absoluto de $v2 é: ".abs($v2); //Elimina o sinal '-' e considera apenas o nº.
            echo "<br>O valor de $v1<sup>$v2</sup> é: ".pow($v1, $v2); //<sup> eleva o número, nesse caso '3' cubo(pow)
            echo "<br>A raiz de {&radic;$v1} é: ".sqrt($v1); // Calcula a raiz quadrada, '&radic; escreve o símbolo da raiz.
            echo "<br>O valor de $v2 arredondado é: ". round($v2); //Arredonda o valor para cima ou para baixo quando, Ex: 3.6 é 4 e 3.4 é 3. (ceil arredonda sempre para cima, floor arredonda sempre para baixo)
            echo "<br>Aparte inteira de $v2 é:  ". intval($v2); //Pega a parte inteira de um número
            echo "<br>O valor de $v1 em moedas é R$" . number_format($v1, 2, ",", "." ) // formata com duas casas decimais e troca o ponto por virgula dos decimais e mantém o ponto nos milhares.

        ?>
    </div>
    
</body>
</html>