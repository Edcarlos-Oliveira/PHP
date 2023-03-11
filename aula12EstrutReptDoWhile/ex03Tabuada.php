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
    <p>Desafio Tabuada</p>
        <?php
            $v = isset($_GET["vlr"]) ? $_GET["vlr"] : 1;

            $tab = 1;
            $mult = 1; 
            echo "<p>Mostrando a Tabuada de $v:<br></p>";
            
            do {
                echo "$v x $tab = $mult<br>";
                $tab += 1;
                $mult = $v * $tab; // Multiplica o contador escolhido com o contador tabuada "tab".
            }
            while($tab <= 10);
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
