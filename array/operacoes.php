<div class="titulo">Operacoes</div>

<?php 
$dados1 = [
    "nome" => "Bruno",
    "idade" => 29
];

$dados2 = [
    "naturalidade"  => "São Paulo"
];
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos); // array_rand = escolhe um elemento aleatorio do array
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';

echo "{$dadosCompletos['idade']}"; // o par de chaves {}, delimita o valor que vai ser interpolado
echo "${dadosCompletos['idade']}"; // $ também funciona

unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos); // sem nenhum valor NULL

$impares = [1, 3, 5, 7, 9]; // assume as posições por padrão Ex: [0] => 1, [1] => 3, [2] => 5, [3] => 7, [4] => fa-rotate-90
$pares = [0, 2, 4, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);
?>