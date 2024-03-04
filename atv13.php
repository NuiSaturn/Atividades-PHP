<?php
function isMatrizSimetrica($matriz) {
    $transposta = array_map(null, ...$matriz);
    return $matriz == $transposta;
}

$matriz = array(
    array(1, 2, 3),
    array(2, 4, 5),
    array(3, 5, 6)
);

if (isMatrizSimetrica($matriz)) {
    echo "A matriz é simétrica.";
} else {
    echo "A matriz não é simétrica.";
}
?>
