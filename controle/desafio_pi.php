<div class="titulo">Desafio PI</div>

<?php 
    echo pi();
    $pi = 3.14;
    echo "<br>";

    var_dump($pi);
    echo "<br>";
    var_dump(pi());
    echo "<br>";

    if( $pi == pi()){
        echo "<br>Iguais!";
    } else {
        echo "<br>Diferentes!";
    }

    // resposta
    echo '<br>' . ($pi - pi());
    echo '<br>' . ($pi - $piErrado);

    if($pi - pi() <= 0.01) {
        echo '<br>Praticamente iguais!';
    }

    if($pi - $piErrado <= 0.01) {
        echo '<br>Praticamente iguais';
    } else {
        echo '<br>Valor errado!';
    }
?>