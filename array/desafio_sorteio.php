<div class="titulo">Desafio Sorteio</div>

<?php 
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];
//  echo $nomes[array_rand($nomes)]; // array_rand : escolhe um elemento da array aleatoriamente
$index = array_rand($nomes);
echo "<div center><h1>{$nomes[$index]}</h1></div>";
?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>