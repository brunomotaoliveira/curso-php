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

interface Felino {
    function correr();
}

class Cachorro implements Animal, Canino {
    function respirar() {
        echo "Irei usar oxigênio!<br>";
    }

    function latir(): string {
        return 'au au';
    }

    function mamar() {
        return "Irei usar leite!";
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Felino);
?>