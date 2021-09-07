<div class="titulo">Operadores Lógicos</div>

<?php 
echo "<p>Negação Lógica</p><hr>";
    var_dump(true);
    echo '<br>';
    var_dump(!true); // " ! "(not)= operador de negação (unario)

    echo "<p>Tabela Verdade (E)'AND'</p><hr>";
    var_dump(true && true);
    echo "<br>";
    var_dump(true && false);
    var_dump(false && true);
    var_dump(false && false);
    var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');

    var_dump(true AND true);
    var_dump(true AND false);
    var_dump(false and false);
    var_dump(false and false);

    echo "<p>Tabela Verdade 'OR (OU)</p><hr>";
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false || false);

    var_dump(true or true);
    var_dump(true or false);
    var_dump(false or true);
    var_dump(false or false);

    echo "<p>Tabela Verdade 'XOR' (OU exclusivo)</p><hr>";
    var_dump(true xor true);
    var_dump(true xor false);
    var_dump(false xor true);
    var_dump(false xor false);

    var_dump(true != true);
    var_dump(true != false);
    var_dump(false != true);
    var_dump(false != false);

?>


<style>
    p {
        margin-bottom: 0px;
        font-weight: bold;
    }

    hr {
        margin-top: 0px;
    }

</style>
