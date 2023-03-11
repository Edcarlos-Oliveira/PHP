<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Primo</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
         <?php 
            // Recebe o número a ser analisado:
            $n = isset($_GET["num"]) ? $_GET["num"] : 1;
                echo "<p>Analisando o número $n...</p>";
                echo "Valores múltiplos: ";

            // Conta a quantidade de múltiplos:
            $mult = 0;
            for($v = 1; $v <= $n; $v ++) {
                if($n % $v == 0) {
                    $mult ++;
                    echo " $v, ";
                }
            }
            echo "<p>Total de multiplos: $mult</p>";
            echo "<p>Resultado: $n";

            // Analisa se o número é primo ou não:
            if($mult <= 2) {
                echo " É PRIMO";
            }
            else {
                echo " Não é PRIMO";
            }
            echo "</p>"
         ?>
         <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
