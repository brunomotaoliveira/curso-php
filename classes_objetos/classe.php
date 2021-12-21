<div class="titulo">Primeira Classe</div>

<?php 

class Cliente {
    //atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        echo "Nome: {$this->nome}<br>";
    }
}

$c1 = new Cliente();
$c1->apresentar(); // acessa o membro de um objeto criado

?>