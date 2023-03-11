<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrando Formulários</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <p>Integração Formulários:</p>
        <?php 
            $valor = $_GET["v"];
            echo "O valor enviado foi $valor<br>";
            $rq = sqrt($valor);
            echo "A raiz do valor enviado é igual a: ". number_format($rq, 2);
        ?>
        <a href="exIntegraFormulario.html"><br>Voltar</br></a> <!--Retorna para o formulário.-->
    </div>
    
</body>
</html>