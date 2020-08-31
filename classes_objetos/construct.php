<div <div class="titulo">Classe</div>

<?php 

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade) {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'E morreu!';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

// $pessoa = new Pesosa(); //Problema
$pessoaA = new Pessoa('Rebeca Maria', 40);
$pessoaA->apresentar();
unset($pessoaA);

$pessoaB = new Pessoa('João Pedro', 13);
$pessoaB->apresentar();
$pessoaB = null;



