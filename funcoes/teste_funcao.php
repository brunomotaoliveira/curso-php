<div class="titulo">Teste Interface</div>

<?php 

interface Animal {
    function respirarFundo();
}

class Cachorro implements Animal {
    function respirarFundo() {
        echo "Irei usar oxigênio!<br>";
    }
}

$animal1 = new Cachorro();
$animal1->respirarFundo();

echo 'Fim!';
?>