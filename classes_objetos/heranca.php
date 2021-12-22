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
        echo 'Pessoa diz: Tchau!!';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        /* $this->nome = $nome;
        $this->idade = $idade; */
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuario Criado! <br>';
    }

    function __destruct()
    {
        echo 'Usuário diz: Tchau!!';
        parent::__destruct();
    }

    public function apresentar() {
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$usuario = new Usuario('Bruno Mota', 30, 'brun_mot');
$usuario->apresentar();
unset($usuario);

?>