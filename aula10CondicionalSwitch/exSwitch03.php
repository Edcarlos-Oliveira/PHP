<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio com Switch</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $rn = isset($_GET["estados"]) ? $_GET["estados"] : "Não Informado";
            
            switch($rn) {
                case 1: 
                    echo "Você mora na Região Norte!!!<br>";
                    break;
                case 2:
                    echo "Você mora na Região Nordeste!!!<br>";
                    break;
                case 3:
                    echo "Você mora na Região Centro-Oeste!!!<br>";
                    break;
                case 4:
                    echo "Você mora na Região Sudeste!!!<br>";
                    break;
                case 5:
                    echo "Você mora na Região Sul!!!<br>";
                    break;
            }
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> <!--Botão criado com javascript 'go(-1) volte uma página.-->
    </div>
</body>
</html>