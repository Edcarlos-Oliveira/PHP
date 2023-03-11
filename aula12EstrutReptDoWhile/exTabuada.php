<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <form  method="get" action="ex03Tabuada.php">
            Número: <select name="vlr" >
                        <?php
                            $c = 1;
                            do {
                                echo "<option>$c</option>";
                                $c += 1;
                            }
                            while($c <= 10);
                        ?>
                    </select>
            <input type="submit" value="Tabuada">
        </form>        
    </div>    
</body>
</html>
