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
       <p>Resultado Formulários Dinâmicos:</p>
       <?php
            $i = 1;
            while($i <= 5) {
                $v = "num" . $i;
                $url = "v" . $i;
                $$v = isset($_GET[$url]) ? $_GET[$url] : 0; // Os dois '$$' cria a variável da variável
                $i += 1;
            } 
            echo "$num1 $num2 $num3 $num4 $num5" . "<br>";
       ?>
    
       <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> <!--Botão criado com javascript 'go(-1) volte uma página.-->
    </div>

</body>
</html>