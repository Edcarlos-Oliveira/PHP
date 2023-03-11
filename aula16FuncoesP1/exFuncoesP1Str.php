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
    <p>Trabalhando com Função:</p>
        <?php

        // Criada por Edcarlos (teste):
           function ola(){
            $txt = "Olá Mundo! estou testando funções em php.";
            return $txt;
           }
           $r = ola();
           echo $r;

        // Trabalhando com Manipulação de Strings(funçoes), 
            echo "<p>Manipulação de strings 'printf():</p>";
            $p = "Leite";
            $pr = 4.5;
            echo "O $p custa R$ ".number_format($pr,2); //Modo tradicional de mostrar o preço formatado.
            printf("<p>O %s custa R$ %.2f", $p, $pr,'</p>'); // Nesse caso mostra o mesmo resultado formatado '%s' para mostrar a string 'Leite', '%.2f' para mostrar o preço no modo float com duas casas decimais.

            // '%d' => valor decimal (positivo ou negativo)
            // '%u' => valor decimal sem sinal(apenas positivos)

        //Trabalhando com print_r (Mostra detalhes de uma variável):
        echo "<p>Usando o print_r:</p>";
           $v[0] = 9;
           $v[1] = 5;
           $v[2] = 3;
           print_r($v); //Saída, Array ( [0] => 9 [1] => 5 [2] => 3 )
           //var_dump($v); a formatação do resultado é diferente do 'print_r' array(3) { [0]=> int(9) [1]=> int(5) [2]=> int(3) }

           //var_export($v); a formatação da saida é diferente do 'print_r e var_dump' array ( 0 => 9, 1 => 5, 2 => 3,)

        // Também pode ser criado dessa forma:
            $v2 = array (3,7,6,2,1,9);
            print_r($v2);

        // Trabalhando com wordwrap:
            echo "<p>Usando wordwrap:</p>";
            $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap.";
            echo "<p>$t</p>"; // Nesse caso não quebra nenhuma linha
            
            $r = wordwrap($t, 5, "<br/>\n", false); // Nesse caso quebra as linhas, tanto no window quanto no code, usando '<br/>\n', caso 'false' fosse 'true' todas as palavras seria de 5 caracteres. 
            echo $r;

        // Trabalhando com strlen:
            echo "<p>Usando strlen(conta o tamanho da string):</p>";
            $txt = "Curso em Vídeo"; // O acento é considerado como 1 caracteres (15) sem acento (14).
            $tam = strlen($txt);
            echo $tam;

        // função 'trim', 'ltrim' e 'rtrim':
            echo "<p>Usando função 'trim', 'ltrim' e 'rtrim'(Elimina os espaços(antes e depois) de uma string)</p>";
            $nome = "   José da Silva   ";
            echo(strlen($nome)); // Mostra 20 letras
            $novo = trim($nome); // Retira os espaços antes e depois.
            echo "<p>$novo</p>"; 
            echo(strlen($novo)); // Mostra 14 letras 

            // 'ltrim' => Elimina os espaços só do inicio.
            // 'rtrim' => Elimina somente os espaços do final.

        // Trabalhando com str_word_count:
            echo "<p>Usando str_word_count(qtd de palavras dentro de uma string):</p>";
            $frase = "Estou estudando PHP";
            $cont = str_word_count($frase, 0); // retorna '3' palavras dentro da frase. O '0' conta as palavras, '1' cria um array, '2' conta onde cada palavra começa.
            print_r($cont);

        // Trabalhando com 'explode':
            echo "<p>Usando a função 'explode'(A versão mais moderna do str_word_count)</p>";
            $site = "Curso em Vídeo";
            $vetor = explode(" ", $site);
            print_r($vetor);

        // Trabalhando com 'str_split':
            echo "<p>Trabalhando com a função str_split(mostra cada letra em um indice no vetor):</p>";
            $no = "Edcarlos";
            $vet = str_split($no); // cria um indice para cada letra.
            print_r($vet);

        // Trabalhando com 'implode':
            echo "<p>Usando a função 'inplode':</p>";
            $vtr[0] = "Curso";
            $vtr[1] = "em";
            $vtr[2] = "Video";
            $tex = implode("#", $vtr); // Coloca as '#' entre as palavras 'Curso#em#Video'.
            print($tex);
            
            // 'join' => pode substituir o 'implode'.

        // Trabalhando com a função 'chr':
            echo "<p>Usando a função 'chr'(Mostra qual letra está em determinado número):</p>";
            $letra = chr(67); // Mostra a letra 'C'
            print($letra);

        // Trabalhando com a função 'ord':
            echo "<p>Usando a função 'ord'(Mostra o código da letra declarada na string):</p>";
            $lt = "E";
            $cod = ord($lt);
            print($cod)
        ?>
    </div>
</body>
</html>
