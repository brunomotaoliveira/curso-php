<div class="titulo">Laço For</div>

<?php 
    for($cont = 1; $cont <= 5; $cont++) {
        echo "$cont <br>";
    }

    echo "<hr>";

    for(; $cont <= 10; $cont++){ // as partes do laço for são opcionaiss
        echo "$cont <br>";
    }

    echo "<hr>";

    for(; $cont <= 15;) {
        echo "$cont <br>";
        $cont++;
    }

    $array = ['Segunda', 'Terça','Quarta','Quinta','Sexta','Sábado','Domingo'];

    print_r($array);
   
    echo '<hr>';
    for($i = 0; $i < count($array); $i++){
        echo "{$array[$i]} <br>";
    }

    //percorrendo a matriz
    $matriz = [
        ['a','e' ,'i','o','u'],
        ['b','c','d']
    ];

    echo "<hr>";

    for($i = 0; $i < count($matriz); $i++){
        for($j = 0; $j < count($matriz[$i]); $j++) {
            echo "{$matriz[$i][$j]}";
        }
        echo "<br>";
    }
?>