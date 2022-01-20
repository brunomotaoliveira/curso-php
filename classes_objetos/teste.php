<?php 

$list_user = [
    [
        "id" => 1,
        "name" => "Gabriel",
    ],
    [
        "id" => 2,
        "name" => "Bruno",
    ]
];

$pedidos = [
    [
        "id_user" => 1, 
        "name"  => "Pão de queijo",
        "valor" =>  113
    ],
    [
        "id_user" => 1, 
        "name"  => "cafe com leite",
        "valor" =>  217
    ],
    [
        "id_user" => 2, 
        "name"  => "Pão de queijo",
        "valor" =>  123
    ],
    [
        "id_user" => 2, 
        "name"  => "Pão doce",
        "valor" =>  137
    ],
    [
        "id_user" => 2, 
        "name"  => "Suco",
        "valor" =>  112
    ],
];

//foreach para testes
/* foreach($list_user as $user) {
    //$pedidosGabriel = [];
    //$pedidosBruno = [];

        print_r($user);
        echo '<br>';
} */



 foreach($pedidos as $pedido) {

    if($pedido["id_user"] == 1) {
        $pedidosGabriel[] = $pedido;
        print_r(json_encode($pedido));
    }
    if($pedido["id_user"] == 2) {
        $pedidosBruno[] = $pedido;
        print_r(json_encode($pedido));
    }
    echo '<br>';
}


print_r(["Gabriel"=>array_sum(array_column($pedidosGabriel,'valor'))]);
echo '<br>';
print_r(["Bruno"=>array_sum(array_column($pedidosBruno, 'valor'))]); 


?>
