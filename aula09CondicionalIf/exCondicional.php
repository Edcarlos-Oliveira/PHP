<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            $a = isset ($_GET["ano"]) ? $_GET["ano"] : 1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos. <br>";

        // Trabalhando as condições:
        if($i >= 18) {
            $v = "Pode votar";
            $d = "Pode Dirigir";
        } 
        else {
            $v = "Não Pode Votar";
            $d = "Não pode Dirigir";
        }
        echo "Com essa idade você $v e também $d <br>";

        ?>
        <a href="exCondicional.html"><br>Voltar<br></a>
    </div>
</body>
</html>