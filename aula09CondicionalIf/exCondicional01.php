<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional01</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            $a = isset ($_GET["ano"]) ? $_GET["ano"] : 1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos. <br>";

        // Trabalhando as condições:
            if($i < 16) {
                $tv = "Não vota"; // 'tv' tipo de voto
            }
            else if(($i >= 16 && $i < 18) || ($i > 65)) { // Necessário os parenteses para dar certo.
                    $tv = "Opcional";
                }
                else {
                    $tv = "Obrigatório";
                }
            
            echo "Para essa idade, $tv";

        ?>
        <a href="exCondicional01.html"><br>Voltar<br></a>
    </div>
</body>
</html>