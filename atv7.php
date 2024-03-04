<?php
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$transposta = array_map(null, ...$matriz);

echo "Matriz original:<pre>";
print_r($matriz);
echo "</pre>";

echo "Matriz transposta:<pre>";
print_r($transposta);
echo "</pre>";
?>
