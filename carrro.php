<?php
$categoria = "LUXOa";
$carro = "Nenhum";
$preco = "Nenhum";

switch(strtolower($categoria)) {
    case "luxo":
        $carro = "BMW";
        $preco = 350000;
        break;
        
    case "suv": 
        $carro = "Jeep";
        $preco = 80000;
        break;
    
    case "sedan":
        $carro = "Etios";
        $preco = 55000;
        break;
    
    default:
        echo "errado. k\n";
        break;
}

echo "Carro: $carro, Preço: $preco";

?>