<div class="titulo">Constantes</div>

<?php
    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS;
    echo '<br>' . $TAXA_DE_JUROS . '!';
    //TAXA_DE_JUROS = 2.5;

    const NOVA__TAXA = 2.5;
    echo '<br>' . NOVA__TAXA;

    $valorVariavel = 2.8;
    //define('NOVISSIMA_TAXA', $valorVariavel);
    const NOVISSIMA_TAXA = 2.8 + 1.2;
    echo '<br>' . NOVISSIMA_TAXA;

    ECHO '<br>' . PHP_VERSION;
    echo '<br> Linha: ' . __LINE__;
    echo '<br> ' . __File__;
    echo '<br> ' . __DIR__;