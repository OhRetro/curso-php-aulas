<!DOCTYPE html>
<html>
<body>

<?php
class Pessoa {
	public $nome;
    public $sobrenome;
    public $idade;
    
    function __construct($nome, $sobrenome, $idade) {
    	echo "$nome $sobrenome nasceu. <br>";
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
    }
    
    function __destruct() {
    	echo "$this->nome $this->sobrenome morreu. <br>";
    }
    
    function apresentar() {
    	echo "Nome: $this->nome $this->sobrenome | Idade: $this->idade <br>";
    }
}

$pessoa1 = new Pessoa("Eliel", "Neto", 17);
$pessoa1->apresentar();

?> 

</body>
</html>
