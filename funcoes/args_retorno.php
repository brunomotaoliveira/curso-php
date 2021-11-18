<div class="titulo">Argumentos & Retorno</div>

<?php 
    function obterMensagem() {
        return 'Seja bem vindo(a)';
    }

    echo obterMensagem();
    $mensagem = obterMensagem();

    echo $m;

    echo '<br>', obterMensagem();
    echo '<br>';
    var_dump(obterMensagem());

    function ObterMensagemComNome($nome) {
        return "Bem vindo, {$nome}!";
    }

    echo '<br>', ObterMensagemComNome('Bruno Mota');

    function soma($a, $b) {
        return $a + $b;
    }

    $x = 4;
    $y = 5;

    echo '<br>', soma($x, $y);
    echo '<br>', soma(22, 25);
?>