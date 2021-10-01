<div class="titulo">For Each</div>

<?php 
$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

foreach ($array as $valor) {
    echo "$valor <br>";
}

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];


// for each dentro de for each
foreach ($matriz as $linha) {
    //echo "$linha <br>";

    foreach($linha as $letra) {
        echo "$letra";
    }
    echo "<br>";
}
?>