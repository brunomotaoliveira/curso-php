<div class="titulo">Teste Interface</div>

<?php 

interface Animal {
    function respirarFundo();
}

interface TesteComida{
    function preparar();
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