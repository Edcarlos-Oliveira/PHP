<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Parte 2</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
    <p>Trabalhando com Função:</p>
        <?php
        // Passando 'x' como parâmetro: 
            function teste($x) {
                $x += 2;
                echo "<p>O valor de X é = $x</p>"; // Nesse caso mostra a soma de 'a(3) + x(2)'
            }
            $a = 3;
            teste($a);
            echo "<p>O valor de A é = $a</p>"; // Nesse caso mostra o valor da variável 'a'
        
        // Passando 'x' como referência:
            echo "Trabalhando com Referências:";
            function teste2(&$x) { // O uso do '&' torna a variável 'x' como referência de 'a'
                $x += 2;
                echo "<p>O valor de X é = $x</p>"; 
            }
            $a = 3;
            teste2($a);
            echo "<p>O valor de A é = $a</p>"; // Traz o mesmo resultado de 'x'    
        ?>
        
    </div>
</body>
</html>
