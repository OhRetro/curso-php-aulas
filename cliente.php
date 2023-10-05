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

//$pessoa1 = new Pessoa("Eliel", "Neto", 17);
#$pessoa1->apresentar();

class User extends Pessoa {
	public $login;
    public $senha;
    
    function __construct($nome, $sobrenome, $idade, $login, $senha) {
    	echo "Usuário @$login foi criado. <br>";
    	parent::__construct($nome, $sobrenome, $idade);
        $this->login = $login;
        $this->senha = $senha;
    }
    
    function __destruct() {
    	echo "Usuário @$this->login foi deletado. <br>";
    }
    
    function apresentar() {
    	echo "@$this->login <br>";
        parent::apresentar();
    }
}

$user1 = new User("Eliel", "Neto", 17, "vaca1234", "omaga");
$user1->apresentar();

?> 

</body>
</html>
