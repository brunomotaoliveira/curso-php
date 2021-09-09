<div class="titulo">Switch</div>

<?php 
$categoria = 'luxo';
$preco = 0.0;
$carro = '';

if($categoria ==='luxo') {
    $carro = 'Mercedes';
    $preco = 25000;
} else if ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} else if ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
?>