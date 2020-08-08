<h1 center>
<?php

echo "Integração PHP ";
echo '<small azul> Menor </small>';

?>
</h1>

<div center><button dobro><?= Legal ?></button></div>

<style>
    button {
        padding: 5px  <?= 2 * 10 ?>px;
        background-color: #4285f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {
        font-size: 2rem;
    }
 
</style>