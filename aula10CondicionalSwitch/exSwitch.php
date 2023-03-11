<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional com Switch</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $op = isset($_GET["oper"]) ? $_GET["oper"] : 1; // Caso não escolha nenhuma opção será considerado a opção 1.
        switch($op) {
            case 1:
                $r = $n * 2;
                break; // Necessário os 'break'
            case 2:
                $r = pow($n, 3); // para calcular o cubo.
                break;
            case 3:
                $r = sqrt($n); // Poderia ser reescrito '$n ^ (1/2)'
        }
        echo "O resultado da operação solicitada foi <span class='foco'>$r</span>" // 'span' para foco no resultado.
        ?>
        <a href="exSwitch.html"><br>Voltar<br></a>
    </div>
</body>
</html>