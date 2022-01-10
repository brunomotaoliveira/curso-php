<div class="titulo">Interface</div>

<?php 

interface Animal {
    function respirar();
}

class Cachorro implements Animal {

}

$animal1 = new Cachorro();
$animal1->respirar();

?>