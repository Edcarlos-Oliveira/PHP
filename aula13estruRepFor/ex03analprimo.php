<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando Número Primo</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
    <p>Escolha um Número:</p>
        <form method="get" action="ex03-numprimo.php">
            <select name="num">
                <?php
                for($p = 1; $p <= 50; $p ++) {
                    echo " <option>$p</option> ";
                }
                ?>
            </select>
            <input type="submit" value="Analise">
        </form>     
    </div>
</body>
</html>
