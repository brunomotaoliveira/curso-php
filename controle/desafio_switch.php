<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
    </select>

    <button>Calcular</button>
</form>

<style>
    form > * { /* qualquer elemento que estiver relaciona a form */
        font-size: 1.8rem;
    }
</style>


<?php 
    //  echo $_POST['conversao'];
    //  echo $_POST['param'];

    $milha = 1.60934;
    $metros = 1000;


    switch($_POST['conversao']) {
        case 'km-milha':
            $quantidadeDeMilhas = $_POST['param'] / $milha;
            $quantidadeDeMilhas = number_format($quantidadeDeMilhas,0, '.', '.'); // formata o numero/casas decimais
            echo $_POST['param'] . " quilômetros" . " tem $quantidadeDeMilhas milhas";
            break;
        
        case 'milha-km':
            $quantidadeDeKm = $_POST['param'] * $milha;
            $quantidadeDeKm = number_format($quantidadeDeKm,0, '.', '.');
            echo $_POST['param'] . " milhas" . " tem $quantidadeDeKm quilômetros";
            break;

        case 'metro-km':
            $quantidadeDeMetrosKm = $_POST['param'] / $metros;
            $quantidadeDeMetrosKm = number_format($quantidadeDeMetrosKm,0, '.', '.');
            echo $_POST['param'] . " metros" . " tem $quantidadeDeMetrosKm quilômetros";
            break;
        
        case 'km-metro':
            $quantidadeDeKmMetros = $_POST['param'] * $metros;
            $quantidadeDeKmMetros = number_format($quantidadeDeKmMetros,0,'.', '.');
            echo $_POST['param'] . " quilômetros" . " tem $quantidadeDeKmMetros metros";
            break;
    }
?>