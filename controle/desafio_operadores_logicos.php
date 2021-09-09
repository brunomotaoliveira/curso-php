<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 
    Dois trabalhos -> terça e quinta
        - Se os dois trabalhos forem executados : TV 50' e Sorvete
        - Se apenas um for executado : TV 32' e Sorvete
        - See nenhum for executado : Ficar em casa, mais saudavel.
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="">Selecione uma opção</option>
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>

    <div>
        <label for="t2">Trabalho 2(Quinta):</label>
        <select name="t2" id="t2">
            <option value="">Selecione uma opção</option>
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
    //echo $_POST['t1'];
    //echo $_POST['t2'];

    if(($_POST['t1'] === '1') XOR ($_POST['t2'] === '1')){
        echo "Vamos comprar uma TV 32' e Sorvete";
    } else if(($_POST['t1'] === '1') && ($_POST['t2'] === '1')){
        echo "Vamos comprar uma TV 50' e Sorvete";
    } else {
        echo "Vamos ficar em casa que é mais saudável!";
    }
?>