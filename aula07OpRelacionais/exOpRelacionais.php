<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <p>Operadores Relacionais (>, <, >=, <=, != ou <>(diferente), ==, ===(idêntico))</p>
        <p>Operador Ternário (?, : (Ex:expressão ? verdadeiro : falso))
         <!--$maior = $a > $b ? $a : $b
            $r = $a > $b ? $a + $b : $a - $b
            $sit = $m < 7 ? "recuperação" : "aprovado"-->
        </p>
        <p>Operadores Lógicos: (E = and ou &&, OU = or ou ||, XOU(Ou exclusivo) = xor, NÃO = !
           <!--Exemplos:
                E => 2 verdadeiras então verdadeiro as demais falsas;
                OU => 1 verdadeira as demais verdadeiras
                XOU => 2 verdadeiras ou 2 falsas é igual a falso as demais verdadeiras
                NÃO => 1 falsa a outra verdadeira e vice e versa--> 
        </p>
        <?php 
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"]; 

            echo "Os valores passados foram $n1 e $n2 <br>";
            $r = ($tipo == "s") ? $n1 + $n2 :  $n1 * $n2;             
            echo "O resultado será $r<br>";

        // Trabalhando com os idênticos:
            $a = 3;
            $b = "3";
            $r = ($a == $b) ? "SIM" : "NÃO";
            $r2 = ($a === $b) ? "SIM" : "NÃO";
            echo "As variáveis A e B são iguais? $r <br>"; // Nesse caso retorna SIM o php considera como iguias.
            echo "As variáveis A e B são iguais? $r2<br>"; // Nesse caso retorna NÃO o php considera identifica que 'b' é uma string.

        // Trabalhando com médias:
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1 + $nota2)/2;
            echo "A média entre a $nota1 e $nota2 é $m <br>";
            $sit = ($m < 6) ? "REPROVADO" : "APROVADO";
            echo "A situação do aluno é: $sit<br>";
        /* Poderia usar a concatenação para mostrar o resultado da situação
            Ex: echo "A situação do aluno é" . (($m<6)?"REPROVADO":"APROVADO"), IMPORTANTE OS PARENTESES*/ 
            
        // Trabalhando com os valores lógicos:
            $ano = $_GET["an"];
            $idade = 2023 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos.<br>";
            $sit2 = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
            echo "Dessa forma seu voto é $sit2<br>";

        
        ?>
    </div>
    
</body>
</html>
