<div class="titulo">Classe</div>

<?php 

class Cliente {
    public $nome = 'Anônimo';
    public $idade = 18;

public function apresentar() {
    return "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente;
$c1->nome = 'Ana Silva';
$c1->idade = 27.5;

$c2 = new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 43;

$c1->apresentar();
echo $c2->apresentar();