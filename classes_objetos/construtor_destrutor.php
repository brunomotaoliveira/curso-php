<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa {
    //atributos
    public $nome;
    public $idade;

    //metodo construtor
    function __construct($novoNome, $idade = 18)
    {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;        
    }
    //metodo destrutor
    function __destruct()
    {
        echo 'E morreu!';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}


$pessoa = new Pessoa('Rebeca Maria', 40);
$pessoa->apresentar();

//$pessoa = new Pessoa(); // problema

unset($pessoa);