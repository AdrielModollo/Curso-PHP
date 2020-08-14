<div class="titulo">Operações</div>

<?php
    $dados1 = [
        "nome" => "Jose",
        "idade" => 28
    ];

    $dados2 = [
        //"nome" => "Maria",
        "naturalidade" => "Fortaleza"
    ];

   ;;
   //adicionar
    //$dados2["end"] = "Rua A";

    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);

    echo '<br>' . is_array($dadosCompletos);
    echo '<br>' . count($dadosCompletos);

    echo '<br>';
    $indice = array_rand($dadosCompletos);
    echo "$indice = $dadosCompletos[$indice]";
    echo '<br>';
    echo "{$dadosCompletos['idade']}";
    echo " ${dadosCompletos['idade']}";

    //remover elementos
    unset($dadosCompletos["nome"]);
    echo '<br>';
    print_r($dadosCompletos);

    //liberar memória
    unset($dadosCompletos);
    echo '<br>';
    var_dump($dadosCompletos);

    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];

    //para não sobreescrever
    $decimas = $pares + $impares;
    echo '<br>';
    print_r($decimais);

    //junta os valores de array
    $decimais = array_merge($pares, $impares);
    echo '<br>';
    print_r($decimais);

    //organiza a forma que é chamado o array
    sort($decimais);
    echo '<br>';
    print_r($decimais);