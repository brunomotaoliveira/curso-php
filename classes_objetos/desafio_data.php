<div class="titulo">Desafio Data</div>

<?php 

class DesafioData {
    //atributos
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}<br>";
    }
}

$aniversario = new DesafioData(); // instanciando a classe
$aniversario->dia = 15; // aniversario.dia
$aniversario->mes = 8;
$aniversario->ano = 2014;

$casamento = new DesafioData(); // instanciando a classe
$casamento->dia = 1;
$casamento->mes = 8;
$casamento->ano = 2009;


echo $aniversario->apresentar(), '<br>'; // aniversario.apresentar()
echo $casamento->apresentar();
?>