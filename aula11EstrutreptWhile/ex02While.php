<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição While</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
    <p>Formulários Dinâmicos</p>
    <form action="ex02WhileP2.php" method="get">
            <?php 
            $c = 1;
            while($c <= 5) {
                echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>"; // As aspas simples são importante nessa declaração.
                $c += 1;
            }
            ?>
            <br><input type="submit" value="Enviar" class="botao">
        </form>
    </div>
</body>
</html>