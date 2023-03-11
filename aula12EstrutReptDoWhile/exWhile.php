<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição Do While</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
    <p>Contador progressivo</p>
        <?php
            $c = 1;

            do {
                echo " $c ";
                $c += 1;
            }
            while($c <= 10);
        ?>
        <p>Contador Regressivo</p>
        <?php 
            $c2 = 10;

            do {
            echo " $c2 ";
            $c2 -= 1;
            }
            while($c2 >= 1);
        ?>
        <p>Contando com passo</p>
        <?php 
            $c3 = 1;

            do {
                echo " $c3 ";
                $c3 += 2; // Nesse caso conta de 2 em 2.
            }
            while($c3 <= 20)
        ?>
    </div>
</body>
</html>