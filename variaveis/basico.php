<div class="titulo">Variáveis</div>

<?php
// Variável em PHP começa com cifrão ' $ ' --- PHP NÃO É CASE SENSITIVE
// variaveis são case sensitive
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma); // verifica se a variável está "setada"

echo '<br>';
unset($soma);
var_dump($soma);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

?>