<div class= "titulo"> While /Do While </div>

<?php
    const VALOR_LIMITE = 5;
    $contador = 10;


    do {
        echo "while $contador <br>";
        $contador++;
    }  while ($contador < VALOR_LIMITE);
    
/*Laço infinito
    $contador = 0;
    while(true){
        echo "while(true) $contador <br>";
        if($contador >= VALOR_LIMITE) break;
    } */