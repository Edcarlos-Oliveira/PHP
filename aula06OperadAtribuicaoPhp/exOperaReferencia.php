<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Referência</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
    <div>
        <p>Referências:</p>
        <?php 
            $a = 3;
            $b = &$a; // Nesse caso com o '&' a variável 'a' vai valer '8' pela referência.
            $b += 5;
            echo "A variável A vale $a";
            echo "<br>A variável B vale $b"; // Nesse caso a variável B vale '8'.
        
            // Variáveis das Variáveis:
            $site = "cursoemvideo"; // Nesse caso escreve 'cursoemvideo'
            $$site = "cursoPHP"; // Nesse caso cria uma variável 'cursoemvideo' e escreve 'cursoPHP'
            echo "<br>A variável normal recebe o nome: $site <br>";
            echo "<br>A variável com dois $$ recebe o nome $cursoemvideo"

        ?>
        <p>Variáveis de Variáveis:
            <ul>
                <li>$site = "cursoemvideo";
                    $$site = "cursoPHP";
                    echo $site;
                    echo $cursoemvideo;
                </li>
            </ul> 
        </p>
    </div>
    
</body>
</html>