<div class="titulo">Conversões</div>

<?php 
    echo is_int(PHP_INT_MAX);

    //int para float
    echo '<br>';
    var_dump(PHP_INT_MAX + 1);
    echo '<br>';
    var_dump(1 + 1.0);
    echo '<br>';
    var_dump((float) 3);

    // float para int
    echo '<p>Float para int</p>';
    var_dump((int) 2.8);
    echo '<br>';
    var_dump(intval(2.8, 10));
    echo '<br>';
    var_dump((int) round(2.8));

    // operações com string
    echo '<p>Strings</p>';
    var_dump(3 + "2");
    echo '<br>';
    var_dump("3" + 2);
    echo '<br>';
    var_dump("3" . 2);
    echo '<br>' , is_string("3" . 2); // verifica se é uma string
    echo '<br>' , is_string("3" + 2);
    echo '<br>';
    var_dump(1 + "cinco");
    echo '<br>';
    var_dump(1 + "5 cinco");
    echo '<br>';
    var_dump(1 + "comcp 5");
    echo '<br>';
    var_dump(1 + "2+5");// não considera a parte final depois do float
    echo '<br>';
    var_dump(1 + "3.2"); // entre o int e o float, o float acaba ganhando. E o resultado acaba sendo convertido para float.
    echo '<br>';
    var_dump(1 + "-3.2e2");
    echo '<br>';
    var_dump((int) "10.5"); // convertendo de forma explicita para int. "trunca" o valor. Se tornando 10.
    echo '<br>';
    var_dump((float) "10.5"); // converter o string para float
?>