<div class="titulo">Visibilidade</div>

<?php 

class A {
    public  $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() { //mostrar os atributos
        echo "a) Publico = {$this->publico}<br>";
        echo "a) Protegido = {$this->protegido}<br>";
        echo "a) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo 'Serei transmitido por herança!<br>';
    }

    private function naoMostrar() { // não é possivel acessar diretamente
        echo 'Não vou imprimir!';
    }
}

$a = new A();
$a->mostrarA();
//$a->naoMostrar();

echo "Fim!";

class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";


        parent::vaiPorHeranca();
    }
}
echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();
//$b->vaiPorHeranca();

?>