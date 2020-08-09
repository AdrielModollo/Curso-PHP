<div class="titulo">Conversão PHP</div>

<?php

echo is_int(PHP__INT_MAX);

//INT PARA FLOAT

echo '<br>';
var_dump(PHP_INT_MAX + 1);
ECHO '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3); 

//FLOAT PARA INT
echo '<p>Float para int</p>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.8));
echo '<br>';
var_dump((int) round(2.8));

//OPERAÇÕES COM STRING
echo '<p>String</p>';
var_dump(3 + "2");
var_dump(3 . "2");
echo '<br>', is_string("3" . 2);
//echo '<br>', is_string("3" + [2]);
var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco");
echo '<br>';
var_dump(1 + "2+5");
echo '<br>';
var_dump((int) "51.5");
echo '<br>';
var_dump((float) "51.5");
?>

