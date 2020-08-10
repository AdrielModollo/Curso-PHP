<div class="titulo">Desafio Variáveis</div>

<?php

    $a = 'Nossa';
    $Nossa = 'Eu';
    $Eu = 'consegui';
    $consegui = 'responder';
    $responder = 'esse';
    $esse = 'desafio';

    echo "$a! {$$a} {$$Nossa} {$$Eu} {$$consegui} {$$responder} {$$esse}. ";

    echo '<br> Outra solução:';
    echo " $a! {$$a} {$$$a} {$$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";