<div class="titulo">Break Continue</div>

<?php 
$cont = 16;
for(;;) {
    echo "$cont <br>";
    $cont++;
    if($cont > 20) {
        break; // encerra o contador ao chegar em 20. Mostrando a mensagem ("Fim").
    }
}

echo "<br><hr>";

for(;;) {
    $cont++;
    if($cont % 2 === 1) { // só vai passar para as próximas linhas se o número for par
        continue;
    }
    echo "$cont <br>";
    if($cont >= 30) { // ecenrra o contador quando o numero for igual a 30.
        break;
    }
}

echo "Fim!";
?>