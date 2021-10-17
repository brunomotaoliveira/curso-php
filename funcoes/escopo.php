<div class="titulo">Função & Escopo</div>

<?php 
function imprimirMensagens() {
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

imprimirMensagens();


//escopo da função
$variavel = 1;
function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";
?>