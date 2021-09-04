<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero vai ser convertido pra false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1); 
echo '<br>' . var_dump((bool) 0.000000001);
echo '<br>' . var_dump((bool) "");//string sem nada
echo '<br>' . var_dump((bool) " ");// string vazia
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");

echo '<br>' . var_dump(!"false"); // ! nega o valor
?>