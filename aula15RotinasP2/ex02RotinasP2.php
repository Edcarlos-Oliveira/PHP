<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Parte 2</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
    <p>Trabalhando com Função:</p>
        <?php
            include "funcoes.php"; // Inclue os arquivos da funcao declarada.
            echo "<h1>Testando novas funções</h1>";
            ola();  // Mostra o que está criado na função 'ola', nesse caso a frase 'Olá Mundo'
            mostraValor(4); // Mostra o valor declarada com o texto da 'função mostraValor'.
            echo "<h2>Finalizando Programa....</h2>"; 
            multiplique();
            
            // Include => Caso o arquivo declarado não seja encontrado o sistema continua o procedimento.(duplica as inclusoes)
            // Require => Caso o arquivo declarado não seja encontrado interrompe o sistema.
            // Include_once => Identifica se o arquivo a carregar já existe e não faz a operação. (carrega só uma vez)
            // Require_once => Mesmo procedimento de 'Include_once' 
        ?>
        
    </div>
</body>
</html>
