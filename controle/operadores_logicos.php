<div class="titulo">Operadores Lógicos</div>

<?php 
echo "<p class='divisao'>Negação Lógica</p><hr>";
    var_dump(true);
    echo '<br>';
    var_dump(!true); // " ! "(not)= operador de negação (unario)

    echo "<p class='divisao'>Tabela Verdade (E)'AND'</p><hr>";
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

    echo "<p class='divisao'>Tabela Verdade 'OR (OU)</p><hr>";
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false || false);

    var_dump(true or true);
    var_dump(true or false);
    var_dump(false or true);
    var_dump(false or false);

    echo "<p class='divisao'>Tabela Verdade 'XOR' (OU exclusivo)</p><hr>";
    var_dump(true xor true);
    var_dump(true xor false);
    var_dump(false xor true);
    var_dump(false xor false);

    var_dump(true != true);
    var_dump(true != false);
    var_dump(false != true);
    var_dump(false != false);

    echo "<p class='divisao'>Exemplo</p><hr>";
    $idade = 65;
    $sexo = 'M';
    echo '<br>';

    $pagouPrevidencia = true;

    $criterioHomem = ($idade >= 65 && $sexo === 'M');
    $criterioMulher = ($idade >= 60 && $sexo === 'F');
    $atingiuCriterio = $criterioHomem || $criterioMulher;
    $podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

    echo "Podese se aposentar -> $podeSeAposentar.<br>";
       

    if($idade >= 60 && $sexo === 'F'){
        ECHO "Pode se aposentar -> $sexo";
    } else if ( $idade >= 65 && $sexo === 'M') {
        echo "Pode se aposentar -> $sexo";
    } else {
        echo 'Vai ter que trabalhar mais um pouco...';
    }

?>
