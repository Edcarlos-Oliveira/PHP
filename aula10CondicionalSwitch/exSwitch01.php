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
            $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;

            switch($d) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levante e vá estudar pequeno gafanhoto!<br>";
                    break;
                case 7:
                case 8:
                    echo "Descanse pequeno gafanhoto!<br>";
                    break;
                default:
                    echo "[ERRO!] Digite um valor válido.<br>";
            }
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> <!--Botão criado com javascript 'go(-1) volte uma página.-->
    </div>
</body>
</html>