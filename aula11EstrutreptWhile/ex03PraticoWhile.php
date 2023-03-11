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
    <p>Formulários Personalizável</p>
        <form action="ex03PraticoWhileP2.php" method="get">
            Início: <input type="number" name="ini" min="0" max="100"><br>
            Final:  <input type="number" name="fim" min="1" max="90"><br>
            Incremento: <select name="inc">
                <?php 
                    $incr = 1;
                    while($incr <= 5){
                        echo "<option>$incr</option>";
                        $incr += 1;
                    } 
                ?>
            </select><br>
            <br><input type="submit" value="Enviar" class="botao">
        </form>
    </div>
</body>
</html>