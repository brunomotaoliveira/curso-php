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

for($i = 0; $i <= 5; $i++){
    $impressao .= '#';
    echo "$impressao <br>";
}
?>