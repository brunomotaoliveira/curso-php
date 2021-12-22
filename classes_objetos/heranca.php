<div class="titulo">Herança</div>

<?php 

class Pessoa {

    //atributos
    public $nome;
    public $idade;


    //construtctor
    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct()
    {
        echo 'Tchau!!';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

?>