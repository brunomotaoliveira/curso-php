<div class="titulo">Operadores Relacionais</div>

<?php
    /* var_dump(1 == 1);
    echo "<br>";
    var_dump(1 < 7);
    echo "<br>";
    var_dump(1 > 1);
    echo "<br>";
    var_dump(1 >= 1);
    echo "<br>";
    var_dump(4 <= 23);
    echo "<br>";
    var_dump(1 != 1);
    echo "<br>";
    var_dump(1 <> 1); */
    
    var_dump(1 === '1'); // verifica o tipo e valor
    echo "<br>";
    var_dump(1 == '1'); // verifica apenas o valor
    echo "<br>";
    var_dump(1 != '1'); // verifica apenas o valor
    echo "<br>";
    var_dump(1 !== '1'); // verifica o tipo e valor


    echo "<p>Relacionais no If/Else</p><hr>";
    $idade = 15;
    if($idade < 18) {
        echo "Menor de idade = $idade anos<br>";
    } else if ($idade <= 65) {
        echo "Adulto = $idade anos<br>";
    } else {
        echo "Terceira idade = $idade anos!";
    }

    echo '<p>Spaceship</p><hr>';
    var_dump(5 <=> 3); // <=>  : operador space ship
    var_dump(50 <=> 50); // se forem iguais, retorna 0
    var_dump(5 <=> 50); // se o primeiro for maior que o seguindo, retorna -1

    echo '<p>Valores podem ser verdadeiro ou falso</p><hr>';
    var_dump(!!5);
    var_dump(!!0);
    var_dump(!!"");
    var_dump(!!"");
?>

<style>
    p {
        margin-bottom: 0;
    }
    hr {
        margin-top: 0;
    }
</style>