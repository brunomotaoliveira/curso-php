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
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>

    <div>
        <label for="t2">Trabalho 2(Quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>