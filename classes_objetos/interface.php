<div class="titulo">Interface</div>

<?php 

interface Animal {
    function respirar();
}

interface Canino {
    function latir();
}

class Cachorro implements Animal {
    function respirar() {
        echo "Irei usar oxigênio!<br>";
    }
}

$animal1 = new Cachorro();
$animal1->respirar();

echo 'Fim!';
?>