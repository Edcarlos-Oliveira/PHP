<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    
    <div>
    <p>Trabalhando com Função Parte 2:</p>
        <?php
        // Introdução criada por Edcarlos:

           function ola(){
            $txt = "Olá Mundo! estou testando funções em php.";
            return $txt;
           }
           $r = ola();
           echo $r;

        // Trabalhando com a função 'strtolower()':
           echo "<p>Usando a função 'strtolower'(Coloca tudo em minusculo):</p>";
           $nome = "Edcarlos Oliveira";
           echo "Seu nome é " . strtolower($nome);

           // Outra forma de escrever o resultado:
           $nome2 = strtolower($nome);
           echo "<p>Seu nome2 é $nome2</p>";

        // Trabalhando com a função 'strtoupper()':
           echo "<p>Usando a função 'strtoupper (coloca todas as letras em maiusculas):</p>";
           $nom = 'edcarlos oliveira';
           echo "Seu nome em maiusculas é ".strtoupper($nom);

           // Outra forma de escrever o resultado:
           $nom2 = strtoupper($nom);
           echo "<p>Seu nom2 em maiusculas é $nom2</p>";

        // Trabalhando com a função 'ucfirst()':
           echo "<p>Usando a função ucfirst(Coloca a primeira letra em maisculas)</p>";
           $no = "edcarlos oliveira";
           echo "Seu nome com a primeira letra em maiuscula ".ucfirst($no);

           // Outra forma de escrever o resultado:
           $no2 = ucfirst($no);
           echo "<p>Seu no2 com a primeira letra em maiuscula é $no2</p>";

           // Usando as duas funções:
           $no3 = "edcarLos OliveiRa";
           echo "Seu no3 será colocado todas as letras maiusculas em minusculas, exceto a primeira ".ucfirst(strtolower($no3)); // Usando duas funções.

           // Escreve o resultado usando as duas funções:
           $no4 = ucfirst(strtolower($no3));
           echo "<p>Seu no4 com todas as letras em maiusculas em minuscula, exceto a primera $no4</p>";

        // Trabalhando com a função 'ucwords()':
           echo "<p>Usando a função 'ucwords'(Coloca a primeira letra de cada palavra em maiuscula):</p>";
           $n = "edcarlos oliveira";
           echo "Seu nome com as primeiras letras de cada palavra em maiuscula ". ucwords($n);

           // Outra forma de escrever o resultado:
           $n2 = ucwords($n);
           echo "<p>Seu n2 com as primeiras letras de cada palavra em maiuscula $n2</p>";

        // Trabalhando com a função 'strrev()':
           echo "<p>Usando a função 'strrev'(Escreve a string ao contrário):</p>";
           $n1 = "edcarlos oliveira";
           echo "Seu nome ao contrario ".strrev($n1);

           // Outra forma de escrever o resultado:
            $n4 = strrev($n1);
            echo "<p>Seu n4 ao contrário $n4</p>";

        // Trabalhando com a função 'strpos()':
            echo "<p>Usando a função 'strpos' (Verifica em qual posição está uma sub string)</p>";
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            echo "$frase <br/> A string foi encontrada na posição $pos";

        // Trabalhando com a função 'stripos()':
            echo "<p>Usando a função 'stripos'(Para considerar a string independente de ser maiuscula ou minuscula):</p>";
            $fra = "Estou aprendendo PHP";
            $po = stripos($fra, "pHp");
            echo "<p>$fra <br/> A string foi encontrada na posição $po</p>";

        // Trabalhando com a função 'substr_count':
            echo "<p>Usando a função 'substr_count'(Conta quantas vezes uma string aparece em uma frase):</p>";
            $f = "Estou aprendendo PHP no curso em Video de PHP";
            $cont = substr_count($f, "PHP");
            echo "<p>PHP encontrado $cont vezes</p>";

        // Trabalhando com a função 'substr':
            echo "<p>Usando a função 'substr'(Fatia a string conforme a numeração solicitada):</p>";
            $sit = "Curso em Video";
            $sub = substr($sit, 0,5); //Escreve as 5 primeiras letras começando na posição '0' 'Curso'.
            echo "<p>$sit<br/> A seleção corresponde a: $sub</p>";

        // Trabalhando com a função 'str_pad':
            echo "<p>Usando a função 'str_pad'(faz uma string caber em determinado espaço):</p>";
            $nome5 = "Edcarlos";
            $nov = str_pad($nome5,30, ".", STR_PAD_RIGHT); // Nesse caso escreve 30 '.' a direita.
            $nov1 = str_pad($nome5, 30, ".", STR_PAD_LEFT); // Nesse caso escreve 30 '.' a esquerda. 
            $nov2 = str_pad($nome5, 30, ".", STR_PAD_BOTH); // Nesse caso centraliza a string.
            echo "<p>Este nome $nov é lindo</p>";
            echo "<p>Este nome $nov1 é lindo</p>";
            echo "<p>Este nome $nov2 é lindo</p>";

        // Trabalhando com a função 'str_repeat':
            echo "<p>Usando a função 'str_repeat'(Repete a string conforme a declaração):</p>";
            $txt = str_repeat("heddy ", 5); // Repete 'heddy' por cinco vezes.
            echo "<p>O texto gerado foi: $txt<p/>";

        // Trabalhando com a função 'str_replace':
            echo "<p>Usando a função 'str_replace'(Substitui uma string declarada pela outra escolhida):</p>";
            $op = "Gosto de estudar back-end";
            $opn = str_replace("back-end", "PHP", $op); // Nesse caso substitui 'back-end' por 'PHP'.
            echo "$opn";

            // str_ireplace => Ignora as letras maiusculas ou minusculas.
        ?>
    </div>
</body>
</html>
