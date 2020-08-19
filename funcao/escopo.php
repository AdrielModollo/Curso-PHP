<div class="titulo"> Função & Escopo </div>

<?php
/*Coneceito de função: Sequência de códigos, algoritmos, passos, aonde é definido um nome de forma que você consiga chamar essa sequência
para reutilização de códigos */
    function imprimirMensagens(){   
        echo "Olá";
        echo "Até a próxima! <br> ";
    }

    imprimirMensagens();
    imprimirMensagens();
    imprimirMensagens();

    $variavel = 1;

    function trocaValor(){
        $variavel = 2;
        echo "Durante a função: $variavel <br>";
    }

    echo "Antes: $variavel <br>";
    trocaValor();
    echo "Depois: $variavel <br>";

    function trocaValorDeVerdade() {
        global $variavel;
        $variavel = 3;
        echo "Durante a função: $variavel <br>";
    }

    echo "Antes: $variavel <br>";
    trocaValorDeVerdade();
    echo "Depois: $variavel <br>";