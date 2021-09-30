<div class="titulo">Desafio For</div>

<!-- 
Usar o for, para gerar a seguinte saida
#
##
###
####
#####

São duas versões
1) Pode usar incremento $i++

2) não pode usar incremento $i++;
-->

<?php 
$impressao = '';

for($i = 0; $i < 5; $i++){
    $impressao .= '#'; //concatena o hashtag utilizando o " .= ". Toda vez que o laço se repetir um novo hashtag será concatenado
    echo "$impressao <br>";
}

echo '<hr>';

for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#'){
    echo "$impressao2 <br>";
}
?>