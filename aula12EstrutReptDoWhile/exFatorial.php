<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
    <p>Fatorial</p>
        <?php
            $v = isset($_GET["val"]) ? $_GET["val"] : 1;
            echo "<h1>Calculando o Fatorial de $v </h1>";
            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c -= 1; 
            }
            while($c >= 1);
            echo "<h2>$v ! = $fat </h2>";
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>