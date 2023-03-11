<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada com for</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
         <?php 
            $tab = isset($_GET["num"]) ? $_GET["num"] : 0;
                echo "<p>Mostrando a tabuada de: $tab</p>";
            for($v = 1; $v <= 10; $v ++) {
                $tot = $tab * $v; 
                echo "$tab x $v = $tot <br>";
            }   
         ?>
         <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
