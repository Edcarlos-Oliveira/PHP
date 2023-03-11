<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Pode ser criado aqui:-->
    <?php 
        $txt = isset($_GET["t"]) ? $_GET["t"]: "Texto Genérico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000"
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrando Cores</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>; /*Nesse caso joga a fonte dentro do php*/
            color: <?php echo $cor; ?>; /*Nesse caso joga a cor dentro do php*/
        }
    </style>
</head>
<body>
    <div>
        <p>Integração Cores:</p>
        <?php 
            echo "<span class='texto'>$txt</span>"; // Importante para definir o estilo local.
        ?>
        <a href="ex03.html"><br>Voltar</br></a> <!--Retorna para o formulário.-->
    </div>
    
</body>
</html>