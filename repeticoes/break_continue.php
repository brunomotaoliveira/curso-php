<div class="titulo">Break Continue</div>

<?php 
$cont = 16;
for(;;) {
    echo "$cont <br>";
    $cont++;
    if($cont > 20) {
        break;
    }
}

echo "Fim!";
?>