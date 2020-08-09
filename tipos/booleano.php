<div class="titulo">Tipo String</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>';
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// Fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((bool) 20); // apenas zero é false
echo '<br>' . var_dump((bool) -1); // apenas zero é false
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.0000001);
echo '<br>' . var_dump((bool) "");
echo '<br>' . var_dump((bool) "0");
echo '<br>' . var_dump((bool) " ");
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");
echo '<br>' . var_dump((bool) !"false");
?>
