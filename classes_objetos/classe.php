<div class="titulo">Primeira Classe</div>

<?php 

class Cliente {
    //atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();
$c1->nome = 'Ana Silva';
$c1->idade = 28;
// $c1->apresentar(); // acessa o membro de um objeto criado

$c2 = new Cliente;
$c2->nome = 'Bruno';
$c2->idade = 30;

echo $c1->apresentar(), '</br>';
echo $c2->apresentar();

?>