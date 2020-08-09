<div class="titulo"> Operação aritméticas</div>

<?php
    echo 2-1, '<br>';
    var_dump(2 - 1.0);
    echo '<br>';
    echo 2 - 3.5, '<br>';
    echo 7 / 4, '<br>';
    echo intdiv(7, 4), '<br>';
    echo round(7 / 4), '<br>';
    echo 7 % 4, '<br>';
    echo 4 ** 2, '<br>';

    // Precedência de operações
    // () => ** => / * % => + -
    echo '<p>Precedência</p>';
    echo 2 + 3 * 4, '<br>';
    echo (2 + 3) * 4, '<br>';
    echo 2 + 3 * 4 ** 2, '<br>';
    echo ((2 + 3) * 4) ** 2;
