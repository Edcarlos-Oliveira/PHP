<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores Parte 2</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    
    <div>
        <pre> <!-- Utilizado para organizar a exibição do resultado-->
            <p>Trabalhando com Array Parte 2:</p>
                <?php
                // exibindo vetores na tela:
                    $v = array("A", "J", "M", "X", "K");
                    print_r($v);
                    $v[] = "O"; // Inclui o 'O' no final do vetor.
                    // array_push($v, "O") também inclui
                    // array_pop($v) elimina o ultimo elemento
                    
                    echo "O vetor informado tem " .count($v) . " elementos<br/>"; // Conta os elementos.

                    // Também pode ser reescrito assim:
                    $tot = count($v);
                    echo "<p>O vetor informado tem $tot elementos.</p>";
                    var_dump($v); // Também exibe o resultado com uma formatção diferente do 'print_r'.

                // Gerenciando os últimos elementos do vetor:
                    echo "<p>Usando o gerenciamento de elementos:</p>";
                    $v1 = array("B", "C", "D", "F", "G");
                    print_r($v1);
                    array_unshift($v1, "H"); // Inclui no inicio do vetor.
                    array_shift($v1); // Elimina o primeiro elemento. 
                    var_dump($v1);

                // Colocando os vetores em ordem:
                    echo "<p>Vetores em ordem:</p>";
                    $v2 = array("3", "5", "8", "2", "1");
                    print_r($v2);
                    $ordem = $v2; // Criado para manter o vetor de $v2 desordenado 
                    sort($ordem); // Organizando o vetor
                    print_r($ordem);

                    // 'rsort($ordem)' mantém a organização decrescente(reversa)
                    // 'asort($ordem)' Muda os numeros e os indices (ordenação associativa)
                    // 'arsort($ordem) Muda os numeros e os indices (ordenação associativa reversa)

                // Ordenamento por chaves:
                    echo "<p>Ordenamento por chaves:</p>";
                    $v3 = array(2 => "C", 3 => "E", 1 => "H", 0 => "B");
                    print_r($v3);
                    $key = $v3;
                    ksort($key); // Ordena as chaves e ignora as strings(key)
                    print_r($key);

                    // 'krsort($key)' ordena na forma reversa.
                ?>
        </pre>
    </div>
</body>
</html>
