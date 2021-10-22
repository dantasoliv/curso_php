<div class="titulo">Tipo Boleano</div>

<?php
echo true;
echo '<br>';
echo false;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false); // essa função identifica se o tipo é boleano ou não
echo '<br>' . is_bool('false'); // essa função identifica se o tipo é boleano ou não

// fazer regras de conversões
echo '<p>Regras</p>';
echo '<br>' . var_dump((bool) 0); // apenas 0 é false
echo '<br>' . var_dump((bool) 20); // true
echo '<br>' . var_dump((bool) -1); // true
echo '<br>' . var_dump((bool) 0.0); // false
echo '<br>' . var_dump((bool) 0.00001); // true
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) " "); // true
echo '<br>' . var_dump((bool) "00"); // true
echo '<br>' . var_dump((bool) "false"); // true
echo '<br>' . var_dump(!"true"); // false
echo '<br>' . var_dump(!!"true"); // false
