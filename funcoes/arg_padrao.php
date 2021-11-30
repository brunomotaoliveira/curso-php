<div class="titulo">Argumento Padrão</div>

<?php 
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    echo "Bem vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao(NULL);
saudacao(null, NULL);
saudacao('Mestre', 'Supremo');
?>