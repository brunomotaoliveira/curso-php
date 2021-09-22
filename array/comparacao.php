<div class="titulo">Comparação Arrays</div>

<?php 
$array1 = ['nome' => 'Bruno', 'idade' => 29];
$array2 = ['nome' => 'Bruno', 'idade' => 29];
var_dump($array1 == $array2);
var_dump($array1 === $array2);

$array3 = ['idade' => 25, 'nome' => 'Jessica'];
echo '<br>';
var_dump($array1 == $array3);
var_dump($array1 === $array3);
var_dump($array1 != $array3);
var_dump($array1 !== $array3);

echo '<br>';
$array4 = ['idade' => '25', 'nome' => 'Jessica'];
var_dump($array1 == $array4);
var_dump($array1 === $array4);
?>