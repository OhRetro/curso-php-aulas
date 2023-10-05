<!DOCTYPE html>
<html>
<body>

<?php
class Pessoa {
	public $nome;
    public $idade;
    
    function apresentar() {
    	echo "Nome: $this->nome | Idade: $this->idade <br>";
    }
}

$pessoa1 = new Pessoa();
$pessoa1->nome = "Gabriel";
$pessoa1->idade = 17;

$pessoa1->apresentar();

class Cliente {
	public $nome = "Anon";
    public $idade = "??";
    
    function apresentar() {
    	echo "Nome: $this->nome | Idade: $this->idade <br>";
    }
}

$client1 = new Cliente();

$client1->apresentar();

?> 

</body>
</html>
