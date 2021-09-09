<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="celsius-fahr">Celsius > Fahrenheit</option>
        <option value="fahr-celsius">Fahrenheit > Celsius</option>
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

    const FATOR_KM_MILHA = 0.621371;
    const FATOR_METRO_KM = 1000;


    switch($_POST['conversao']) {
        case 'km-milha':
            $quantidadeDeMilhas = $_POST['param'] * FATOR_KM_MILHA;
            $quantidadeDeMilhas = number_format($quantidadeDeMilhas,0, '.', '.'); // formata o numero/casas decimais
            echo $_POST['param'] . " quilômetros" . " tem $quantidadeDeMilhas milhas";
            break;
        
        case 'milha-km':
            $quantidadeDeKm = $_POST['param'] / FATOR_KM_MILHA;
            $quantidadeDeKm = number_format($quantidadeDeKm,0, '.', '.');
            echo $_POST['param'] . " milhas" . " tem $quantidadeDeKm quilômetros";
            break;

        case 'metro-km':
            $quantidadeDeMetrosKm = $_POST['param'] / FATOR_METRO_KM;
            $quantidadeDeMetrosKm = number_format($quantidadeDeMetrosKm,0, '.', '.');
            echo $_POST['param'] . " metros" . " tem $quantidadeDeMetrosKm quilômetros";
            break;
        
        case 'km-metro':
            $quantidadeDeKmMetros = $_POST['param'] * FATOR_KM_MILHA;
            $quantidadeDeKmMetros = number_format($quantidadeDeKmMetros,0,'.', '.');
            echo $_POST['param'] . " quilômetros" . " tem $quantidadeDeKmMetros metros";
            break;

        case 'celsius-fahr':
            $fahrenheit = ($_POST['param'] * 1.8) + 32;
            $fahrenheit = number_format($fahrenheit,1);
            echo $_POST['param'] . " celsius" . " equivale a $fahrenheit fahrenheit";
            break;

        case 'fahr-celsius':
            $celsius = ($_POST['param'] - 32) / 1.8;
            $celsius = number_format($celsius,1);
            echo $_POST['param'] . " fahrenheit" . " equivale a $celsius celsius";
            
        default:
            $mensagem = "Nenhum valor calculado";
    }
?>