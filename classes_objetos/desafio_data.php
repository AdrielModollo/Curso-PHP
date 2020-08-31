<div class="titulo">Desafio data</div>

<?php 

class Data {
   public $dia = 01;
   public $mes = 01;
   public $ano = 1970;
    

public function apresentar() {
    return "Dia: {$this->dia} Mês: {$this->mes} Ano: {$this->ano}<br>";
    }
}

$aniversario = new Data();
$aniversario->apresentar();
$aniversario->dia=03;
$aniversario->mes=05;
$aniversario->ano=1996;
echo $aniversario->apresentar();