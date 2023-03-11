<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional02</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            $nota1 = isset ($_GET["n1"]) ? $_GET["n1"]: 0;
            $nota2 = isset ($_GET["n2"]) ? $_GET["n2"]: 0;
            $m = ($nota1 + $nota2)/2;
            echo "A média de $nota1 + $nota2 é: $m <br>";
            
            if($m > 7) {
                $sit = "APROVADO<br>";
            }
            else if($m >= 5 && $m < 7) {
                $sit = "RECUPERAÇÃO<br>";
            }
            else {
                $sit = "REPROVADO<br>";
            }
            echo "Com a média $m, sua situação é: <span class='foco'>$sit</span>";
        ?>
        <br><a href="javascript:history.go(-1)" class='botao'>Voltar</a>
    </div>
</body>
</html>