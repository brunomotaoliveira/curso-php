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

$novoCliente = new DesafioData();

echo $novoCliente->apresentar();
?>