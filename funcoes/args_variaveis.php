<div class="titulo">Argumentos Variáveis</div>

<?php 

    function soma($a, $b) {
        return $a + $b;
    }

    echo soma(14, 15, 6, 7, 8, 9) . '<br>';
    echo soma(6, 5, 4) . '<br>';

    function somaCompleta(...$numeros) {
        print_r($numeros);
    }

    somaCompleta(1);

?>