<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador com for</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
    <p>Contagem Progressiva:</p>
        <?php 
            for($c = 1; $c <= 10; $c++) {
               echo " $c "; 
            }
            echo "<p>Contador Regressivo:</p>";
            for($c2 = 10; $c2 >= 1; $c2--) {
                echo " $c2 ";
            }
            echo "<p>Contando de 2 em 2:</p>";
            for($c3 = 1; $c3 <= 20; $c3 += 2) {
                echo " $c3 ";
            }
            echo "<p>Contagem regressiva de 3 em 3:</p>";
            for($c4 = 30; $c4 >= 1; $c4 -= 3) {
                echo " $c4 ";
            }   
        ?>        
    </div>
</body>
</html>
