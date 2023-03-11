<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetições While </title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
       <p>Resultado Formulários Personalizável:</p>
       <?php
            $i = isset($_GET["ini"]) ? $_GET["ini"] : 0;
            $f = isset($_GET["fim"]) ? $_GET["fim"] : 0;
            $incr = isset($_GET["inc"]) ? $_GET["inc"] : 0;
           
            $cont = $i;
            while($cont <= $f) {
                echo $cont . "\n";
                $cont += $incr;               
            }
            $cont = $i;
            while($cont >= $f) {
                echo $cont . "\n";
                $cont -= $incr; 
            }      
       ?>    
       <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p> <!--Botão criado com javascript 'go(-1) volte uma página.-->
    </div>

</body>
</html>