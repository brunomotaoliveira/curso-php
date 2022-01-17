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

    function preparar() {
        echo "Colocar comida no prato";
    }
}



$animal1 = new Cachorro();
$animal1->respirarFundo();

echo 'Fim!';
?>