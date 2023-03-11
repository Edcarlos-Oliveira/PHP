<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos aula 04</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    
</head>
<body>
    <h1>Scripts PHP</h1>
    <div>
        <?php
            $n = 4;
            $nome = "Edcarlos"; 
            $nome2 = (string)"Edcarlos"; // Poderia ser usado (string) antes do nome para determinar como 'string'
            $nome3 = (int)"Edcarlos"; // Nesse caso retorna '0', 'Edcarlos' é uma 'string'
            $nome4 = (int)"10 Edcarlos"; // Nesse caso ignora o nome 'Edcarlos' e escreve o número '10'.  
            echo "$nome <br>"; // Escreve na tela 'Edcarlos'
            echo "$nome2 <br>";
            echo "$nome3<br>";
            echo "$nome4<br>";
            

        // Usando Concatenação:
            $nome = "Edcarlos";
            $idade = 46;
            echo 'Olá ' . $nome. ' você tem '. $idade. ' anos.<br>';
            echo "Olá $nome você tem $idade anos." // Poderia ser reescrito dessa forma.
            
        ?>
    </div>
</body>
</html>
