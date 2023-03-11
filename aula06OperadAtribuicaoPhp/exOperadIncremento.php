<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incrementos</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
    <div>
        <p>Operadores Incrementos:
            <ul>
                <li>Pré-Incremento ($a = $a + 1, ++$a)</li>
                <li>Pós-Incremento ($a = $a + 1, $a++)</li>
                <li>Pré-Decremento ($a = $a - 1, --$a)</li>
                <li>Pós-Decremento ($a = $a - 1, $a--)</li>
            </ul>
        </p>
        <p>Exemplos:</p>
        <?php 
            $atual = $_GET["aa"];
            echo "O ano atual é $atual e o ano anterior é: " . --$atual
        ?>
    </div>
</body>
</html>