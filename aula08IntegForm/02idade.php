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
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não Informado]"; //'isset' se foi passado como parâmetro, ou foi configurado
            $ano = isset($_GET["ano"])?$_GET["ano"]: 0;
            $sexo = isset($_GET["sexo"])? $_GET["sexo"]:"[Sem Sexo]";
            $idade = date("Y") - $ano; // 'date("Y")' retorna o ano atual do sistema, importante o 'Y' maiusculo.
            echo "$nome é $sexo tem $idade anos.";
            
        ?>
        <a href="ex02.html"><br>Voltar</br></a> <!--Retorna para o formulário.-->
    </div>
    
</body>
</html>