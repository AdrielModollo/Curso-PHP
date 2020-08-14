<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Adriel",
        "idade" => 24,
        "naturalidade" => "Matão"
    ],
    [
        "nome" => "Marina",
        "idade" => 14,
        "naturalidade" => "Araraquara"
    ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Zezinho",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "Chaves";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);
var_dump($dados[1000]);