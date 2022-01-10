<div class="titulo">Interface</div>

<?php 

interface Animal {
    function respirar();
}

interface Canino {
    function latir(): string;
}

class Cachorro implements Animal, Canino {
    function respirar() {
        echo "Irei usar oxigênio!<br>";
    }

    function latir(): string {
        return 'au au';
    }
}

$animal1 = new Cachorro();
$animal1->respirar();

echo 'Fim!';
?>