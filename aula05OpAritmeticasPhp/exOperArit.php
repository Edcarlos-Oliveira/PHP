<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<<body>
        
    <div>
        <p>Operadores Aritmeticos: (+, -, *, /, %), Adição, Subtração, Multiplicação e Módulo.</p>  
        <?php
        // Operação de Soma
            $n1 = 3;
            $n2 = 2;
            $s = $n1 + $n2;
            echo "A soma de $n1 + $n2 é = $s <br>";            

        // Outro modelo para Soma:
            $n3 = 8;
            $n4 = 5;
            $m = ($n3 + $n4)/2; // Importante os () pela precedência.
            echo "<br>A soma $n3 + $n4 de vale: ". ($n3 + $n4);
            echo "<br>A subtração $n3 - $n4 vale: ". ($n3 - $n4);
            echo "<br>A multiplicação $n3 x $n4 vale: ". ($n3 * $n4);
            echo "<br>A divisão $n3 / $n4 vale: ". ($n3 / $n4);
            echo "<br>O resto da divisão $n3 % $n4 vale: ". ($n3 % $n4);
            echo "<br>A média de $n3 e $n4 vale: $m <br>";

        // Recebendo os valores direto da url:
            $n5 = $_GET["a"];
            $n6 = $_GET["b"];
            echo "<br>Valores declarados na Url são: $n5 e $n6"    
        ?>
        <p>Ordem de precedência: [ (), * / %, + - )</p>
        <p>Funções Matemática pré-definidas no PHP:
            <ul>
                <li>abs(Pega o valor absoluto)</li>
                <li>pow(calcula a raiz cúbica)</li>
                <li>sqrt(calcula a raiz quadrada)</li>
                <li>round(Arredonda para cima e para baixo)</li>
                <li>intval(Pega a parte inteira do número)</li>
                <li>number_format(formata o número)</li>
            </ul>
        </p>
    </div>   
</body>
</html>