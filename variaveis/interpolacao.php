<div class="titu">Interpolação</div>


<?php 
    $numero = 10;
    echo $numero;
    echo '<br> $numero';
    echo "<br> $numero"; //usar aspas duplas


    $texto = "A sua nota é $numero";
    echo "<br>$texto";

    $objeto = 'caneta';
    echo "<br>Eu tenho 5 $objetos";

    echo "<br>Eu tenho 5 {$objeto}s.";
    echo "<br>Eu tinha 5 {$objeto}s mas perdi 3 {$objeto}s";

?>