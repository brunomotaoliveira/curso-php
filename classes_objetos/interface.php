<div class="titulo">Interface</div>

<?php 

interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal { //metodos dentro da interface são publicos por padrao
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
echo $animal1->respirar(), '<br>';
echo $animal1->latir(), '<br>';

echo 'Fim!';
?>