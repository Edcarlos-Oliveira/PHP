<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores Parte 1</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    
    <div>
        <pre> <!-- Utilizado para organizar a ezibição do resultado-->
            <p>Trabalhando com Array:</p>
                <?php
                // Trabalhando com 'array':
                    echo "<p>Usando 'array':</p>";
                    $n = array(3,5,8,2);
                        $n[] = 7; // Nesse caso inclui o '7' no final do array. 
                    print_r($n); // Usa o 'print_r' para mostrar um array.

                // Trabalhando com 'range':
                    echo "<p>Usando 'range':</p>";
                    $c = range(5,20,2); // Escreve de 5 até 20 com passo 2.
                    print_r($c);

                // Trabalhando com 'foreach':
                    echo "<p>Usando o 'foreach':</p>";
                    $c1 = range(5,20,2);
                    foreach($c1 as $v) {    // Nesse caso para cada valor em '$c' é jogado em '$v'.
                        echo "$v ";

                    // Caso queira mostrar na tela o resultado como vetor faz o seguinte procedimento:
                    /*<table border="1"><tr>
                        super tag php(code)  
                    <table>*/
                    }

                // Trabalhando com chaves personalizadas:
                    echo "<p>Usando chaves personalizadas:</p>";
                    $v = array( 0 => 5,
                                1 => 9,
                                2 => 8,
                                3 => 7);
                    unset($v[0]); // Elimina o vetor da posição '0', no caso o '5' deixa de existir.
                    print_r($v);

                // Trabalhando com chaves associativas:
                    echo "<p>Usando chaves associativas:</p>";
                    $cad = array("nome" => "Edcarlos",
                                "idade" => 46,
                                "peso" => 93);
                    $cad["não fuma"] = true; // Nesse caso inclui 'não fuma' como nova posição, retorna valor 1.
                    print_r($cad);

                    // Mostra o que cada campo do array possui:
                    foreach($cad as $k => $c) {
                        echo "<p>O campo $k possui conteudo $c</p>";
                    }

                // Matrizes em PHP(são vetores dentro de vetores):
                    echo "<p>Usando Matrizes(vetores dentro de vetores):</p>";
                    $m = array(array(2,3),
                             array(3,4),
                             array(9,5));
                    $m [0][1] = $m[2][0]; // Nesse caso na posição '0, 1' temos o '3', será substituido por '9' que está na posição '2, 0'.
                    print_r($m);
                ?>
        </pre>
    </div>

</body>
</html>
