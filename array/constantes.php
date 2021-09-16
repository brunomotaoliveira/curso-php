<div class="titulo">Arrays Constantes</div>

<?php 
const FRUTAS = ['laranja', 'abacaxi'];
//FRUTAS[0] = 'banana';
//FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["fiat" => "uno", "ford" => "fiesta"];
// CARROS["BMW] = '325i';
echo '<br>' . CARROS["fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[0] = 'Rio de Janeiro'
echo '<br>' . CIDADES[1];

// no PHP, diferente de outras linguagens como JavaScript. Não permite alterar ou adicionar valores na array constante.
?>