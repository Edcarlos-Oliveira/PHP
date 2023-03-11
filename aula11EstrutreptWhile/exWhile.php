<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição While</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
    <p>Contador progressivo</p>
        <?php
            $c = 1;

            while($c <= 10) {
                echo $c . "\n";
                $c += 1;
            }
        ?>
        <p>Contador Regressivo</p>
        <?php 
            $c2 = 10;

            while($c2 >= 1) {
                echo $c2 . "\n";
                $c2 -= 1;
            }
        ?>
    </div>
</body>
</html>