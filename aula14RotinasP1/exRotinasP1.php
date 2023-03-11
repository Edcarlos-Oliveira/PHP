<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Parte 1</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
    <p>Trabalhando com Função:</p>
        <?php 
            function soma($a, $b) {
                $s = $a + $b;
                echo "<p>A soma de $a + $b = $s</p> "; // O 'echo' mostra o valor, não retorna, nesse caso usa 'return'
            }
            soma(4, 3);
            soma(8, 2);
            // Somando com a criação de variáveis:
            $x = 9;
            $y = 10;
            soma($x, $y);

            // Usando o retorno de valores
            echo "Retorno de valores:";
            function soma2($b, $c) {
                $s2 = $b + $c; // Pode ser eliminado essa linha e 'return $b + $c' seria a mesma coisa.
                return $s2; // Nesse caso joga os valores de 'b e c' na variável 'res'.
            }
            $x1 = 3;
            $y1 = 5;
            $res = soma2($x1, $y1);
            echo "<p>A soma de $x1 + $y1 = $res</p>";

            // Usando os Parâmetros Dinâmicos:

            echo "Parâmetros Dinâmicos ou Multiplos Parametros:";
            function soma3() {
                $p = func_get_args(); // Numera os indices
                $t = func_num_args(); // Conta os itens
                $s3 = 0;
                for($i = 0; $i < $t; $i ++) {
                    $s3 += $p[$i];
                }
                return $s3;
            }
            $r = soma3(3, 5, 12, 10, 10);
            echo "<p>A soma da função é: $r</p>"; 
        ?>
        
    </div>
</body>
</html>
