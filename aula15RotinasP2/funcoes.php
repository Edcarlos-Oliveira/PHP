<?php 
    function ola() {
        echo "<h1>Olá, Mundo!</h1>";
    }

    function mostraValor($v) {
        echo "<h2>Acabei de receber o valor $v</h2>";
    }

    function multiplique() {
        $m = 1;
        $n1 = 10;
        $n2 = 5;
        $m = $n1 * $n2;
        echo "<h3>A multiplicação de $n1 x $n2 é igual a $m</h3>";
    }
?>